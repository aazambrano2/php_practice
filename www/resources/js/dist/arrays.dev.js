"use strict";

var fruits = new Array("Apples!", "Oranges!", "Peaches!"); //or

var veggies = ["Tomato", "Broccoli", "Spinach", false, -22];
document.write(fruits, "<br>");
document.write(veggies, "<br>");
document.write(veggies[3], "<br>");
document.write(veggies.length, "<br>");
veggies[3] = true;
document.write(veggies, "<br>"); //split

var fruit_string = "A>B>C>D>E";
var fruit_split = fruit_string.split(">");
document.write(fruit_split, "<br>");