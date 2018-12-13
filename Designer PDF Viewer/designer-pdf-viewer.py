# Complete the designerPdfViewer function below.
def designerPdfViewer(h, word):
    """
    :type h: arr
    :type word: str
    :rtype: int
    """
    helper = dict(zip(list(map(chr, range(97, 123))), h))
    heights = [helper[x] for x in word]

    return max(heights) * len(word)


print(designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc'))  # 9
print(designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba'))  # 28