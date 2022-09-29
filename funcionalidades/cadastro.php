<html>
  <head>
    <title>SaPHPatilha</title>
    <Style>
    nav ul {
      display: flex;
      list-style:none;
      justify-content: space-evenly;
    } 
  </Style>
  <body>
<!--    <header>
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
      <h1>Cadastro</h1>
      <form action="funcionalidades/funcionamentoCadastro.php" method="get">
          <div class="field input">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
          </div><br>
          <div class="field input">
            <label>Sobrenome: </label>
            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
          </div><br>
          <div class="field input">
            <label>Data de nascimento: </label>
            <input type="date" name="data_nascimento" min="1922-01-01" max="2022-12-31" required>
          </div><br>
          <div class="field input">
            <label>Email: </label>
            <input type="email" name="email" placeholder="Digite o seu email">
          </div><br>
          <div class="field input">
            <label>CPF: </label>
            <input type="text" name="cpf" placeholder="Entre com o seu CPF" max-lenght="11" required>
          </div><br>
          <div class="field input">
            <label>Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" required>
          </div><br>
          <div class="field input">
            <label>Confirmação de senha: </label>
            <input type="password" name="confirm_senha" id="confirm-senha" placeholder="Confirme a sua senha" required>
          </div><br>
     <!-- <div class="field image">
            <label>Imagem do perfil</label>
            <input type="file" name="imagem" accept="image/x-png,image/gif,image/jpeg,image/jpg">
          </div><br> -->
          <div class="field button">
            <input type="submit" name="submit" value="Cadastrar">
          </div><br>
        </form>
        <hr>
        <div class="login">
        Já tem cadastro? <a href="funcionalidades/login.php" class="sem-login">Acesse sua conta</a>
        </div><br>
      <a href="../index.php">Voltar</a>
      </fieldset>
    </section>
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>