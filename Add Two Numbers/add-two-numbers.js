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
 * Add two numbers by listNodes function
 *
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */
const addTwoNumbers = function(l1, l2) {
  const numbers = {1: '', 2: ''};

  while (l1 !== null || l2 !== null) {
    if (l1 !== null) {
      numbers[1] = l1.val + numbers[1];
      l1 = l1.next;
    }
    if (l2 !== null) {
      numbers[2] = l2.val + numbers[2];
      l2 = l2.next;
    }
  }

  let l3 = new ListNode(null);
  let head = l3;

  (parseInt(numbers[1]) + parseInt(numbers[2]) + '').split('').reverse().forEach(function (x) {
    if (l3.val === null) {
      l3.val = parseInt(x);
    } else {
      l3.next = new ListNode(parseInt(x));
      l3 = l3.next;
    }
  });

  return head;
};

let l1 = new ListNode(null);
let head1 = l1;
[2,4,3].forEach(function (x) {
  if (l1.val === null) {
    l1.val = x;
  } else {
    l1.next = new ListNode(x);
    l1 = l1.next;
  }
});

let l2 = new ListNode(null);
let head2 = l2;
[5,6,4].forEach(function (x) {
  if (l2.val === null) {
    l2.val = x;
  } else {
    l2.next = new ListNode(x);
    l2 = l2.next;
  }
});

console.log(addTwoNumbers(head1, head2));