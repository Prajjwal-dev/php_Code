<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is my First PHP Website</h2>
    <h1>Hello!!</h1>
    <br>
    <?php
        echo "Hello World and this is printed using PHP!";
        // This is a single-line comment
        /*
        This is a multi-line comment
        */
        $var1 = 34;
        $var2 = "Prajjwal";
        echo "<br>";
        echo $var1;
        echo "<br>";
        echo $var2;
        //Assignment Operator
        echo "<h1>Assignment Operator</h1>";
        $a = 43;
        $b = 65;
        $sum = $a + $b;
        echo "<br>";
        echo "The sum of " . $a . " and " . $b . " is: " . $sum;
        echo "<h1>Increment/Decrement Operator</h1>";
        $var1++;
        echo "<br>";
        echo $var1;
        //Logical Operator
        echo "<h1>Logical Operator</h1>";
        $myVar = (true) and (true);
        echo "<br>";
        //var_dump() is a function in PHP used to display detailed information about one or more variables. It shows the data type, value, and, in the case of complex types (like arrays or objects), their structure and contents.
        echo var_dump($myVar);

        //Datatypes in php
        echo "<h1>Data type in php</h1>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";
        $var = 67;
        echo "<br>";
        echo var_dump($var);
        $var = true;
        echo var_dump($var);
        echo "<br>";
    ?>
</body>
</html>
