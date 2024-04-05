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