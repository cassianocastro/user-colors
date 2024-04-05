<section>
  <div>
    <header>
      <div>
        <h1>Form</h1>
      </div>
    </header>

    <?= ($this->update) ? $this->getUpdateForm() : $this->getInsertForm() ?>
  </div>
</section>