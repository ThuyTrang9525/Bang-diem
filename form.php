<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        a: <input type="number" name="hs1"> <br>
        b: <input type="number" name="hs2"> <br>
       
        <input type="submit" name="submit">
        <p ><?php echo "tong la: " ,sum()?></p>
    </form>
    <?php
    function sum() {
        $a = $_POST["hs1"];
        $b = $_POST["hs2"];
        $tong = $a +$b;
        return $tong;
    }
    
    ?>
</body>
</html>