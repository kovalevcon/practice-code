package main

import (
	"fmt"
	"strings"
)

func buddyStrings(a string, b string) bool {
	if len(a) != len(b) {
		return false
	}
	if strings.Compare(a, b) == 0 {
		set := make(map[int32]int32)
		for _, v := range a {
			set[v] = v
		}
		return len(set) < len(a)
	}

	pairs := make(map[int][2]string)

	for i := 0; i < len(a); i++ {
		if a[i] != b[i] {
			pairs[len(pairs)] = [2]string{string(a[i]), string(b[i])}
		}
	}

	return len(pairs) == 2 && (pairs[0][0] + pairs[0][1] == pairs[1][1] + pairs[1][0])
}

func main() {
	value := [][]string{
		{"ab", "ba"},
		{"ab", "ab"},
		{"aaaaaaabc", "aaaaaaacb"},
	}

	fmt.Printf("buddyStrings(\"%v\", \"%v\") = %t\n", value[0][0], value[0][1], buddyStrings(value[0][0], value[0][1])) // true
	fmt.Printf("buddyStrings(\"%v\", \"%v\") = %t\n", value[1][0], value[1][1], buddyStrings(value[1][0], value[1][1])) // false
	fmt.Printf("buddyStrings(\"%v\", \"%v\") = %t\n", value[2][0], value[2][1], buddyStrings(value[2][0], value[2][1])) // true
}