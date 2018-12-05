/**
 * Definition for singly-linked list.
 * function ListNode(val) {
 *     this.val = val;
 *     this.next = null;
 * }
 */
class ListNode {
  constructor(val) {
    this.val = val;
    this.next = null;
  }
}

/**
 * Print ListNode
 *
 * @return {ListNode}
 * @param node
 */
function printSinglyLinkedList(node) {
  while (node != null) {
    console.log(String(node.val));
    node = node.next;
  }
}

/**
 * Merge two sorted list function
 *
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */
const mergeTwoLists = function(l1, l2) {
  if (l1 === null || l2 === null) {
    return l1 || l2;
  }

  if (l1.val < l2.val) {
    l1.next = mergeTwoLists(l1.next, l2);
    return l1;
  } else {
    l2.next = mergeTwoLists(l1, l2.next);
    return l2;
  }
};

let l1 = new ListNode(null);
let head1 = l1;
[1, 2, 4].forEach(function (x) {
  if (l1.val === null) {
    l1.val = x;
  } else {
    l1.next = new ListNode(x);
    l1 = l1.next;
  }
});

let l2 = new ListNode(null);
let head2 = l2;
[1, 3, 4].forEach(function (x) {
  if (l2.val === null) {
    l2.val = x;
  } else {
    l2.next = new ListNode(x);
    l2 = l2.next;
  }
});

printSinglyLinkedList(mergeTwoLists(head1, head2)); // 1, 1, 2, 3, 4, 4