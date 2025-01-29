fn get_grade(s1: u16, s2: u16, s3: u16) -> char {
    let letterGrade = (s1+s2+s3)/3;
    match letterGrade {
        0..=59 => 'F',
        60..=69 => 'D',
        70..=79 => 'C',
        80..=89 => 'B',
        _ => 'A',
    }
}

// Original kata: https://www.codewars.com/kata/55cbd4ba903825f7970000f5
// My solution: https://www.codewars.com/kata/reviews/631c050f15064f0001a55e97/groups/6799dfbbf8efc2f4023a2b08
