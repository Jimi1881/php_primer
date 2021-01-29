<?php 
    $title = 'Functions';
    include 'includes\header.php';
?>

<body>
    <h1><?php echo $title ?></h1>
    <?php 
        //Defining a Function
        function writemessage(){
            echo "You are really a nice person, Have a nice time! <br>";    
        }
        //Calling a Function
        writemessage();
        echo "<hr>";
        writemessage();

        //Function with Parameters
        function addfunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is : $sum <br>";
        }

        //Pass by reference - use amersand in the parameter
        function changenum(&$num){
            $num = $num + 10;
            //$num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num =500;
        addfunction(10, 20);
        addfunction(10, $num);
        addfunction('10', '50');
        changenum($num);
        echo $num. '<br>';

        $return_value = returnProduct(10, 200);
        echo $return_value. '<br>';

    ?>
<?php require 'includes/footer.php' ?>