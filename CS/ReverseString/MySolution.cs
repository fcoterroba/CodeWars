using System;

public static class Kata
{
  public static string Solution(string str) 
  {
    char[] charArray = str.ToCharArray();
    Array.Reverse(charArray);
    return new string(charArray);
  }
}

// Original kata: https://www.codewars.com/kata/5168bb5dfe9a00b126000018
// My solution: https://www.codewars.com/kata/reviews/59ad726ac2479b7127000bcb/groups/59affaf81025af1829000e70
