<?php $colors = [] ?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/less@4">

  <link rel="stylesheet/less" type="text/css" href="public/styles/table.less">

  <title>Test | Colors</title>
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
              <h1>All Colors registered.</h1>
            </div>
          </header>

          <table>
            <caption>
              Colors Table
            </caption>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código Hexadecimal</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($colors as $color) : ?>
                <tr>
                  <td><?= $color->getID() ?></td>
                  <td><?= $color->getName() ?></td>
                  <td><?= $color->getHexCode() ?></td>
                  <td>
                    <a href="<?= $this->qs->create("colors", "showForm", $color->getID()) ?>" class="material-icons md-18">
                      edit
                    </a>
                    <a href="<?= $this->qs->create("colors", "delete", $color->getID()) ?>" class="material-icons md-18">
                      delete
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <footer>
            <div>
              <a href="<?= $this->qs->create("colors", "showForm") ?>">
                Add a new Color
              </a>
            </div>
          </footer>

        </div>
      </section>
    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
</body>
</html>