# Rust notes

## Functions

- Functions in Rust are declared with `fn nameOfFunction(param1, param2)`
- Also, params require that you asignee the type. **Example:** `fn myFunction(param1: u16)`
  - `u16` means an integer of 16 bits
- Furthermore, you need to especific the type of value returned. **Example:** `fn myFunction(param1: u16) -> bool` 

---

## Printing

- For print in Rust, you need to use `println!()`
- Also, `{}` indicates a variable at the end of the print, like `println!("{}", myVariable)`  

---

## Main function

- As many other languages, you need first a main function, `fn main() { ... }`  
