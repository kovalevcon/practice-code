<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 08.10.18
 * Time: 18:31
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

    /**
     * SinglyLinkedList constructor.
     */
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Insert node to linked list by tail
     *
     * @param SinglyLinkedListNode|null $head
     * @param int $data
     * @return SinglyLinkedListNode
     */
    public function insertNodeAtTail($head, int $data)
    {
        if (!$head) {
            return new SinglyLinkedListNode($data);
        } else {
            if (!$head->next) {
                $head->next = new SinglyLinkedListNode($data);
            } else {
                $this->insertNodeAtTail($head->next, $data);
            }

            return $head;
        }
    }
}

/** @var SinglyLinkedList $list */
$list = new SinglyLinkedList();

$randomInputs = range(1, 10);
shuffle($randomInputs);

foreach ($randomInputs as $input) {
    $head = $list->insertNodeAtTail($list->head, $input);
    $list->head = $head;
}

printLinkedList($list->head);