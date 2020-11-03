<html>
    <head>
        <title>Classes</title>
    </head>
    <body>
        <?php 
            class Book{
                //attributes
                var $title;
                var $author;
                var $pages;
                //constructor
                function __construct($aTitle, $aAuthor, $aPages){
                    echo "<hr> New Book Created <br> <hr>";
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
                function printBook(){
                    echo $this->title ."<br>";
                    echo $this->author."<br>";
                    echo $this->pages ."<br>";
                }
            }

            class Student{
                var $name;
                var $major;
                var $gpa;

                function __construct($name, $major, $gpa){
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors(){
                    if($this->gpa >= 3.5){
                        return true;
                    }
                    return false;
                }
            }

            class Movie{
                private $title;
                private $rating;
                //The var keyword in PHP is used to declare a property or variable of class which is public by default.
                //Source: https://www.geeksforgeeks.org/php-var-keyword/#:~:text=The%20var%20keyword%20in%20PHP,was%20deprecated%20from%20version%205.0.&text=Since%20PHP%205.1.
                function __construct($title, $rating){
                    $this->setTitle($title);
                    $this->setRating($rating);
                }
                //setters
                function setRating($rating){
                    $this->rating =$rating;
                }

                function setTitle($title){
                    $this->title = $title;
                }
                //getters
                function getRating(){
                    return $this->rating;
                }

                function getTitle(){
                    return $this->title;
                }
            }
            class Chef{
                function makeChicken(){
                    echo "The chef makes chicken <br>";
                }
                function makeSalad(){
                    echo "The chef makes salad <br>";
                }
                function makeSpecialDish(){
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends Chef {
                function makeSpaghetti(){
                    echo "The chef makes Spaghetti (mamamia)";
                }
                //Overwrite
                function makeSpecialDish(){
                    echo "The chef makes pizza";
                }
            }

            //Instant of class Book
            $book1 = new Book("Harry Potter","JK Rowling", 400);
            $book1->printBook();

            $book2 = new Book("Lord of the Rings", "Tolkien", 700);
            $book2->printBook();

            //Instances of class Student
            $student1 = new Student("Jim","Business",2.8);
            $student2 = new Student("Pam", "Art",3.6);
            echo "<br>";
            //Use a conditional statement to echo a boolean?
            echo $student1->hasHonors() ? "true" : "false","<br>";
            echo $student2->hasHonors() ? "true" : "false","<br>";
            
            //Instances of Movie (objects)
            $avengers = new Movie("Avengers","PG-13");
            echo $avengers->getRating(), "<br>";
            $avengers->setRating("R");
            echo $avengers->getRating(), "<br>";
            echo "<br><hr>";
            //Chef objects
            $chef = new Chef();
            $chef->makeChicken();
            $chef->makeSpecialDish();

            $italianChef = new ItalianChef();
            $italianChef->makeChicken();
            $italianChef->makeSpaghetti();
            $italianChef->makeSpecialDish();
            //Not inherited
            //$chef->makeSpaghetti();




        ?>
    </body>
</html>