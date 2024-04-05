<dialog id="">
  <div>
    <header>
      <div>
        <h3>Form</h3>

        <button type="button" title="Close" class="material-icons md-18">
          close
        </button>
      </div>
    </header>

    <form id="cf" action="./" method="dialog" spellcheck="true" autocomplete="off">
      <div>
        <fieldset>
          <legend>New Color</legend>

          <label title="Somente caracteres de A-Z e/ou a-z">
            <span>Color Name</span>

            <input type="text" name="name" maxlength="100" pattern="([A-Za-z])+" placeholder="Informe o nome..." autofocus required>
          </label>

          <label title="">
            <span>Tonalidade</span>

            <input type="color" name="hexCode" required>
          </label>
        </fieldset>
      </div>
    </form>

    <footer>
      <div>
        <menu>
          <li><button form="cf" type="reset" title="Clear data">Clear</button></li>
          <li><button form="cf" type="submit" title="Submit data">Submit</button></li>
        </menu>
      </div>
    </footer>
  </div>
</dialog>