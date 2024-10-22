import re

def disemvowel(string_):
  return re.sub("[aeiouAEIOU]", "", string_)

# Original kata: https://www.codewars.com/kata/52fba66badcd10859f00097e
# My solution: https://www.codewars.com/kata/reviews/54587841888e98707300020b/groups/61d7f2d556bbf00001c1024d
