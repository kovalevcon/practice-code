package main

import (
	"fmt"
	"strings"
)

func repeatedString(s string, n int64) int64 {
	if strings.Compare(s, "a") == 0 {
		return n
	} else if strings.Count(s, "a") == 0 {
		return 0
	}

	return (int64(strings.Count(s, "a")) * (n / int64(len(s)))) +
		int64(strings.Count(s[0:n % int64(len(s))], "a"))
}

func main() {
	strgs := []string{"abcac", "a", "ababa"}
	numbs := []int64{10, 1000000000000, 3}

	fmt.Printf("repeatedString(\"%v\", %v) = %d\n", strgs[0], numbs[0], repeatedString(strgs[0], numbs[0])) // 4
	fmt.Printf("repeatedString(\"%v\", %v) = %d\n", strgs[1], numbs[1], repeatedString(strgs[1], numbs[1])) // 1000000000000
	fmt.Printf("repeatedString(\"%v\", %v) = %d\n", strgs[2], numbs[2], repeatedString(strgs[2], numbs[2])) // 2
}