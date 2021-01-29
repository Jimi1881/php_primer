<?php 
    $title = 'If Else Statements';
    include 'includes\header.php';
?>

<body>
<h1>If Else Statements</h1>
    <?php 
        // An If Statement will carry out an action on the value of the variable
        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 50){
            echo'<h3 style ="color: Green">You Have Passed.</h3>';
        }
        Else {
            echo '<h3 style ="color: Red">You Have Failed.</h3>';
        }

        $grade ='A';
        // If-else If-else
        if($grade == 'A'){
            echo '<h2 style ="color: Green">You Are A Superstar!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style ="color: Blue">You Did Well!</h2>';
        }
        else {
            echo '<h2 style ="color: Red">You Have Failed.....</h2>';
        }
    ?>
<?php require 'includes/footer.php' ?>