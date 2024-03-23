<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-witch, initial-scale=1">
        <title>Cadastro de Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: #a9a9a9;
            }
        </style>
    <head>
    <body>
            <center><h1>CADASTRO DE CLIENTES</h1></center>
            <hr/>
            <br/>
            <br/>
            <br/>
            <br/>
            <main>
                <div class="container">
                    <div class="row row-cols-2 row-cols-md-4 text-center">
                        <div class="col-md-12">
                            <div class="card mb-4 rounded-3 shadow-sw">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg>&nbsp;&nbsp;<b>EDIÇÃO DE CLIENTES</h4>  
                                </div>
                                <div class="card-body texzt-start">
                                    <?php
                                        include 'conecta.php';
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM pessoa WHERE id=$id";
                                        $query = $conn->query($sql);
                                        while ($dados = $query->fetch_assoc()) {
                                            $nome = $dados ['nome'];
                                            $celular = $dados['celular'];
                                            $email = $dados['email'];
                                        }
                                    ?>
                                <form action="editarcli.php?id=<?php echo $id; ?>" method="post">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome;?>" required/>
            <br/>
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" value="<?php echo $celular;?>" required/>
            <br/>
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email;?>" required/>
            <br/>
            <button type="submit" class="btn btn-outline-success">CADASTRAR</button>

        </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clientes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="cadcli.php" method="post">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required/>
            <br/>
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" required/>
            <br/>
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" required/>
            <br/>
            <button type="submit" class="btn btn-outline-success">CADASTRAR</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
            <main>
    </body>
</html>