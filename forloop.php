<?php
    $title = "For loops";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php'?>