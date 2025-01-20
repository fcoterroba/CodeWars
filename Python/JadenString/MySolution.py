def to_jaden_case(string):
    result = ""
    for word in string.split(" "):
        result += f"{word.capitalize()} "

    return result.strip()

# Original kata: https://www.codewars.com/kata/5390bac347d09b7da40006f6
# My solution: https://www.codewars.com/kata/reviews/54176ef96a4e100f28000068/groups/678e17127a89c2f4d86151a1
