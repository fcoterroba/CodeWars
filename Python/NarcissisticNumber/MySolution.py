def narcissistic( value ):
    tmp = 0
    for i in str(value):
        tmp += int(i)**len(str(value))
        
    return True if tmp == value else False

# Original kata: https://www.codewars.com/kata/5287e858c6b5a9678200083c
# My solution: https://www.codewars.com/kata/reviews/55db4cb62ede87b90600007e/groups/675867adf5291907e9265570
