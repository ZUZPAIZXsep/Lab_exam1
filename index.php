<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calendar.php" method="get">
    <table>
        <tr><td>กรุณากรอกเดือน:</td><td><input type="text" name="M"></td></tr>
        <tr><td>กรุณากรอกปี(พ.ศ.):</td><td><input type="text" name="Y"></td></tr>
        <tr><td>วันที่ 1 ของทุกเดือนตรงกับวัน </td><td>
            <form>
        <select name="day">
            <option value="mon">วันจันทร์</option>
            <option value="tues">วันอังคาร</option>
            <option value="wend">วันพุธ</option>
            <option value="thur">วันพฤหัสบดี</option>
            <option value="วันศุกร์">วันศุกร์</option>
            <option value="sat">วันเสาร์</option>
            <option value="sun">วันอาทิตย์</option>
        </select>
    </form>
</td></tr>
    <tr><td><input type="submit" value="ตกลง"><input type="submit" value="ล้างข้อมูล"></td></tr>
    </table>
    </form>
</body>
</html>