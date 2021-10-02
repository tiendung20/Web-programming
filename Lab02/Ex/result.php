<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Cảm ơn bạn đã điền thông tin</h2>
    <?php
    $name = $_POST["name"];
    $class = $_POST["class"];
    $university = $_POST["university"];
    print ("Hello, $name<br>You are studying at $class, $university<br>");
    ?>
</body>

</html>