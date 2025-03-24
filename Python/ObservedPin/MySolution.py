from itertools import product

def get_pins(observed):
    adjacent = {
        '0': ['0', '8'],
        '1': ['1', '2', '4'],
        '2': ['1', '2', '3', '5'],
        '3': ['2', '3', '6'],
        '4': ['1', '4', '5', '7'],
        '5': ['2', '4', '5', '6', '8'],
        '6': ['3', '5', '6', '9'],
        '7': ['4', '7', '8'],
        '8': ['5', '7', '8', '9', '0'],
        '9': ['6', '8', '9']
    }

    return [''.join(p) for p in product(*(adjacent[d] for d in observed))]

# Original kata: https://www.codewars.com/kata/5263c6999e0f40dee200059d
# My solution: https://www.codewars.com/kata/reviews/5490a78cefb597b0a100019d/groups/67e1131ca9dcdf4c792b96ec
