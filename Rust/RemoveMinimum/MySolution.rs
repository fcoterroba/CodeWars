fn remove_smallest(numbers: &[u32]) -> Vec<u32> {
    if numbers.is_empty() {
        return vec![];
    }

    let min_index = numbers
        .iter()
        .enumerate()
        .min_by_key(|&(_, val)| val)
        .map(|(idx, _)| idx)
        .unwrap();

    numbers
        .iter()
        .enumerate()
        .filter_map(|(i, &x)| if i != min_index { Some(x) } else { None })
        .collect()
}

// Original kata: https://www.codewars.com/kata/563cf89eb4747c5fb100001b
// My solution: https://www.codewars.com/kata/reviews/62bf53475267cb0001714319/groups/682d7d39bf649094d82569f7
