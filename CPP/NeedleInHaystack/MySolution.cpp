#include <string>

using namespace std; 

string sliceString(string str) {
  str.erase(0, 1);
  str.erase(str.end() - 1);
  return str;
}

// Original kata: https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0
// My solution: https://www.codewars.com/kata/reviews/5ab23728f6d55bcd0c000e93/groups/5c9bf5b3ea459e00013a7ab0