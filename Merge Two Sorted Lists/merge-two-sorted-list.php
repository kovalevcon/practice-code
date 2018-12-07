<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 07.12.18
 * Time: 14:07
 */

class ListNode
{
    public $val;
    public $next;

    /**
     * ListNode constructor.
     * @param int $nodeData
     */
    public function __construct($nodeData = null)
    {
        $this->val = $nodeData;
        $this->next = null;
    }

    /**
     * Create ListNode by array data
     *
     * @param array $data
     * @return ListNode
     */
    public static function createListNode(array $data)
    {
        /** @var ListNode $list */
        $list = new ListNode;
        $head = $list;

        foreach ($data as $val) {
            if (is_null($list->val)) {
                $list->val = $val;
            } else {
                $list->next = new ListNode($val);
                $list = $list->next;
            }
        }

        return $head;
    }

    /**
     * Print ListNode like a string
     *
     * @param ListNode $list
     * @return string
     */
    public static function printListNode(ListNode $list)
    {
        $arr = [];

        while ($list) {
            if ($list->val) {
                $arr[] = $list->val;
            }
            $list = $list->next;
        }

        return implode(',', $arr);
    }

    /**
     * Merge the two ListNodes
     *
     * @param ListNode|null $l1
     * @param ListNode|null $l2
     * @return ListNode|null
     */
    public static function mergeTwoLists($l1, $l2)
    {
        $l3 = new ListNode;
        $head = $l3;

        while ($l1 and $l2) {
            if ($l1->val < $l2->val) {
                $l3->next = $l1;
                $l1 = $l1->next;
            } else {
                $l3->next = $l2;
                $l2 = $l2->next;
            }
            $l3 = $l3->next;
        }

        $l3->next = $l1 or $l2;

        return $head->next;
    }
}

echo "<pre>mergeTwoLists([1, 2, 4], [1, 3, 4])\r\n";
echo ListNode::printListNode(
        ListNode::mergeTwoLists(
            ListNode::createListNode([1, 2, 4]),
            ListNode::createListNode([1, 3, 4])
        )
    ); // '1,1,2,3,4,4'
echo "</pre>";