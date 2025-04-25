using System;
using System.Linq;

public static class Kata
{
  public static string ReverseWords(string str)
  {
    return string.Join(" ", str.Split(' ').Select(x => new String(x.Reverse().ToArray())));
  }
}

// Original kata: https://www.codewars.com/kata/5259b20d6021e9e14c0010d4
// My solution: https://www.codewars.com/kata/reviews/5995dbaff017e425c400089f/groups/59994c461cc3b192bf000676
