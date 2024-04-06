<section>
  <div>
    <header>
      <div>
        <h2>All users registered.</h2>

        <button type="button" title="Add a new user" class="material-icons md-24">
          add_circle
        </button>
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
        <?php foreach ( $this->params["users"] as $id => $user ): ?>
          <tr id="<?= $id ?>">
            <td><?= $user->getName() ?></td>
            <td>
              <a href="mailto:<?= $user->getEmail() ?>">
                <?= $user->getEmail() ?>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>