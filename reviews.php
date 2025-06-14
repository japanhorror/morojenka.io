<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Отзывы — ИП Мазур</title>
  <style>
    body { font-family: sans-serif; background: #fff0f5; margin: 0; padding: 20px; }
    h2 { text-align: center; }
    .form-block { max-width: 600px; margin: 20px auto; }
    textarea, input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
    button { background: hotpink; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    .review { background: #fff; border-radius: 6px; padding: 15px; margin: 10px 0; }
  </style>
</head>
<body>
  <h2>Оставьте отзыв</h2>
  <div class="form-block">
    <form action="save_review.php" method="post">
      <input type="text" name="name" placeholder="Ваше имя" required>
      <textarea name="message" rows="4" placeholder="Ваш отзыв" required></textarea>
      <button type="submit">Отправить</button>
    </form>
  </div>
  <div class="form-block">
    <h3>Отзывы:</h3>
    <?php
      if (file_exists("reviews.txt")) {
        $lines = file("reviews.txt");
        foreach ($lines as $line) {
          echo '<div class="review">' . htmlspecialchars($line) . '</div>';
        }
      } else {
        echo "<p>Отзывов пока нет.</p>";
      }
    ?>
  </div>
</body>
</html>
