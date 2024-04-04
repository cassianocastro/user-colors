<section>
  <div>
    <header>
      <div>
        <h1>All Colors registered.</h1>

        <a href="<?= $this->qs->create("colors", "showForm") ?>">
          Add a new Color
        </a>
      </div>
    </header>

    <table>
      <caption>
        Colors
      </caption>
      <thead>
        <tr>
          <th>Name</th>
          <th>Hexadecimal Code</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $colors as $color ) : ?>
          <tr id="<?= $color->getID() ?>">
            <td><?= $color->getName() ?></td>
            <td><?= $color->getHexCode() ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>