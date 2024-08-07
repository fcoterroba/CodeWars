package main

import "fmt"

func LoveFunc(flower1, flower2 int) bool {
	if (flower1+flower2)%2 == 0 {
		return false
	}
	return true
}

func main() {
	fmt.Println(LoveFunc(2, 4))
}

// Original kata:  https://www.codewars.com/kata/555086d53eac039a2a000083/train/go
// My solution: https://www.codewars.com/kata/reviews/6301473defce070001e786d2/groups/632474fd7e1d180001875824
