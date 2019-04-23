<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 16.10.18
 * Time: 14:18
 */

/**
 * Print linked list
 *
 * @param SinglyLinkedListNode|null $head
 * @return void
 */
function printLinkedList($head)
{
    if ($head->data) {
        echo "{$head->data}<br>";
    }
    if (!$head->next) {
        return;
    }
    printLinkedList($head->next);
}

class SinglyLinkedListNode
{
    /** @var int $data */
    public $data;
    /** @var SinglyLinkedListNode|null $next */
    public $next;

    /**
     * SinglyLinkedListNode constructor.
     * @param int $data
     */
    public function __construct(int $data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class SinglyLinkedList
{
    /** @var SinglyLinkedListNode|null $head */
    public $head;
    /** @var SinglyLinkedListNode|null $tail */
    public $tail;

    /**
     * SinglyLinkedList constructor.
     */
    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    /**
     * Insert node to linked list by head
     *
     * @param $node_data
     * @return void
     */
    public function insertNode($node_data)
    {
        $node = new SinglyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }

        $this->tail = $node;
    }
}

/**
 * Insert in Node at position function
 *
 * @param SinglyLinkedListNode|null $llist
 * @param int $data
 * @param int $position
 * @return SinglyLinkedListNode
 */
function insertNodeAtPosition($llist, $data, $position) {
    /** @var SinglyLinkedListNode $node */
    $node = new SinglyLinkedListNode($data);
    $currNode = $llist;

    if (is_null($currNode)) {
        return $node;
    } elseif ($position === 0) {
        $currNode->next = $llist;
        return $currNode;
    }

    for ($i = 0; $i < $position - 1; $i++) {
        $currNode = $currNode->next;
    }

    $node->next = $currNode->next;
    $currNode->next = $node;

    return $llist;
}

/** @var SinglyLinkedList $list */
$list = new SinglyLinkedList();

$randomInputs = range(1, 10);
shuffle($randomInputs);

foreach ($randomInputs as $input) {
    $list->insertNode($input);
}

/** @var SinglyLinkedListNode $head */
$head = insertNodeAtPosition($list->head, 3, 1);

printLinkedList($head);