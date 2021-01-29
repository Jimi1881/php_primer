<?php 
    $title = 'Date And Time';
    include 'includes\header.php';
?>

<body>
    <h1><?php echo $title ?></h1>
    <?php 
        $datenow = getdate();
        echo "Today's Date : <br>";
        echo $datenow['mday'] . '<br>';
        echo $datenow['mon'] . '<br>';
        echo $datenow['year'] . '<br>';   
        
        echo "Today's Date : " . $datenow['mday'] . '/' . $datenow['mon'] .'/' . $datenow['year'] . '<br>';
    
        echo time() . '<br>';

        print date ("d/m/y g.i.s<br>", time()) . '<br>';
        print "Today is ";
        print date ("jS M Y, \a\\t g.i.a", time());
    ?>

    
<?php require 'includes/footer.php' ?>