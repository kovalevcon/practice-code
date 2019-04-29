package main

import (
	"fmt"
)

func deleteNth(arr []int, n int) []int {
	var result []int
	repeats := make(map[int]int)
	for _ , num :=  range arr {
		if repeats[num] < n {
			result = append(result, num)
		}
		repeats[num] = repeats[num] + 1
	}

	return result
}

func main() {
	arr1 := []int{20, 37, 20, 21}
	arr2 := []int{1, 1, 3, 3, 7, 2, 2, 2, 2}
	arr3 := []int{1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1}

	fmt.Printf("deleteNth([20, 37, 20, 21], 1) = %v\n", deleteNth(arr1, 1)) // [20, 37, 21]
	fmt.Printf("deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3) = %v\n", deleteNth(arr2, 3)) // [1, 1, 3, 3, 7, 2, 2, 2]
	fmt.Printf("deleteNth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3) = %v\n", deleteNth(arr3, 3)) // [1, 2, 3, 1, 1, 2, 2, 3, 3, 4, 5]
}