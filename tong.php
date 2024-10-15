<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tong.php" method="POST">
    a: <input type="number" name="hsa" value="<?php echo $a; ?>" required> <br>
    b: <input type="number" name="hsb" value="<?php echo $b; ?>" required> <br>
       
        <input type="submit" name="submit">
        <p><?php echo "tong la: " ,sum($a,$b)?></p>

    </form>
    <?php
    function sum($hsa, $hsb) {
        $tong = $hsa + $hsb;
        return $tong;
    }
    $a = $_POST["hsa"];    
    $b = $_POST["hsb"];    
    $kq = sum ($a,$b);
    ?>
</body>
</html>