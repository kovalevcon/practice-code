const SinglyLinkedListNode = class {
  constructor(nodeData) {
    this.data = nodeData;
    this.next = null;
  }
};

const SinglyLinkedList = class {
  constructor() {
    this.head = null;
    this.tail = null;
  }
};

function printSinglyLinkedList(node) {
  while (node != null) {
    console.log(String(node.data));
    node = node.next;
  }
}

function insertNodeAtHead(head, data) {
  const new_head = new SinglyLinkedListNode(data);

  if (head) {
    new_head.next = head;
  }

  return new_head;
}

function main() {
  const llist = new SinglyLinkedList();
  const list_data = [...Array(10).keys()];

  for (let data in list_data) {
    const llist_head = insertNodeAtHead(llist.head, data);
    llist.head = llist_head;
  }

  printSinglyLinkedList(llist.head);
}

main();