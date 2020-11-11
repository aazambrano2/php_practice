"use strict";

var i = 1;
/* 
    <br> - Line break in HTML
    <br/> or <br></br> - Line break in XHTML
    <br/> - For XHTML documents to render on existing HTML user agents
*/

while (i <= 10) {
  document.write(i + "<br/>");
  i++;
}

document.write("<hr></hr>");
var j = 11;

do {
  document.write(j + "<br>");
  i++;
} while (i <= 10); //Note: 11 is printed out


document.write("<hr></hr>");

for (var _i = 12; _i < 20; _i++) {
  document.write(_i + "<br>");
}

document.write("<hr></hr>");
var friends = ["Jim,", "Satnley", "Kevin"];

for (var _i2 = 0; _i2 < friends.length; _i2++) {
  document.write(friends[_i2] + "<br>");
}