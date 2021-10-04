<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
        }

        * {
            box-sizing: border-box;
        }

        .label {
            font-size: larger;
            font-style: italic;
            padding-bottom: 20px;
        }

        .gender>input,
        input[type=checkbox],
        input[type=date] {
            padding: 15px;
            margin: 5px 0 22px 0;
        }

        input[type=text],
        input[type=email] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #d1cdcd;
        }
    </style>
</head>

<body>
    <h1>Thank you for filling out the information</h1>
    <div class="label">Name: <?php echo $_POST["name"]; ?></div>
    <div class="label">B: <?php echo $_POST["age"]?></div>
    <div class="label">Gender: <?php echo $_POST["gender"]; ?></div>
    <div class="label">Email: <?php echo $_POST["email"]; ?></div>
    <div class="label">University: <?php echo $_POST["university"]; ?></div>
    <div class="label">Class: <?php echo $_POST["class"]; ?></div>
    <div class="label">Hobbies: <?php
    if(isset($_POST["hobby1"])) echo $_POST["hobby1"], " ";
    if(isset($_POST["hobby2"])) echo $_POST["hobby2"], " ";
    if(isset($_POST["hobby3"])) echo $_POST["hobby3"], " ";
    ?></div>
</body>

</html>