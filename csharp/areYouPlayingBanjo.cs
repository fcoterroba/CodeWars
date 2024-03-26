using System;

public class Kata{
  public static string AreYouPlayingBanjo(string name){
    if (name.Substring(0,1) == "R" || name.Substring(0,1) == "r"){
      return name + " plays banjo";
    }else{
    	return name + " does not play banjo";
    }
  }
  
  public static void Main(){
      System.Console.WriteLine(AreYouPlayingBanjo("Peter"));
  }
}

// original kata: https://www.codewars.com/kata/53af2b8861023f1d88000832
// my solution: https://www.codewars.com/kata/reviews/55dc9934c50465a0c8000045/groups/55dc9ff9f940c24b3100003f
