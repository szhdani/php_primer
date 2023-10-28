<?php
    $title = "While loop";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
        while($grade < 10){
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>

    <h1>Do while loop</h1>
    <?php
        $grade = 0;
        do{
            echo '<p>I AM A DO WHILE LOOP!</p>';
            $grade++;
        }while($grade < 10);
    ?>
<?php require 'includes/footer.php'?>