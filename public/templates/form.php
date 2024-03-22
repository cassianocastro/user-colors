<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/less@4">

  <link rel="stylesheet/less" type="text/css" href="src/public/less/form.less">

  <title>Test | Form</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/noscript.inc'; ?>

  <?php require_once __DIR__ . '/includes/header.inc'; ?>

  <main>
    <div>
      <section>
        <div>
          <header>
            <div>
              <h1>Form</h1>
            </div>
          </header>

          <?= ($this->update) ? $this->getUpdateForm() : $this->getInsertForm() ?>
        </div>
      </section>
    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
</body>
</html>