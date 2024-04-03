<header id="begin">
  <div>
    <a href="<?= $this->qs->create("home"); ?>" title="Initial Page" class="material-icons md-36 md-light">
      home
    </a>

    <nav>
      <div>
        <ul>
          <li><a href="<?= $this->qs->create("users"); ?>">Users</a></li>
          <li><a href="<?= $this->qs->create("colors"); ?>">Colors</a></li>
          <li><a id="special" href="<?= $this->qs->create("cv"); ?>">CV</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>