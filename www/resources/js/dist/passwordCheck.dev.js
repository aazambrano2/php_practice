"use strict";

//practice purposes - not recommended
var password = "Dk$!64";
var response;
var entryCount = 0;
var entryLimit = 2;
var error = false;

while (response != password && !error) {
  response = window.prompt("Enter Password");

  if (entryCount < entryLimit) {
    alert("Wrong password. Please try again");
    entryCount++;
  } else {
    error = true;
  }
}

if (error) {
  alert("To many entries");
} else {
  alert("Welcome");
}
/*You still get access to the website but you could re direct 
    to a page or not give access at all and not to present the 
    rest of the webpage contents
*/