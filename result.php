<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        echo "관심언어 : ";
        foreach ($_REQUEST["lang"] as $value)
            echo "$value ";
        echo "<br>";
        
        echo "취미 : ";
        foreach($_REQUEST["hobby"] as $value)
            echo "$value ";
        echo "<br>";
    ?>
</body>
</html>