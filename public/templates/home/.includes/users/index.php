<section>
  <div>
    <header>
      <div>
        <h1>All users registered.</h1>

        <a href="<?= $this->qs->create("users", "showForm") ?>">
          Add a new User
        </a>
      </div>
    </header>

    <table>
      <caption>
        Users
      </caption>
      <thead>
        <tr>
          <th>Name</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $users as $user ): ?>
          <tr id="<?= $user->getID() ?>">
            <td><?= $user->getName() ?></td>
            <td><?= $user->getEmail() ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!--
<a href="<?php //$this->qs->create("users", "showForm", $user->getID()) ?>" class="material-icons md-18">
  edit
</a>
<a href="<?php //$this->qs->create("users", "delete", $user->getID()) ?>" class="material-icons md-18">
  delete
</a>

<a href="<?php //$this->qs->create("colors", "showForm", $color->getID()) ?>" class="material-icons md-18">
  edit
</a>
<a href="<?php //$this->qs->create("colors", "delete", $color->getID()) ?>" class="material-icons md-18">
  delete
</a>
-->