public class Kata
{
  public static int SaleHotDogs(int n)
  {
    switch (n)
    {
        case < 5:
            return n * 100;
        case < 10:
            return n * 95;
        case >= 10:
            return n * 90;
    }
  }
}

// Original kata: https://www.codewars.com/kata/57202aefe8d6c514300001fd
// My solution: https://www.codewars.com/kata/reviews/59af4560ff87fd540e0004b3/groups/67f8b37abc0e087def189be6
