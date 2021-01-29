<?php 
    $title = 'For Loop';
    include 'includes\header.php';
?>

<body>
    <h1><?php echo $title ?></h1>
    <?php 
    // For Loops
    for($count =0; $count < 10; $count++){
        echo '<p>Hello World</p>';
    }

    for($count =0; $count < 10; $count++){
        echo "<p>The Count is $count</P>";
    }   
    ?>
<?php require 'includes/footer.php' ?>