fn count_by(x: u32, n: u32) -> Vec<u32> {
    let mut v = vec![];
    for i in (x..= x * n).step_by(x as usize) {
        v.push(i)
    }
    v
}

// Original kata: https://www.codewars.com/kata/5513795bd3fafb56c200049e
// My solution: https://www.codewars.com/kata/reviews/62efe23a7814d50001a68fc0/groups/67e3ac10ee16b8129e3f70d3
