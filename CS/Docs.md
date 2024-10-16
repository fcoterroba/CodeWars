# C# notes

## Using `System.Linq`

- **`using System.Linq;`**:  
  This code imports `System.Linq` namespace to a file.  
  LINQ (Language-Integrated Query) allow to works with arrays and offers some methods like:
  - `Min()`: Find the minimum number on an array
  - `Max()`: Find the maximum number on an array
  - `Where()`: Filter elements based in a condition

---

## Classes

- **`public class Kata`**:  
  - Define a class called as `Kata`.
  - `public` means that class is accesible everywhere in the program.

---

## Static functions

- **`public static int FindSmallestInt(int[] args)`**:  
  - Create a function which must return an integer (`int`).
  - This method is **static** (`static`), that means that you can call the function without create a `Kata` object
  - **Params**:  
    - Recieve an intergers array called as *args* (`int[] args`).
