<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="POST">
    a: <input type="number" name="hs" value="<?php echo $kq; ?>" required> <br>
       
        <input type="submit" name="submit">
        <p><?php 
        $number = $_POST["hs"];
        $kq = check($number);
        echo "so vua nhap la: " ,$kq?></p>

    </form>
    <?php
    function check($hs) {
        if ($hs%2==0){
            return "chan";
        } else{
            return "le";
        }
    }
    
    ?>
</body>
</html>