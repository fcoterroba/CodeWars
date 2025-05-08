std::string chromosomeCheck(std::string sperm) 
{
   return (sperm == "XX") 
       ?  "Congratulations! You're going to have a daughter."
       :  "Congratulations! You're going to have a son.";
}

// Original kata: https://www.codewars.com/kata/56530b444e831334c0000020
// My solution: https://www.codewars.com/kata/reviews/57acb0875b48b4824c00006f/groups/57b1906ad24156eb0c0001d6
