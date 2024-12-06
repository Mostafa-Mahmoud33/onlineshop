<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Online</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <center>
    <div class="main">
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>موقع تسويقي اونلاين</h2>
        <img src="logo.png" alt="" width="450">
        <br>
        <input type="text" name='name'>
        <br>
        <input type="text" name='price'>
        <br>
        <input type="file" id="file" name="image" style="display: none;">
        <label for="file">اختر الصورة للمنتج</label>
        <button name="upload">رفع المنتج </button>
        <br><br>
        <a href="products.php">عرض كل المنتجات</a>
      </form>
    </div>
    <p>Developer By Mostafa</p>
  </center>
</body>
</html>