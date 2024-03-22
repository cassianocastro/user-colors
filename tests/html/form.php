<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../css/form.css">

  <title>Test | Form</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header.php'; ?>

  <main>
    <div>
      <section>
        <div>

          <header>
            <div>
              <h1>Form</h1>
            </div>
          </header>

          <form>
            <div>
              <fieldset>
                <legend>Color's Form</legend>

                <label>
                  <span>Nome da Cor:</span>

                  <input id="colorName" type="text" name="name">
                </label>

                <label>
                  <span>Tonalidade:</span>

                  <input id="hexCode" type="color" name="color">
                </label>

                <label>
                  <span>E-mail:</span>

                  <input id="email" type="email" name="email">
                </label>

                <label>
                  <span>Colors:</span>

                  <select id="colors" name="colors[]" size="4" multiple>
                    <option value="1" label="Blue"></option>
                    <option value="2" label="Red"></option>
                    <option value="3" label="White"></option>
                    <option value="4" label="Black"></option>
                  </select>
                </label>
              </fieldset>

              <menu>
                <li><button type="reset">Reset</button></li>
                <li><button type="submit">Submit</button></li>
              </menu>
            </div>
          </form>

        </div>
      </section>
    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>