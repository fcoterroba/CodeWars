fn between(a: i16, b: i16) -> Vec<i16> {
    let mut result: Vec<i16> = Vec::new();
    for n in a..b+1 {
        result.push(n);
    }
    result
}

// Original kata: https://www.codewars.com/kata/55ecd718f46fba02e5000029
// My solution: https://www.codewars.com/kata/reviews/6308763adc82f30001500977/groups/682441a7b08c21a52810f4a1
