public static class Kata
{
  public static int SquareSum(int[] numbers)
  {
    int result = 0;
    foreach(int number in numbers) {
      result += number*number;
    }
    return result;
  }
}

// Original kata: https://www.codewars.com/kata/515e271a311df0350d00000f
// My solution: https://www.codewars.com/kata/reviews/599189e5598b9eeb63000004/groups/5d3feea1c8c97900012f85cf
