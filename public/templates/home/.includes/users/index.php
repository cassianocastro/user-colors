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