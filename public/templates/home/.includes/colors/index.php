<section>
  <div>
    <header>
      <div>
        <h2>All Colors registered.</h2>

        <button type="button" title="Add a new color" class="material-icons md-24">
          add_circle
        </button>
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