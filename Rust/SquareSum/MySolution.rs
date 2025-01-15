fn square_sum(vec: Vec<i32>) -> i32 {
    let mut result = 0;
    for number in &vec {
        result += number*number;
    }    
    return result;
}

// Original kata: https://www.codewars.com/kata/515e271a311df0350d00000f
// My solution: https://www.codewars.com/kata/reviews/5824a8aa304383a19900005a/groups/63e9107426aff20001ebbc9b
