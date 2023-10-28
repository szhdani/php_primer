<?php
    $title = "Index";
    include 'includes/header.php'
?>

    <h1>Hello HTML</h1>

    <?php   
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';

        $name = 'Daniel';
        $age = 17;
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo "<h1>My age is: $age</h1>";
    ?>
<?php require 'includes/footer.php'?>