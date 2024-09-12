<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>
    <?php
        function test($x, $y) {
            // ตรวจสอบเงื่อนไขทั้งสองชุด
            return ($x <=20 || $y >=50) || ($y <= 20 || $x >=50);
        }
        
        // ตัวอย่างการใช้งาน
        var_dump(test(20, 84));  // ผลลัพธ์: bool(true)
        echo "<br>";
        var_dump(test(25, 40));   // ผลลัพธ์: bool(false)
        
 
        
    
    
    ?>


    
</body>
</html>