<?php 
/**
 * Página para controlar as ações do CRUD dos games
 */
  switch($_REQUEST["acao"]){
    case "cadastrar":
      $nome = $_POST["nome"];
      $genero = $_POST["genero"];
      $plataforma = $_POST["plataforma"];
      $preco = $_POST["preco"];

      $sql = "INSERT INTO games (nome, genero, plataforma, preco) VALUES ('{$nome}', '{$genero}', '{$plataforma}', {$preco})";

      $resposta = $conn->query($sql);

      if($resposta == true){
        echo "<script>alert('Game cadastrado com sucesso!')</script>";
        echo "<script>location.href = '?'</script>";
      } else {
        echo "<script>alert('Não foi possível cadastrar o game!')</script>";
        echo "<script>location.href = '?page=novo'</script>";
      }
      break;
    case "editar":
      break;
    case "excluir":
      break;
    default:
      break;
  }
?>