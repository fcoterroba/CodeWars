# Rust docs 🦀📚

## Return on a function "is not needed"

Rust automatically sent the value without needed of `return` keyword. So here, is the same

```rs
fn solution(phrase: &str) -> String {
    phrase.chars().rev().collect()
}
```

and

```rs
fn solution(phrase: &str) -> String {
    return phrase.chars().rev().collect()
}
```
