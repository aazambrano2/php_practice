"use strict";

function sayHi(name, age) {
  document.write("<h1>Hello " + name + "</h1>");
  document.write("<p>You are " + age + "</p>");
  alert("Hey");
}

function add(n1, n2) {
  return n1 + n2;
}

sayHi("Aaron", 22);
document.write(add(1, 2));