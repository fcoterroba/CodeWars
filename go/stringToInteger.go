package main

import (
	"fmt"
	"strconv"
)

func NumberToString(n int) string {
	return strconv.FormatInt(int64(n), 10)
}

func main() {
	fmt.Println(NumberToString(4))
}

// original kata: https://www.codewars.com/kata/5265326f5fda8eb1160004c8
// my solution: 
