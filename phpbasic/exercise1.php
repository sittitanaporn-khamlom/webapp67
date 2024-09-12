<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <?php
        function test($str) {
            // หาตัวอักษรตัวสุดท้ายของสตริง
            $lastChar = substr($str, -1);
          
            // สร้างสตริงใหม่โดยนำตัวอักษรตัวสุดท้ายมาต่อทั้งหน้าและหลัง
            $newStr = $lastChar . $str . $lastChar;
          
            return $newStr;
          }
          
          // ตัวอย่างการใช้งาน
          echo test("Red");
          echo "<br>";
          echo test("Green");
          echo "<br>";
          echo test("1");
        
 
        
    
    
    ?>


    
</body>
</html>