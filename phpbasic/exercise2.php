<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>
    <?php
        function test($temp1, $temp2) {
            // ตรวจสอบเงื่อนไขทั้งสองชุด
            return ($temp1 < 0 && $temp2 > 100) || ($temp2 < 0 && $temp1 > 100);
        }
        
        // ตัวอย่างการใช้งาน
        var_dump(test(120, -1));  // ผลลัพธ์: bool(true)
        echo "<br>";
        var_dump(test(2, 120));   // ผลลัพธ์: bool(false)
        
 
        
    
    
    ?>


    
</body>
</html>