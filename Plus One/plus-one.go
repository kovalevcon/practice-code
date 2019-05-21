package main

import (
	"fmt"
)

func plusOne(digits []int) []int {
	for i := len(digits) - 1; i >= 0; i-- {
		if digits[i] < 9 {
			digits[i]++
			return digits
		}

		digits[i] = 0
		fmt.Print(i)
	}

	if digits[0] == 0 {
		digits = append([]int{1}, digits...)
	}

	return digits
}

func main() {
	arr1 := []int{1, 2, 3}
	arr2 := []int{4, 3, 2, 1}
	arr3 := []int{9, 9, 9}

	fmt.Printf("plusOne([1, 2, 3]) = %v\n", plusOne(arr1)) // [1, 2, 4]
	fmt.Printf("plusOne([4, 3, 2, 1]) = %v\n", plusOne(arr2)) // [4, 3, 2, 1]
	fmt.Printf("plusOne([9, 9, 9]) = %v\n", plusOne(arr3)) // [1, 0, 0, 0]
}