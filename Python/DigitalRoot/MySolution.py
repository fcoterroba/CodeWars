def digital_root(n):
    while len(str(n)) > 1:
        n = sum(int(digit) for digit in str(n))
    return n

// My solution: https://www.codewars.com/kata/reviews/541c8b5e7e4b4c61e2000153/groups/571fc401c2f46183bf0000f6
// Original kata: https://www.codewars.com/kata/541c8630095125aba6000c00
