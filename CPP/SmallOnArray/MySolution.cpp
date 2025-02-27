using namespace std; 

int findSmallest(vector <int> list)
{
  return *min_element(list.begin(), list.end());
}

// Original kata: https://www.codewars.com/kata/55a2d7ebe362935a210000b2
// My solution: https://www.codewars.com/kata/reviews/5ae2f7e3fa02e0b5f9000af5/groups/634883fe73b43e00011dfe2c
