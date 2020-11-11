"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

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
person.printName(); //Source: https://www.youtube.com/watch?v=2ZphE5HcQPQ&list=WL&index=1&t=1168s&ab_channel=freeCodeCamp.org

var Rectangle = //set up your object
function Rectangle(_width, _height, _color) {
  _classCallCheck(this, Rectangle);

  console.log("The Rectangle is being created!");
  this.width = _width;
  this.height = _height;
  this.color = _color;
}; //var - globally - can be viewed through the program let- block scope


var myRectangle1 = new Rectangle(10, 15, "red");
var myRectangle2 = new Rectangle(20, 45, "blue");