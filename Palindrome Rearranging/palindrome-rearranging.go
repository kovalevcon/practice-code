package main

import (
	"fmt"
)

func palindromeRearranging(inputString string) bool {
	var repeats = map[rune]int{}
	for _, x := range inputString {
		repeats[x]++
	}
	sum := 0
	for _, value := range repeats {
		if value % 2 != 0 {sum++}
		if sum > 1 {return false}
	}

	return true
}

func main() {
	test1 := "abbcabb"
	test2 := "zaa"
	test3 := "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc"

	fmt.Printf("palindromeRearranging(%v) = %t\n", test1, palindromeRearranging(test1)) // true
	fmt.Printf("palindromeRearranging(%v) = %t\n", test2, palindromeRearranging(test2)) // true
	fmt.Printf("palindromeRearranging(%v) = %t\n", test3, palindromeRearranging(test3)) // false
}