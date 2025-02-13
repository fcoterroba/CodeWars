#include <vector>
#include <numeric>

int sum(std::vector<int> nums) {
  return std::accumulate(nums.begin(), nums.end(), 0);
}

// Original kata: https://www.codewars.com/kata/53dc54212259ed3d4f00071c
// My solution: https://www.codewars.com/kata/reviews/5d4dd682dec905000197262d/groups/5d4e59045abb070001b0c82c
