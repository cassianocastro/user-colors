<?php [ $users, $colors ] = [ [], [] ]; ?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Cassiano Castro">
  <meta name="description" content="Application for Test.">
  <meta name="keywords" content="Test, PHP, CSS, MVC">

  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/less@4">

  <link rel="stylesheet/less" type="text/css" href="public/templates/home/index.less">

  <title>Test | Home</title>
</head>
<body id="begin">
  <?php require_once __DIR__ . '/../.includes/noscript/index.inc'; ?>

  <?php require_once __DIR__ . '/../.includes/header/index.inc'; ?>

  <main>
    <div>
      <?php require_once __DIR__ . '/.includes/users/index.php'; ?>

      <?php require_once __DIR__ . '/.includes/colors/index.php'; ?>

      <?php require_once __DIR__ . '/.includes/form/index.php'; ?>
    </div>
  </main>

  <?php require_once __DIR__ . '/../.includes/footer/index.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
  <script defer type="module" src="public/templates/home/index.js"></script>
</body>
</html>