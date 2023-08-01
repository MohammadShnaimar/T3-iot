<?php
// استقبال البيانات من الحساس وحفظها في متغيرات
if (isset($_GET['temperature'])) {
  $temperature = $_GET['temperature'];
}

if (isset($_GET['humidity'])) {
  $humidity = $_GET['humidity'];
}

// عرض البيانات في صفحة HTML
?>

<!DOCTYPE html>
<html>
<head>
    <title>قراءات الحساس</title>
</head>
<body>
    <h1>قراءات الحساس</h1>
    <p>درجة الحرارة: <?php echo $temperature; ?> °C</p>
    <p>الرطوبة: <?php echo $humidity; ?> %</p>
</body>
</html>
