<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 02.11.18
 * Time: 18:25
 */

class ListNode
{
    /** @var int $val */
    public $val;
    /** @var ListNode|null $next */
    public $next;

    /**
     * ListNode constructor.
     * @param int $nodeData
     */
    public function __construct($nodeData)
    {
        $this->val = $nodeData;
        $this->next = null;
    }
}

/**
 * Print linked list
 *
 * @param ListNode $head
 * @return void
 */
function printLinkedList(ListNode $head)
{
    if (isset($head->val)) {
        echo "$head->val<br>";
    }
    if (!$head->next) {
        return;
    }
    printLinkedList($head->next);
}

/**
 * Create LinkedList by array
 *
 * @param array $arr
 * @return ListNode
 */
function createLinkedList(array $arr)
{
    $head = $list = new ListNode(null);
    foreach ($arr as $x) {
        if (is_null($list->val)) {
            $list->val = $x;
        } else {
            $list->next = new ListNode($x);
            $list = $list->next;
        }
    }

    return $head;
}

/**
 * Add two numbers by listNodes function
 *
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2)
{
    $numbers = [1 => '', 2 => ''];

    while (!is_null($l1) || !is_null($l2)) {
        if (!is_null($l1)) {
            $numbers[1] = "{$l1->val}{$numbers[1]}";
            $l1 = $l1->next;
        }
        if (!is_null($l2)) {
            $numbers[2] = "{$l2->val}{$numbers[2]}";
            $l2 = $l2->next;
        }
    }

    /** @var ListNode $l3 */
    $l3 = new ListNode(null);
    /** @var ListNode $head */
    $head = $l3;

    foreach (array_map("intval",str_split(strrev(strval($numbers[1] + $numbers[2])))) as $x) {
        if (is_null($l3->val)) {
            $l3->val = $x;
        } else {
            $l3->next = new ListNode($x);
            $l3 = $l3->next;
        }
    }

    return $head;
};

/** @var ListNode $l3 */
$l3 = addTwoNumbers(createLinkedList([2, 4, 3]), createLinkedList([5, 6, 4]));
printLinkedList($l3); // 7 0 8