<?php
include("conectabanco.php");

if($_POST){
  ExecutaSQL(" INSERT INTO cad_fornecedor(nome_fornecedor, email_fornecedor, cnpj_fornecedor, endereco_fornecedor, telefone_fornecedor, site_fornecedor)
                VALUES ('".$_POST["nome"]."', '".$_POST["email"]."', '".$_POST["cnpj"]."', '".$_POST["endereco"]."', '".$_POST["telefone"]."' , '".$_POST["site"]."')");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro de Fornecedor</title>
  </head>
  <body>
    <div class="bgcolor">
      <div class="divmenu">
        <?php include("menu.php")?>
      </div>
      <div class="container">
        <div>
          <form method="post">
            <h2 class="titulo">Cadastro de fornecedor</h2>
            <label>Nome</label><br>
            <input name="nome" type="text" class="form-control" placeholder="Digite o Nome completo" /><br>
            <label>E-mail</label><br>
            <input name="email" type="email" class="form-control" placeholder="Digite o E-mail" /><br>
            <label>CNPJ</label><br>
            <input name="cnpj" type="text" class="form-control" placeholder="Digite o CNPJ" /><br>
            <label>Endereço</label><br>
            <input name="endereco" type="text" class="form-control" placeholder="Digite o Endereço" /><br>
            <label>Telefone</label><br>
            <input name="telefone" type="text" class="form-control" placeholder="Digite o Telefone" /><br>
            <label>Site</label><br>
            <input name="site" type="text" class="form-control" placeholder="Digite o Site" /><br>
            <input type="submit" class="btn">
          </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
