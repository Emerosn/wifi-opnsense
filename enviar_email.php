<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $district = $_POST["district"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // Dados do destinatário
  $to = "ti@newertech.com.br";
  $subject = "Novo formulário enviado";

  // Conteúdo do email
  $message = "Nome: " . $name . "\n";
  $message .= "Bairro: " . $district . "\n";
  $message .= "Email: " . $email . "\n";
  $message .= "Telefone: " . $phone . "\n";

  // Enviar o email
  if (mail($to, $subject, $message)) {
    echo "Email enviado com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar o email.";
  }
}
?>

