<?php 
    $title = 'Switch Statements';
    include 'includes\header.php';
?>

<body>
    <h1>Switch Statements</h1>
    <?php 
        $grade = 'C';

        Switch($grade){
            case 'A':
                echo '<h2 style = "color: Green">You Are A Superstar</h2>';
                break;
            case 'B':
                echo '<h2 style = "color: Blue">You Did Well</h2>';
                break;
                default:
                    echo '<h2 style = "color: Red">You Have Failed</h2>';
                    break;       
                }
    ?>
<?php require 'includes/footer.php' ?>