#include <string>

std::string bmi(double w, double h) {
    double bmiResult = w / (h * h);
    
    if (bmiResult <= 18.5) {
        return "Underweight";
    } else if (bmiResult <= 25) {
        return "Normal";
    } else if (bmiResult <= 30) {
        return "Overweight";
    } else {
        return "Obese";
    }
}

// Original kata: https://www.codewars.com/kata/57a429e253ba3381850000fb
// My solution: https://www.codewars.com/kata/reviews/59b8e28a037947c8ee000a65/groups/674ef58c31842054bf4afd9a
