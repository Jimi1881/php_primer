<?php 
    $title = 'Index';
    include 'includes\header.php';
?>

    <!-- Basic HTML -->
    <h1><?php echo $title ?></h1>
    <br>

    <?php 
    // Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br>';
        echo 'Second Line';
        echo '<br>';
        // Variables need a '$' They are not strongly typed
        $name = 'James MacBeath';
        $age = '48';
        // echo variable
         echo $name;
         echo $age;
         echo '<br>';
         echo '<h1>My name is : '.$name.'</h1>';
         echo '<br>';
         echo '<h1>My age is : '.$age.'</h1>';
         echo "<h1>My name is : $name </h1>";
    ?>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-dark">Red</button>
<?php require 'includes/footer.php' ?>