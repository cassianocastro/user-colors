<section id="colors">
  <div>
    <header>
      <div>
        <h2>Colors registered</h2>

        <button type="button" title="Add a new color" class="material-icons md-24">
          add_circle
        </button>
      </div>
    </header>

    <nav>
      <div>
        <ul>
          <?php foreach ( $this->params["colors"] as $id => $color ) : ?>
            <li>
              <div id="<?= $id ?>" class="color">
                <span style="background: <?= $color->getHexCode() ?>;"></span>

                <span><?= $color->getName() ?></span>

                <span><?= $color->getHexCode() ?></span>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </div>
</section>