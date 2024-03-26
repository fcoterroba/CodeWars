# Basic info

To execute a csharp file, you need to compile it using `csc .\nameOfFile.cs` and then execute the resultant file `.\nameOfFile.exe`

## Main function

This language is quite similar to Java so, the basics to run something is `using System`, create a class `public static class Kata{}` and at least one main function like `public static void Main(){}`

## Printing

For print text, use `System.Console.WriteLine("your text");`

If you need to add a variable into a print, just concanet it with `+` like: `string str = "Hello " + userName + ". Today is " + dateString + ".";`

## Functions

The functions are similar to Java `public static string Solution(string str){}`

If you need to return something from the function, do it like `return new typeOfVariable(yourVariable)`

## Arrays

If you need to create a new array, you need to declare the variable type like `str[] myArrayOfStrings = ["Hello", "World"];`

Then, if you need to do prebuilt functions with array for example, you need to call Array then function after dot, like `Array.Reverse(myArrayOfStrings);`

## Substring

If you need to take a part of a string, use `str.Substring(0, 1);` changing that two numbers with the beginning and end of the position you want take
