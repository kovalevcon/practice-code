<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 04.09.18
 * Time: 11:44
 */

/**
 * Ease the StockBroker function
 *
 * @param string $list
 * @return string
 */
function balanceStatements(string $list): string
{
    if (!strlen($list)) {
        return 'Buy: 0 Sell: 0';
    }

    $buySum = $sellSum = 0;
    $badlyFormed = [];

    $items = explode(", ", $list);
    foreach ($items as $item) {
        $order = explode(' ', $item);
        if (isCorrectOrder($order)) {
            $total = $order[1] * (float)$order[2];
            $order[3] == 'B' ? $buySum += $total : $sellSum += $total;
        } else {
            $badlyFormed[] = "{$item} ";
        }
    }

    $result = sprintf("Buy: %d Sell: %d", round($buySum), round($sellSum));
    $countBadly = count($badlyFormed);
    if ($countBadly) {
        $result .= sprintf("; Badly formed %d: %s;", $countBadly, implode(";", $badlyFormed));
    }

    return $result;
}

function isCorrectOrder(array $order): bool
{
    return count($order) == 4 && is_string($order[0]) && preg_match('/^[\d]+$/', $order[1])
        && preg_match('/^[\d]*\.[\d]+$/', $order[2])
        && in_array($order[3], ['B','S']);
}

echo "<pre>balanceStatements('GOOG 300 542.0 B, AAPL 50 145.0 B, CSCO 250.0 29 B, GOOG 200 580.0 S')\r\n";
echo balanceStatements('GOOG 300 542.0 B, AAPL 50 145.0 B, CSCO 250.0 29 B, GOOG 200 580.0 S'); // Buy: 169850 Sell: 116000; Badly formed 1: CSCO 250.0 29 B ;
echo "</pre>";

echo "<pre>balanceStatements('')\r\n";
echo balanceStatements(''); // Buy: 0 Sell: 0
echo "</pre>";