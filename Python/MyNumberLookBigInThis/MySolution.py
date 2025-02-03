def narcissistic( value ):
    result = 0
    for digit in str(value):
        result += int(digit)**len(str(value))
    return True if (value == result) else False

# Original kata: https://www.codewars.com/kata/5287e858c6b5a9678200083c
# My solution: https://www.codewars.com/kata/reviews/55db4cb62ede87b90600007e/groups/5b77214cb6c53e5a53000e7c
