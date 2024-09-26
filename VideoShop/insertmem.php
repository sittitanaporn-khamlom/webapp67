<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Member</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<h1>INSERT MEMBER</h1><br>
<form method="post" action="insertmemsuccess.php">

        <p>

        <label>ID</label>
        <input type="text" name="mid" id="mid">

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="mname" id="mname">

        </p>

        <p>

            <label>นามสกุล</label>
            <input type="text" name="mlastname" id="mlastname">

        </p>

        <p>

            <label>ที่อยู่</label>
            <input type="text" name="maddress" id="maddress">

        </p>

        <p>

            <label>เบอร์โทร</label>
            <input type="text" name="mtel" id="mtel">

        </p>

        <p>
        <input type="submit" value="บันทึก" class="submit">
        <a href='memmenu.php' class="back-button"><button type="button">ย้อนกลับ</button></a>
    </form>
</body>
</html>