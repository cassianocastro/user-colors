<?php $users = [] ?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/less@4">

  <link rel="stylesheet/less" type="text/css" href="public/templates/users/index.less">

  <title>Test | Users</title>
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
              <h1>All users registered.</h1>
            </div>
          </header>

          <table>
            <caption>
              Users Table
            </caption>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $user->getID() ?></td>
                  <td><?= $user->getName() ?></td>
                  <td><?= $user->getEmail() ?></td>
                  <td>
                    <a href="<?= $this->qs->create("users", "showForm", $user->getID()) ?>" class="material-icons md-18">
                      edit
                    </a>
                    <a href="<?= $this->qs->create("users", "delete", $user->getID()) ?>" class="material-icons md-18">
                      delete
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <footer>
            <div>
              <a href="<?= $this->qs->create("users", "showForm") ?>">
                Add a new User
              </a>
            </div>
          </footer>

        </div>
      </section>
    </div>
  </main>

  <?php require_once __DIR__ . '/../.includes/footer/index.inc'; ?>

  <script defer type="module" src="https://cdn.jsdelivr.net/npm/less@4"></script>
</body>
</html>