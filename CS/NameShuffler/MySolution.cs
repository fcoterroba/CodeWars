using System;

public class Kata
{   
  public static string NameShuffler(string str)
  {
    string[] result = str.Split(' ');
    return $"{result[^1]} {result[0]}";
  }
}

// Original kata: https://www.codewars.com/kata/559ac78160f0be07c200005a
// My solution: https://www.codewars.com/kata/reviews/5991c1633c5b64d866000025/groups/67c183a1e8bcb54cdab43bf1
