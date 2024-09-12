<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<body>
    <?php
        function test($n) {
            return $n % 3 == 0 || $n % 7 ==0;
        }
        
        // ตัวอย่างการใช้งาน
        echo "14 หาร 7 ได้ลงตัว";
        var_dump(test(14));
        echo "<br>";
        echo "12 หาร 3 ได้ลงตัว";
        var_dump(test(12));
        echo "<br>";
        echo "37 หาร 3 และ 7 ไม่ลงตัว";
        var_dump(test(37));
        
 
        
    
    
    ?>


    
</body>
</html>