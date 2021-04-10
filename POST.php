<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" value="0" name="mybutton">
        <input type="submit" value="1" name="mybutton">
        <input type="submit" value="2" name="mybutton">
    </form>

    <?php 
        $m = $_POST["mybutton"];
        if ($m == 0 )
        {
            echo $m+1;
        }
        else
        {
            echo 2;
        }
    ?>
</body>
</html>