package main

import (
	"fmt"
	"strconv"
	"strings"
)

func strToArrIntDiff(n string) []int {
	arrayStr := strings.Split(n, " ")
	arrayInt := make([]int, len(arrayStr))
	for i := range arrayInt {
		temp, _ := strconv.Atoi(arrayStr[i])
		arrayInt[i] = temp % 2
	}

	return arrayInt
}

func sumArrInt(n []int) int {
	sum := int(0)
	for _, value := range n {
		sum = sum + value
	}

	return sum
}

func searchKeyArrInt(a []int, val int) (key int) {
	for k, v := range a {
		if v == val {
			return k
		}
	}
	return
}

func iqTest(numbers string) int {
	arrayInt := strToArrIntDiff(numbers)
	diffArray := 0
	if sumArrInt(arrayInt) == 1 {
		diffArray = 1
	}

	return searchKeyArrInt(arrayInt, diffArray) + 1
}

func main() {
	test1 := "2 4 7 8 10"
	test2 := "1 2 2"
	test3 := "5 3 2"

	fmt.Printf("iqTest(%v) = %d\n", test1, iqTest(test1)) // 3
	fmt.Printf("iqTest(%v) = %d\n", test2, iqTest(test2)) // 1
	fmt.Printf("iqTest(%v) = %d\n", test3, iqTest(test3)) // 3
}