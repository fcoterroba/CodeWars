package main

import "fmt"

func PositiveSum(numbers []int) int {
	total := 0
	for _, element := range numbers {
		if element >= 0 {
			total += element
		}
	}
	return total
}

func main() {
	arr := []int{1, -4, 7, 12}
	fmt.Println(PositiveSum(arr))
}

// original kata: https://www.codewars.com/kata/5715eaedb436cf5606000381
// my solution: https://www.codewars.com/kata/reviews/5ace283463990d6aeb001367/groups/65fa93a000ee1e0001d6b0eb
