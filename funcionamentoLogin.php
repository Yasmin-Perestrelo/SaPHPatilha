<?php
//Login
class Login {
  private $email;
  private $senha;

  //contrutor
  public function __construct($email, $senha) {
    $this->email = $email; 
    $this->senha = $senha;
    header("location: home.php");
  }
}
// Validação de cadastro
$email=$_GET["email"];
$senha=$_GET["senha"];

//email
if(empty($email) or strstr($email," ")){
  echo "Campo E-mail vazio! <br/><br/> <a href='login.php'>Voltar</a>";
}

//senha
if(empty($senha) or strstr($senha," ")){
  echo "Campo Senha vazio! <br/><br/> <a href='login.php'>Voltar</a>";
}

if($_COOKIE["user"] == $email && $_COOKIE["senha"] == $senha) {
  $login = new Login($email, $senha);
} else {
  header("location: login.php");
}

?>

