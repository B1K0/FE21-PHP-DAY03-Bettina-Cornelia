<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // EXERCISE 1 - FOR LOOP
        for($i=0; $i<10; $i++) {
            echo "My name is Benelia.<br>";
        };

    // EXERCISE 1A - WHILE LOOP
        $i = 0;
        while($i < 50) {
            $i++; 
        }
        echo "My name is Benelia, oida!.?<br>";

    // EXERCISE 1B - DO WHILE LOOP
    $i = 0;
    do {
        $i++; 
    }  while($i < 50); 
    echo "My name is Queen Benelia! <br>";

    // EXERCISE 2 - Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.
     $numeric = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
     foreach($numeric as $value)
     {
         echo "Value is $value <br>";
     };

    // EXERCISE 3 - Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.
    
    $a = array();

    for($i=0; $i<10; $i++)
    {
        $b =+ (rand(0,200));
        array_push($a, $b);
    }
    
    // take a look at our awesome array:
    var_dump($a);
    
    function printMax($dummyArray){
        $dummyArray=max($dummyArray);
        echo "The largest number of this array is " .$dummyArray. "<br>";
    }

    // Bettinas version that is much more splendid (and cleaner!) as mine:
    // function printMax($c) {
    //     echo (max($c));
    // }

    printMax($a);

    ?>
</body>
</html>