<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        max-width: 80%;
        background-color: red;
        margin: auto
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        This is a container
        <?php
            $age = 23;
            echo "<br>";
            if($age > 18) {
                echo "You can get involved in liquors";
            }
            else if($age == 15) {
                echo "You are 15 years old";
            }
            else if($age == 25) {
                echo "You are 23 years old";
            }
            else {
                echo "You can't get involved in liquors";
            }
            echo "<br>";
            echo "<h1>Array</h1>";
            $languages = Array("React", "NodeJS", "C++", "C#");
            echo "<br>";
            echo count(($languages));
            echo "<br>";
            echo $languages[2];
            //Loops in php
            echo "<h1>Loops</h1>";
            $a = 0;
            while($a <= 10) { 
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            }
            echo "<br>";
            //Iterating arrays in php using while loop
            $a = 0;
            while($a < count($languages)) {
                echo "<br>The value of language is: ";
                echo $languages[$a];
                $a++;
            }

            //do while loop
            $b = 0;
            do {
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            } while($a > 10);

            //For loop
            for($a = 0; $a < 10; $a++) {
                echo "<br>The value of a from for loop is: ";
                echo $a;
            }

            //foreach loop
            foreach($languages as $value) {
                echo "<br>The value from foreach loop is: ";
                echo $value;
            }

            //Function
            echo "<br><h1>Function</h1>";
            function printMessage() {
                echo "<br>Hello World!!";
            }
            printMessage();
            printMessage();
            printMessage();
            printMessage();
            function printNumber($number) {
                echo "<br>Your number is: ";
                echo $number;
            }
            printNumber(35);
            printNumber(45);
            printNumber(37);
            printNumber(100);
         ?>

    </div>
</body>
</html>