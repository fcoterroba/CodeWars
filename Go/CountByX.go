package kata


func CountBy(x, n int) []int {
  result := make([]int, n) 
  for i := 0; i < n; i++ { 
    result[i] = x * (i + 1) 
  }
  return result
}

// Original kata: https://www.codewars.com/kata/5513795bd3fafb56c200049e
// My solution: https://www.codewars.com/kata/reviews/62e3f5f7a699c600017443e5/groups/62f322eec051b60001cecb6f
