using System;
using System.Linq;

public static class Kata
{
  public static int CountSheeps(bool[] sheeps)
  {
    return sheeps.Count(s => s);
  }
}

// Original kata: https://www.codewars.com/kata/54edbc7200b811e956000556
// My solution: https://www.codewars.com/kata/reviews/550afbfa595138b5d1000a00/groups/550b12940681514cc3001881
