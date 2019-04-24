package main

import (
	"fmt"
)

type SinglyLinkedListNode struct {
	data int32
	next *SinglyLinkedListNode
}

type SinglyLinkedList struct {
	head *SinglyLinkedListNode
	tail *SinglyLinkedListNode
}

func (singlyLinkedList *SinglyLinkedList) insertNodeIntoSinglyLinkedList(nodeData int32) {
	node := &SinglyLinkedListNode {
		next: nil,
		data: nodeData,
	}

	if singlyLinkedList.head == nil {
		singlyLinkedList.head = node
	} else {
		singlyLinkedList.tail.next = node
	}

	singlyLinkedList.tail = node
}

func printSinglyLinkedList(node *SinglyLinkedListNode) {
	for node != nil {
		fmt.Printf("data: %d\n", node.data)
		node = node.next
	}
}

func insertNodeAtPosition(llist *SinglyLinkedListNode, data int32, position int32) *SinglyLinkedListNode {
	node := &SinglyLinkedListNode {
		next: nil,
		data: data,
	}
	currNode := llist

	if position == 0 {
		node.next = currNode
		return node
	}

	for i := 1; i <= int(position - 1); i++ {
		currNode = currNode.next
	}

	node.next = currNode.next
	currNode.next = node

	return llist
}

func main() {
	llist := SinglyLinkedList{}
	for i := 0; i < 5; i++ {
		llist.insertNodeIntoSinglyLinkedList(int32(i + 1))
	}

	llist_head := insertNodeAtPosition(llist.head, 1, 3)

	printSinglyLinkedList(llist_head)
	fmt.Println("\n")
}