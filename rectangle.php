    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rounded Rectangle</title>
  <style>
    .rounded-rectangle {
      width: 200px;
      height: 100px;
      background-color: #3498db;
      border-radius: 30px;
      border: 2px solid #2980b9;
      margin: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-family: Arial, sans-serif;
      font-size: 18px;
      
    }
  </style>
</head>
<body>
<meta charset="utf-8">
<title>HTML</title>

<style>   
   .flip-img {
      transform: scalex(-1);
   }
</style>
</head>
<body>
   <h2> Original image </h2>
   <img class="original image" src="logo.jpg" alt="img1">
   <h2> flip image </h2>
   <img class="flip-img" src="logo.jpg" alt="img1">
</body>

<?php
echo '<div class="rounded-rectangle">';
echo 'Rounded Rectangle';
echo '</div>';
?>

</body>
</html>
