<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <title>Document</title>
</head>
<body>
    <section class="section">
        <div class="container">
          <h1 class="title">
           Salvando radio no SQL
          </h1>
          <p class="subtitle">
            My first website with <strong>Bulma</strong>!
          </p>

          <form action="login.php" method="POST">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" name="usuario" placeholder="Email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password"name="senha" placeholder="Password">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success">
                Login
              </button>
            </p>
          </div>
          </form>

        </div>
      </section>
</body>
</html>