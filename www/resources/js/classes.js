
//Source: https://www.youtube.com/watch?v=2ZphE5HcQPQ&list=WL&index=1&t=1168s&ab_channel=freeCodeCamp.org
class Rectangle{
    //how to set up private attributes
    #width;
    #height;
    #color;
    //set up your object
    // public and private attributes can only be used in TypeScript
    /*Compile hero will complain since it does not identify the # */
    constructor(_width,_height,_color){
    
        console.log("The Rectangle is being created!");

        this.#width = _width;
        this.#height = _height;
        this.#color = _color;
        /*
        public attributes - note the missing #
        this.width = _width;
        this.height = _height;
        this.color = _color;
        */
    }

     getArea(){
        return this.#width * this.#height;
    }

    printDescription(){
        console.log('I am a rectangle of ' + this.#width + 'x' + this.#height + ' and I am ' + this.#color);
    }

}

//objects
var person = {
    name: "Aaron",
    age: 22,
    isMale: true,
    occupation: "programmer",
    printName: function(){
        document.write("<h1>"+ this.name +"</h1>");
    }
};

var myMovie = {
    title: "The Social Network",
    releaseYear: "2010",
    duration: 2.0,
    actors: [
        {
            name: "Jessie Eisenberg",
            birthday: new Date("October 5, 1983"),
            hometown: "New York, New York"
        },
        {
            name: "Rooney Mara",
            birthday: new Date("April 17, 1985"),
            hometown: "Bedford, New York"
        }
    ],
    printMovieInfo: function(){
        document.write(this.title + "<br>")
        document.write("Released: " + this.releaseYear + "<br>")
        document.write("Runtime: " + this.duration+ " hrs <br>")
        document.write("Starring: " + this.actors[0].name + " and " + this.actors[1].name + "<br>")
    }
};



//TODO: Look at rest of source video for classes
//var - globally - can be viewed through the program let- block scope
var myRectangle1 = new Rectangle(10, 15, "red");
var myRectangle2 = new Rectangle(20,45,"blue");
console.log(myRectangle1.getArea());
console.log(myRectangle2.getArea());
myRectangle1.printDescription();
myRectangle2.printDescription();
person.printName();
myMovie.printMovieInfo();

