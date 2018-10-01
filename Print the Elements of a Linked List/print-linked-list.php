<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 01.10.18
 * Time: 19:00
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
        echo "$head->data<br>";
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
     * @param int $nodeData
     */
    public function __construct(int $nodeData)
    {
        $this->data = $nodeData;
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
     * Insert node to linked list
     *
     * @param int $nodeData
     * @return void
     */
    public function insertNode(int $nodeData)
    {
        /** @var SinglyLinkedListNode $node */
        $node = new SinglyLinkedListNode($nodeData);

        if (!$this->head) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }

        $this->tail = $node;
    }
}

/** @var SinglyLinkedList $list */
$list = new SinglyLinkedList();

for ($i = 0, $len = rand(1, 10); $i < $len; $i++) {
    $list->insertNode(rand(1, 100));
}

printLinkedList($list->head);