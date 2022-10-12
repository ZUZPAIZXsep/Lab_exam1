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
        $m = $_GET["M"];
        $y = $_GET["Y"];
        $d = $_GET["day"];
        echo "เดือน ".$m."ปี พ.ศ.".$y; ?>
        <br>
        <?php
        echo "วันที่ 1 ของเดือนตรงกับวัน ".$d;
    ?>
</body>
</html>