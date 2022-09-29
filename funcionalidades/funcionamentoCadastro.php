<?php
//Cadastro
class Cadastro {
  private $nome;
  private $sobrenome;
  private $nascimento;
  private $email;
  private $cpf;
  private $senha;
  private $confirmSenha;

  //contrutor
  public function __construct($nome, $sobrenome, $nascimento, $email, $cpf, $senha, $confirmSenha) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->nascimento = $nascimento;
    $this->email = $email;
    $this->cpf = $cpf;
    $this->senha = $senha;
    $this->confirmSenha = $confirmSenha;

    $value = array("nome"=>  $nome, "sobrenome"=> $sobrenome,"email"=>  $email, 
                     "senha"=>  $senha );

    if(setcookie("user") != null && setcookie("senha") != null){
      setcookie("user");
      setcookie("senha");
    }
    setcookie("user", $value["email"], time() + (3 * 36000), "/" );
    setcookie("senha", $value["senha"], time() + (3 * 36000), "/" );
    header("location: login.php");
  }
}
// Validação de cadastro
$nome=$_GET["nome"];
$sobrenome=$_GET["sobrenome"];
$nascimento=$_GET["data_nascimento"];
$email=$_GET["email"];
$cpf=$_GET["cpf"];
$senha=$_GET["senha"];
$confirmSenha=$_GET["confirm_senha"];
$nome_err = $sobrenome_err = $nascimento_err = $email_err = $cpf_err = $senha_err = $confirmSenha_err = "";

//nome
if(empty($nome) or strstr($nome," ")){
  echo "Campo Nome vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//sobrenome
if(empty($sobrenome) or strstr($sobrenome," ")){
  echo "Campo Sobrenome vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//nascimento
if(empty($nascimento) or strstr($nascimento," ")){
  echo "Campo Nascimento vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//email
if(empty($email) or strstr($email," ")){
  echo "Campo E-mail vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//cpf
if(empty($cpf) or strstr($cpf," ")){
  echo "Campo CPF vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
elseif(!is_numeric($cpf)){
  echo "Campo CPF não numérico! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
elseif(strlen($cpf) != 11){
  echo "CPF maior ou menor que 11 dígitos! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//senha
if(empty($senha) or strstr($senha," ")){
  echo "Campo Senha vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}
//confirmação de senha
if(empty($confirmSenha) or strstr($confirmSenha," ")){
  echo "Campo Confirmação de senha vazio! <br/><br/> <a href='cadastro.php'>Voltar</a>";
}

$cadastro = new Cadastro($nome, $sobrenome, $nascimento, $email, $cpf, $senha, $confirmSenha);
?>

