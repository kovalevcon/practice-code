package main

import "fmt"

func checkPossibility(nums []int) bool {
	length := len(nums)
	pos := -1
	for i := 0; i < length - 1; i++ {
		if nums[i] > nums[i + 1] {
			if pos != -1 {
				return false
			}
			pos = i
		}
	}

	return pos == -1 || pos == 0 || pos == length - 2 || nums[pos - 1] <= nums[pos  + 1] || nums[pos] <= nums[pos + 2]
}

func main() {
	test1 := []int{4, 2, 3}
	test2 := []int{4, 2, 1}

	fmt.Printf("checkPossibility(%v) = %t\n", test1, checkPossibility(test1)) // true
	fmt.Printf("checkPossibility(%v) = %t\n", test2, checkPossibility(test2)) // false
}