<dialog id="ud">
  <div>
    <header>
      <div>
        <h3>Users</h3>

        <button type="button" title="Close" class="material-icons md-18">
          close
        </button>
      </div>
    </header>

    <form id="uf" action="./" method="dialog" spellcheck="true" autocomplete="off">
      <div>
        <fieldset>
          <legend>New User</legend>

          <label title="Somente caracteres de A-Z e/ou a-z, 0-9 e _">
            <span>Username</span>

            <input type="text" name="name" maxlength="100" placeholder="username_123" pattern="(\w)+" autofocus required>
          </label>

          <label>
            <span>User e-mail</span>

            <input type="email" name="email" maxlength="100" placeholder="example@example.com" required>
          </label>

          <label title="Você pode selecionar mais de uma opção segurando Ctrl e clicando com o mouse.">
            <span>Colors</span>

            <select name="colors[]" multiple required>
              $this->options
            </select>
          </label>
        </fieldset>
      </div>
    </form>

    <footer>
      <div>
        <menu>
          <li><button form="uf" type="reset" title="Clear data">Clear</button></li>
          <li><button form="uf" type="submit" title="Submit data">Submit</button></li>
        </menu>
      </div>
    </footer>
  </div>
</dialog>