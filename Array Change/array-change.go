package main

import (
	"fmt"
)

func arrayChange(inputArray []int) int  {
	changes := 0
	for i := 1; i < len(inputArray); i++ {
		if inputArray[i] <= inputArray[i - 1] {
			changes += inputArray[i - 1] - inputArray[i] + 1
			inputArray[i] = inputArray[i - 1] + 1
		}
	}

	return changes
}

func main() {
	arr1 := []int{1, 1, 1}
	arr2 := []int{-1000, 0, -2, 0}
	arr3 := []int{3122, -645, 2616, 13213, -8069}

	fmt.Printf("arrayChange(%v) = %d\n", arr1, arrayChange(arr1)) // 3
	fmt.Printf("arrayChange(%v) = %d\n", arr2, arrayChange(arr2)) // 5
	fmt.Printf("arrayChange(%v) = %d\n", arr3, arrayChange(arr3)) // 25559
}