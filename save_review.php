<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $message = trim($_POST['message']);
  if ($name && $message) {
    $entry = $name . ": " . $message . "\n";
    file_put_contents("reviews.txt", $entry, FILE_APPEND);
  }
}
header("Location: reviews.php");
exit();
?>