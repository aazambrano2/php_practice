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
            }
            //Instant of class Book
            $book1 = new Book("Harry Potter","JK Rowling", 400);
            $book1->printBook();

            $book2 = new Book("Lord of the Rings", "Tolkien", 700);
            $book2->printBook();

            //Instances of class Student
            $student1 = new Student("Jim","Business",2.8);
            $student2 = new Student("Pam", "Art",3.6);

            
        ?>
    </body>
</html>