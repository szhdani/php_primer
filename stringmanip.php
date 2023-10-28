<?php
    $title = "String manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "daniel sz h";
        echo $phrase1.', named Tiffany, '.$phrase2;
        echo '<br/>';
        echo '<hr/>';

        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Uppercase: '.strtoupper($name).'<br/>';
        echo 'Lowercase: '.strtolower('THIS WAS ALL UPPERCASE').'<br/>';
        echo '<hr/>';
        echo 'Repeat string: '.str_repeat('a', 10).'<br/>';
        echo 'Repeat string - nested function: '.strtoupper(str_repeat('a', 10)).'<br/>';
        echo '<br/>';

        echo 'Get a substring: '. substr($name, 3, 5).'<br/>';

        echo 'Get position of string: '. strpos($name, 'l').'<br/>';

        echo 'Find character "n": '. strchr($name, 'n').'<br/>';

        echo 'Find length of string: '. strlen($name).'<br/>';

        echo 'Without trim: '."A"." B C D "."E".'<br/>';
        echo 'Trim spaces on both sides: '."A".trim(" B C D ")."E".'<br/>';
        echo 'Trim spaces to the left: '."A".ltrim(" B C D ")."E".'<br/>';
        echo 'Trim spaces to the right: '."A".rtrim(" B C D ")."E".'<br/>';

        echo 'Replace string with another: '.str_replace("stand", "sit", $phrase2).'<br/>';
    ?>
<?php require 'includes/footer.php'?>