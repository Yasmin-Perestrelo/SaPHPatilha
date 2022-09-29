<html>
  <head>
    <title>SaPHPatilha</title>
  </head>
    <Style>
    nav ul {
      display: flex;
      list-style:none;
      justify-content: space-evenly;
    } 
  </Style>
  <body>
<!--     <header>
      <nav>
        <ul>
          <li><a style="text-decoration:none;" href="index.php">SaPHPatilha&nbsp; </a></li>
          <li><a style="text-decoration:none;" href="produtos.php">Produtos&nbsp; </a></li>
          <li><a style="text-decoration:none;" href="login.php">Login&nbsp; </a></li>
          <li><a style="text-decoration:none;" href="cadastro.php">Cadastro</a></li>
    <li><a style="text-decoration:none;" href="sobrenos.php">Sobre nós&nbsp; </a></li>
        </ul>
      </nav>
    </header> -->
    <section>  
      <fieldset>
      <h1>Login</h1>
      <form action="funcionamentoLogin.php" method="get">
          <div class="field input">
            <label>Email: </label>
            <input type="email" name="email" placeholder="Digite o seu email">
          </div><br>

          <div class="field input">
            <label>Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" required>
          </div><br>
          <div class="field button">
            <input type="submit" name="submit" value="Login">
          </div><br>
        </form>
        <hr>
        <div class="login">
        Não tem cadastro? <a href="cadastro.php" class="sem-login">Crie uma conta</a>
        </div><br>
      <a href="index.php">Voltar</a>
      </fieldset>
    </section>
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>