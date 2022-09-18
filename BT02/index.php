<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $result = "";
    if (isset($_POST["a"]) && isset($_POST["b"])) {

        if ($_POST["a"] != 0) {
            $result = $_POST["b"] / $_POST["a"];
        } else if ($_POST["a"] == 0 && $_POST["b"] == 0) {
            $result = "PT vô số nghiệm";
        } else if ($_POST["a"] == 0) {
            $result = "PT vô nghiệm";
        }
    } ?>


    <h1>HTML Forms</h1>
    <form action="" method="POST">
        a: <br> <input type="text" name="a">
        <br>
        b: <br> <input type="text" name="b">
        <br>
        <br>
        <input type="submit" value="Calculate" name="btn_login">
    </form>
    <br>
    <div class="result"><?= $result ?></div>
</body>

</html>