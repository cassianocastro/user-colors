<header id="begin">
  <div>
    <div>
      <a href="<?= $this->qs->create("home"); ?>" title="Initial Page" class="material-icons md-36 md-light">
        home
      </a>
    </div>

    <div>
      <nav>
        <ul>
          <div>
            <li><a href="<?= $this->qs->create("users"); ?>">Users</a></li>
            <li><a href="<?= $this->qs->create("colors"); ?>">Colors</a></li>
            <li><a id="special" href="<?= $this->qs->create("cv"); ?>">CV</a></li>
          </div>
        </ul>
      </nav>
    </div>
  </div>
</header>