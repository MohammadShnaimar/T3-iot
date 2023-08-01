<!DOCTYPE html>
<html>
<head>
  <title>قراءة الرطوبة والحرارة</title>
</head>
<body>
  <h1>قراءة الرطوبة والحرارة</h1>
  <?php
  // استقبال البيانات من الحساس
  $temperature = $_GET["temperature"];
  $humidity = $_GET["humidity"];

  // عرض القيم على الصفحة
  echo "درجة الحرارة: " . $temperature . "°C<br>";
  echo "الرطوبة: " . $humidity . "%<br>";
  ?>
</body>
</html>
