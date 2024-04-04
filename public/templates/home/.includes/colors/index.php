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