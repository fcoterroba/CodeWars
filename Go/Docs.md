# Go notes

## Arrays vs Slices

- In Go, there are two "types of arrays". Arrays & Slices.
  - Arrays
    - Used when you know the exact number of items as it can't be resizable. `var arr [5]int  // Array of 5 integers`
  - Slices
    - They don't care about the size. `var s []int  // Slice of integers`
