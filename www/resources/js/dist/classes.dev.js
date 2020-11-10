"use strict";

//objects
var person = {
  name: "Aaron",
  age: 22,
  isMale: true,
  occupation: "programmer",
  printName: function printName() {
    document.write("<h1>" + this.name + "</h1>");
  }
};
person.printName(); //TODO: Look at classes