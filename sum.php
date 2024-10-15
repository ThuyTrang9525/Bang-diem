<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>    
<body>
    <?php 
    $sum=0;
    $sumc=0;
    $suml=0;
    for ($i =0; $i <10; $i++){
        $sum += $i;
        if ($i %2==0){
            $sumc += $i;
        }
        else{
            $suml += $i;
        }
    }
    echo "Tổng các số từ 0 đến 10 là:$sum <br>  ";
    echo "Tổng các số chẵn từ 0 đến 10 là:$sumc <br>";
    echo "Tổng các số lẻ từ 0 đến 10 là:$suml  <br>";
    ?>
</body>
</html>