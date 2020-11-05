"use strict";

var phrase = "Strings are coool ";
document.write("Strings are fun", '<br>'); //"" or ''

document.write(phrase, '<br>');
document.write(phrase.length, '<br>');
document.write(phrase.toUpperCase(), '<br>');
document.write(phrase.toLowerCase(), '<br>');
document.write(phrase.charAt(3), '<br>'); //if there are duplicates, the first occuernce index will be returned. Else -1 if no char exist.

document.write(phrase.indexOf("i"), '<br>'); //get the index of the last duplicate 

document.write(phrase.lastIndexOf("o"), '<br>');
document.write(phrase.substring(0, 3), '<br>');
document.write(phrase.substring(phrase.lastIndexOf("o"), phrase.length), '<br>'); //ol

document.write(phrase.endsWith("coool"), '<br>');
var text = "Strings";
document.write(phrase.includes(text), '<br>');
document.write(phrase + "YES! " + text, '<br>'); //Source: https://www.w3schools.com/jsref/jsref_obj_string.asp