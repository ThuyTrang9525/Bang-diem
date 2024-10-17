<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method= "POST">
    Search: <input type="text" name="a" value="<?php echo $_POST["a"]; ?>" required> <br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    function Search($value,$array) {
       
        return (array_search($value,$array));
    }
    $array = array (
        "ram",
        "aakash",
        "saran",
        "mohan",
        "sarahe"
    );
    $value = $_POST["a"];
    echo(Search($value,$array))
    
    ?>
</body>
</html>