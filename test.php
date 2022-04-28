<!DOCTYPE html>
<html>
<body>
    <!-- HTML -->
    <h1>My first PHP page</h1>

    <!-- PHP EXAMPLE -->
    <?php
    echo "My first PHP script"
    #EXAMPLE
    ?>

    <?php
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";
    //EXAMPLE
    ?>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
$x = 5 /* + 15 */ + 5;
echo $x;
?>

<?php
//EXAMPLE VAR
$txt = "Hello world!";
$x = 4;
$y = 10.5;
?>

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>


<!-- GLOBAL SCOPE EXAMPLE-->

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


<!-- LOCAL SCOPE EXAMPLE -->

<?php
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>



<!-- use the global keyword before the variables (inside the function -->
<?php
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>


<!-- PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable -->

<?php
$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest3();
echo $y; // outputs 15
?>



<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest4();
myTest4();
myTest4();
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>


<!-- 
PHP Object
Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Example -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!-- COUNT the Length of a String --> 

<?php
echo strlen("Hello world!"); // outputs 12
?>

<!-- COUNT Words in a String --> 

<?php
echo str_word_count("Hello world!"); // outputs 2
?>

<!-- REVERSE a String--> 

<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

<!--
strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
-->
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
<!--
str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.
-->
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

</body>
</html>