using System;

namespace Solution
{
  public class SolutionClass
  {
    public static string EvenOrOdd(int number){
        return number % 2 == 0 ? "Even" : "Odd";
    }

    public static void Main(string[] args){
        System.Console.WriteLine(EvenOrOdd(420));
    }
  }
}

// Original kata: https://www.codewars.com/kata/53da3dbb4a5168369a0000fe
// My solution: https://www.codewars.com/kata/reviews/5772a0baa95d046e1400018a/groups/5772a0bda95d044c7c000194