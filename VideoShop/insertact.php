<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Actor</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<h1>Insert</h1><br>
<form method="post" action="insertactsuccess.php">

        <p>

        <label>ID</label>
        <input type="text" name="aid" id="aid">

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label>บ้านเกิด</label>

            <input type="text" name="aaddress" id="aaddress">

        </p>

        <p>

            <label>อายุ</label>

            <input type="int" name="aage" id="aage">

        </p>
        <input type="submit" value="บันทึก" class="submit">
        <a href='actormenu.php' class="back-button"><button type="button">ย้อนกลับ</button></a>
    </form>
</body>
</html>