def same_structure_as(original,other):
    if isinstance(original, list) and isinstance(other, list):
        if len(original) != len(other):
            return False
        return all(same_structure_as(o1, o2) for o1, o2 in zip(original, other))
    return not isinstance(original, list) and not isinstance(other, list)

# Original kata: https://www.codewars.com/kata/520446778469526ec0000001
# My solution: https://www.codewars.com/kata/reviews/554662240240a7b6f800019c/groups/664f660df987f1ab5fc53e16
