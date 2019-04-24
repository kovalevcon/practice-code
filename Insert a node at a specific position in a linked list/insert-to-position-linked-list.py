class SinglyLinkedListNode:
    def __init__(self, node_data):
        self.data = node_data
        self.next = None


class SinglyLinkedList:
    def __init__(self):
        self.head = None
        self.tail = None

    def insert_node(self, node_data):
        node = SinglyLinkedListNode(node_data)

        if not self.head:
            self.head = node
        else:
            self.tail.next = node

        self.tail = node


def print_singly_linked_list(node):
    while node:
        print(str(node.data))
        node = node.next


def insertNodeAtPosition(head: SinglyLinkedListNode, data: int, position: int) -> SinglyLinkedListNode:
    """
    :type head: SinglyLinkedListNode
    :type data: int
    :type position: int
    :rtype: SinglyLinkedListNode
    """
    node = SinglyLinkedListNode(data)
    curr_node = head

    if curr_node is None:
        return node
    elif position == 0:
        node.next = curr_node
        return node

    for _ in range(0, position - 1):
        curr_node = curr_node.next

    node.next = curr_node.next
    curr_node.next = node

    return head


if __name__ == '__main__':
    llist_count = 5

    llist = SinglyLinkedList()

    for _ in range(llist_count):
        llist_item = int(input())
        llist.insert_node(llist_item)

    llist = insertNodeAtPosition(llist.head, 1, 3)

    print_singly_linked_list(llist)