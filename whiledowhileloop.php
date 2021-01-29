<?php 
    $title = 'While Loop';
    include 'includes\header.php';
?>

<body>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade =0;
        // Infinite Loop
        // while($grade < 10){
        //  echo '<p>I Am Less Than 10!</p>';    
        //}

        while($grade < 10){
            echo '<p>I Am Less Than 10!</p>';
            $grade++;
        }
        echo 'Exit Loop!';
    ?>

    <h1>Do-While Loop</h1>
    <?php 
        //Post-Condition Loop
        $grade =0;
        do{
            echo '<p>I Am A Do While Loop</p>';
            $grade++;
        } while($grade < 10);
        echo 'Exit Loop!';
    ?>
<?php require 'includes/footer.php' ?>