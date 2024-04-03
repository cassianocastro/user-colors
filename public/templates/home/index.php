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
<body>
  <?php require_once __DIR__ . '/../.includes/noscript/index.inc'; ?>

  <?php require_once __DIR__ . '/../.includes/header/index.inc'; ?>

  <main>
    <div>
      <nav>
        <div>
          <ul>
            <li><a href="<?= $this->qs->create("users") ?>">Users</a></li>
            <li><a href="<?= $this->qs->create("colors") ?>">Colors</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </main>

  <?php require_once __DIR__ . '/../.includes/footer/index.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
</body>
</html>