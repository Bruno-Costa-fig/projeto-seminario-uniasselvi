<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
// define("PASS", "admin24");
define("DB", "locadora-games");

$conn = new mysqli(HOST, USER, PASS, DB);

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function validarUsuario($tipo_usuario, $id_usuario = '')
{
  if (empty($id_usuario)) {
    $id_usuario = $_REQUEST["id"];
  }

  if (empty($_SESSION)) {
    echo "<script>alert('Você precisa estar logado para alugar um game!')</script>";
    echo "<script>location.href = '?page=login'</script>";
    exit;
  }
  if (empty($id_usuario) || $_SESSION["tipo_usuario"] != $tipo_usuario) {
    echo "<script>alert('Você não tem permissão para executar essa ação!')</script>";
    echo "<script>location.href = '?page=meus-games'</script>";
    exit;
  }
}


function validarId($id)
{
  if (empty($id)) {
    echo "<script>alert('Game não encontrado!')</script>";
    echo "<script>location.href = '?page=meus-games'</script>";
    exit;
  }
}
