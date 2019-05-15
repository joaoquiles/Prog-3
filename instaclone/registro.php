<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>InstaClone - Registro</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

  </head>
  <body>
    <main>
      <section id="mainSection">
        <div id="bordas1">
          <header>
            <h1>
              <i class="fas fa-camera" style="font-size: 50px; color: #ff0000;"  ></i>
              InstaClone</h1>
            <h3>Cadastre-se para ver fotos e vídeos dos seus amigos</h3>
          </header>
          <div>
            <form>
              <div>
                <input type="text" name="email" placeholder="Seu e-mail">
              </div>
              <div>
                <input type="text" name="nome" placeholder="Nome completo">
              </div>
              <div>
                <input type="text" name="usuario" placeholder="Nome de Usuário">
              </div>
              <div>
                <input type="password" name="senha" placeholder="Senha">
              </div>
              <div>
                <input type="checkbox" name="concordo">
                <label for="concordo">Concordo com os termos,
                  Política de Dados e Política de Cookies.</label>
              </div>
              <div>
                <input type="submit" value="Cadastre-se" >
              </div>
            </form>
          </div>
        </div>
        <br>
        <footer id="bordas">
           <h3 id="tamanho">Já tem uma conta?</h3>
           <a href="login.php">Conecte-se</a>
        </footer>
      </section>
    </main>
  </body>
</html>
