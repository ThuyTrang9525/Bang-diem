<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .demo{
            background-color:yellow;
            padding: 0;
            margin: 5px;
            border: 1px solid black;
            width: 30px;
            height: 30px;
            display: inline-block;
        }
    </style>
</head>    
<body>
    <?php 
    for ($i =0; $i <10; $i++){
        for ($j =0; $j <5; $j++){
        echo "<div class='demo'></div> ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>