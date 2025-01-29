# Rust Docs

## Variables inizitialization

To create variables you can use `let myVariable;` to create an empty string

## Switch⁉️

Rust supports switch blocks using `match`. Example:

```rs
match myVariable {
  0..=59 => "Over 60",
  60..=69 => "Over 70",
  70..=79 => "Over 80",
  80..=89 => "Over 90",
  _ => "The rest",
}
```
