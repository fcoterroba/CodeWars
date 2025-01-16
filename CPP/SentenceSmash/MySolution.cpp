#include <vector>
#include <string>

std::string smash(const std::vector<std::string>& words)
{
    std::string result;

    for (size_t i = 0; i < words.size(); ++i) {
        result += words[i];
        if (i < words.size() - 1) {
            result += " ";
        }
    }

    return result; 
}

// Original kata: https://www.codewars.com/kata/53dc23c68a0c93699800041d
// My solution: https://www.codewars.com/kata/reviews/6632c2c62f94ad0001da4294/groups/6702bcbf90be9d0833941bd1
