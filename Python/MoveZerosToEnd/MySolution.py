def move_zeros(lst):
    return [x for x in lst if x != 0] + [0] * lst.count(0)

# Original kata: https://www.codewars.com/kata/52597aa56021e91c93000cb0
# My solution: https://www.codewars.com/kata/reviews/57cb52c733c32f4c48000076/groups/62c3d3934b4757000175792b
