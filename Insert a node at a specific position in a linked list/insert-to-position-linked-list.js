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

  insertNode(nodeData) {
    const node = new SinglyLinkedListNode(nodeData);

    if (this.head == null) {
      this.head = node;
    } else {
      this.tail.next = node;
    }

    this.tail = node;
  }
};

function printSinglyLinkedList(node) {
  while (node != null) {
    console.log(String(node.data));
    node = node.next;
  }
}

function main() {
  const llist = new SinglyLinkedList();
  const list_data = [...Array(3).keys()];

  for (let data in list_data) {
    llist.insertNode(data);
  }

  let head = insertNodeAtPosition(llist.head, 3, 1);

  printSinglyLinkedList(head);
}

main();

/**
 * Insert in Node at position function
 *
 * @param {SinglyLinkedListNode} head
 * @param {int} data
 * @param {int} position
 * @return {SinglyLinkedListNode}
 */
function insertNodeAtPosition(head, data, position) {
  const node = new SinglyLinkedListNode(data);
  let curr_node = head;

  if (curr_node === null) {
    return node;
  } else if (position === 0) {
    node.next = curr_node;
    return node;
  }

  for (let i = 0; i < position - 1; i++) {
    curr_node = curr_node.next;
  }

  node.next = curr_node.next;
  curr_node.next = node;

  return head;
}