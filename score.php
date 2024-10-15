<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            background-color: rgb(191, 173, 173);
            height: 400px;
            width: 600px;
        }
        h2{
            color: blue;
            text-align: center;
            margin: 10px;
            padding: 10px;
        }
        label {
            margin-right: 20px;
            margin-top: 15px;
        }
        .semester1{
            display: grid;
            grid-template-columns: 20% 70%;
        }
        .semester2{
            display: grid;
            grid-template-columns: 20% 70%;
        }
        .year{
            display: grid;
            grid-template-columns: 20.5% 10%;
        }
        .summarise{
            display: grid;
            grid-template-columns: 20% 70%;
        }
        input{
            margin: 2px;
        }
        .button{
            display: flex;
            justify-content: center;
        }
        button{
            margin: 20px;
            padding: 10px;
            background-color: cadetblue;
        }
        p{
            width: 500px;
            height: 100px;
        }
        .year>select{
            width: 40px;
        }
    </style>
</head>
<body>
    <form action="score.php" method="POST">
        <h2>BẢNG ĐIỂM CỦA EM</h2>

        <div class="semester1">
            <label for="SE1">Semester 1:</label>
            <input type="text" id="se1" name="se1" value="<?php echo $_POST["se1"] ?>" required>
        </div>

        <div class="semester2">
            <label for="SE2">Semester 2:</label>
            <input type="text" id="se2" name="se2" value="<?php echo $_POST["se2"] ?>" required>
        </div>

        <div class="year">
            <label for="YEAR">Year:</label>
            <select name="year" id="select" required>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>            
        </div>

        <div class="summarise">
            <label for="result">Summarise:</label>
            <input type="number" id="result" value="<?php echo caculator() ?>" disabled>
        </div>

        <p class="goal" id="display"><?php echo rank(caculator()) ?></p>

        <div class="button">
            <button type="submit" name="ok" id="ok" value="ok">OK</button>
            <button type="reset" name="cancel" id="cancel" value="cancel">Cancel</button>
        </div>
    </form>
    <?php

    function caculator() {
        $point1 = $_POST["se1"];
        $point2 = $_POST["se2"];
        $year = $_POST["year"];
        $point;
        $rank;
        switch ($year){
            case 1:
                $point = ($point1 +$point2)/2;
                
                break;
            case 2:
                $point = ($point1 +$point2*2)/3;
                
                break;
        }
        return $point;}
    function rank ($diem){
        if ($diem >=9){
            $rank = "HỌC SINH XUẤT SẮC";
        } else if ($diem >=8){
            $rank = "HỌC SINH GIỎI";
        } else if ($diem >=6.5){
            $rank = "HỌC SINH KHÁ";
        } else if ($diem >=5){
            $rank = "HỌC SINH TRUNG BÌNH";
        } else {
            $rank = "HỌC SINH YẾU";
        }
        return $rank;
    }   
    
    ?>

</body>
</html>