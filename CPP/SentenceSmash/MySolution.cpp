#include <vector>
#include <string>
#include <numeric>

std::string smash(const std::vector<std::string>& words)
{
    return std::accumulate(words.begin(), words.end(), std::string{},
        [](const std::string& a, const std::string& b) {
            return a.empty() ? b : a + ' ' + b;
        });
}

// Original kata: https://www.codewars.com/kata/53dc23c68a0c93699800041d
// My solution: https://www.codewars.com/kata/reviews/6632c2c62f94ad0001da4294/groups/66bbd821ab5125f05d8a4994