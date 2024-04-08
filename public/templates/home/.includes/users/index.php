<section id="users">
  <div>
    <header>
      <div>
        <h2>Users registered</h2>

        <button type="button" title="Add a new user" class="material-icons md-24">
          add_circle
        </button>
      </div>
    </header>

    <menu>
      <?php foreach ( $this->params["users"] as $id => $user ): ?>
        <li id="<?= $id ?>">
          <button type="button" title="User">
            <span class="material-icons md-48">person</span>

            <span><?= $user->getName() ?></span>
          </button>
        </li>
      <?php endforeach; ?>
    </menu>
  </div>
</section>