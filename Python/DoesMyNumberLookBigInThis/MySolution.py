def narcissistic(value):
    return sum(int(digit) ** len(str(value)) for digit in str(value)) == value

# Original kata: https://www.codewars.com/kata/5287e858c6b5a9678200083c/train/python
# My solution: https://www.codewars.com/kata/reviews/55db4cb62ede87b90600007e/groups/5800a63715e97eb150000674