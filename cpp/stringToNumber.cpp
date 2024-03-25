#include <iostream>

using namespace std;

int string_to_number(const std::string& s) {
    return stoi(s);
}

int main(){
    cout<<string_to_number("1234");
}

// original kata: https://www.codewars.com/kata/544675c6f971f7399a000e79
// my solution: https://www.codewars.com/kata/reviews/58058bced0070d471b00001d/groups/58bec725acd61c9bbe0000bd