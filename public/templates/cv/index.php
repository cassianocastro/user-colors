<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/less@4">
  <link rel="preload" as="object" type="application/pdf" href="lib/Curriculum.pdf">

  <link rel="stylesheet/less" type="text/css" href="public/templates/cv/index.less">

  <title>Test | CV</title>
</head>
<body>
  <?php require_once __DIR__ . '/../.includes/noscript/index.inc'; ?>

  <?php require_once __DIR__ . '/../.includes/header/index.inc'; ?>

  <main>
    <div>
      <section>
        <div>
          <header>
            <div>
              <h1>Curriculum</h1>
            </div>
          </header>

          <object data="lib/Curriculum.pdf" type="application/pdf"></object>
        </div>
      </section>
    </div>
  </main>

  <?php require_once __DIR__ . '/../.includes/footer/index.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
</body>
</html>