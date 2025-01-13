def spin_words(sentence):
    result = ""
    for word in sentence.split(" "):
        result += word[::-1] if len(word)>=5 else word
        result += " "
    return result.strip()

# Original kata: https://www.codewars.com/kata/reviews/55401901b8a14241e4000048/groups/6282751e90fd720001a46476
# My solution: 
