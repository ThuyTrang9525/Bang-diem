<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form thêm sản phẩm -->
    <form action="push.php" method="POST">
        <h1>Thêm sản phẩm mới</h1>
        Tên sản phẩm: <input type="text" name="a" required> <br>
        Giá sản phẩm: <input type="number" name="b" required> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Danh sách sản phẩm</h2>

    <?php
        // Hiển thị danh sách sản phẩm
        echo "<ul>";
        foreach ($_SESSION['array'] as $product) {
            echo "<li>" . $product['name'] . ": " . $product['cost'] . "</li>";
        }
        echo "</ul>";
    ?>
    <?php
        session_start(); // Bắt đầu session

        // Hàm thêm sản phẩm vào mảng
        function Push($name, $cost, &$array) {
            $array[] = array('name' => $name, 'cost' => $cost);
            return $array;
        }

        // Kiểm tra nếu session chưa được khởi tạo thì khởi tạo mảng rỗng
        if (!isset($_SESSION['array'])) {
            $_SESSION['array'] = array();
        }

        // Nếu form được submit thì thêm sản phẩm vào session array
        if (isset($_POST['submit'])) {
            $name = $_POST['a'];
            $cost = $_POST['b'];
            $_SESSION['array'] = Push($name, $cost, $_SESSION['array']);
        }
    ?>



</body>
</html>