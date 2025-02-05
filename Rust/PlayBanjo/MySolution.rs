fn are_you_playing_banjo(name: &str) -> String {
    if name.to_uppercase().starts_with('R') {
        format!("{} plays banjo", name)
    } else {
        format!("{} does not play banjo", name)
    }
}

// Original kata: https://www.codewars.com/kata/53af2b8861023f1d88000832
// My solution: https://www.codewars.com/kata/reviews/5f84898f6ddaa3000166fbea/groups/5fd522bfe7f5d20001b0d699
