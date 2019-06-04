package main

import (
	"fmt"
)

func jumpingOnClouds(c []int32) int32 {
	jumps := 0
	c = c[1:]
	for len(c) > 1 {
		part := 1
		if c[1] == 0 {
			part = 2
		}
		c = c[part:]
		jumps++
	}

	return int32(jumps + len(c))
}

func main() {
	test1 := []int32{0, 0, 0, 1, 0, 0}
	test2 := []int32{0, 0, 1, 0, 0, 1, 0}

	fmt.Printf("jumpingOnClouds(%v) = %d\n", test1, jumpingOnClouds(test1)) // 3
	fmt.Printf("jumpingOnClouds(%v) = %d\n", test2, jumpingOnClouds(test2)) // 4
}