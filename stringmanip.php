<?php 
    $title = 'String Manipulation';
    include 'includes\header.php';
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php 
    //Concatenation of strings
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with Rock";  
        $name = "james macbeath" ;
        echo $phrase1 .", named Tiffany, ". $phrase2;
        echo '<br>';
        echo '<hr/>';
        //String transformation
        echo 'Upper first letter : ' . ucfirst($name). '<br>';
        echo 'Upper first letter of each word : ' . ucwords($name). '<br>';
        echo 'Upper case : '. strtoupper($name). '<br>';
        echo 'Lower case : '. strtolower("THIS WAS ALL UPPER CASE"). '<br>';
        echo '<hr/>';
        echo 'Repeat String : ' . str_repeat('a',10) . '<br>';
        echo 'Repeat String : ' . strtoupper(str_repeat('a',10)) . '<br>';
        echo 'Get a Substring : ' . substr($name, 5, 8). '<br>';
        
        echo 'Get position of string : ' . strpos($name, 'b'). '<br>';
        
        echo 'Find Character "s" : ' . strchr($name, 's'). '<br>';
        echo 'Find Character "m" : ' . strchr($name, 'm'). '<br>';
        echo 'Find Character "b" : ' . strchr($name, 'b'). '<br>';
        echo 'Find Character "t" : ' . strchr($name, 't'). '<br>';

        echo 'Find lenght of a string : ' .strlen($name) . '<Br>';

        echo 'Without Trim : ' . "A". " B C D ". "E". '<br>';
        echo 'Trim spaces on both sides : ' . "A". trim(" B C D ") ."E". '<br>';
        echo 'Trim spaces on the left : ' . "A". ltrim(" B C D ") ."E". '<br>';
        echo 'Trim spaces on the right : ' . "A". rtrim(" B C D ") ."E". '<br>';
        echo 'Replace string with another : ' . str_replace("stand", "sit", $phrase2) . '<br>';


    ?>
    
    <?php require 'includes/footer.php' ?>