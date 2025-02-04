
    <?php

    $cars = array("Volvo", "BMW", "Toyota");
    echo "I love " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";

    //Change array case
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r(array_change_key_case($age, CASE_UPPER));
    echo "<br>";

    //Combine array
    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");
    $c = array_combine($fname, $age);
    print_r($c);
    echo "<br>";
 
    //Array count value
    $a = array("A", "Cat", "Dog", "A", "Dog");
    print_r(array_count_values($a));
    echo "<br>";

    //array difference
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");
    $result = array_diff($a1, $a2);
    print_r($result);
    echo "<br>";

    //Array diff assoc
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "blue");
    $result = array_diff_assoc($a1, $a2);
    print_r($result);
    echo "<br>";

    //array diff key
    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "c" => "blue", "d" => "pink");
    $result = array_diff_key($a1, $a2);
    print_r($result);
    echo "<br>";

    //array filter
    function test_odd($var)
    {
        return ($var & 1);
    }

    $a1 = array(1, 3, 2, 3, 4);
    print_r(array_filter($a1, "test_odd"));
    echo "<br>";

    //array intersect
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");
    $result = array_intersect($a1, $a2);
    print_r($result);
    echo "<br>";

    //array reverse
    $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
    print_r(array_reverse($a));
    echo "<br>";

    ?>
