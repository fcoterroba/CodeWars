using System;

public static class Kata{
    public static string Solution(string str){
        char[] charrArray = str.ToCharArray();
        Array.Reverse(charrArray);
        return new string(charrArray);
    }

    public static void Main(){
        System.Console.WriteLine(Solution("world"));
    }
}

// original kata: https://www.codewars.com/kata/5168bb5dfe9a00b126000018
// my solution: https://www.codewars.com/kata/reviews/59ad726ac2479b7127000bcb/groups/61c738f4f9de3900011b4e6b