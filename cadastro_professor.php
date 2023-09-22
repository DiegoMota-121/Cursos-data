<?php
  session_start();
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro - inicio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Cadastro professor
            </div>
            <div class="card-body">
              <form action="valida_cadastro_professor.php" method="post">

                <div class="form-group">
                  <label>Nome</label>
                  <input name="nome" type="name" class="form-control" placeholder="Nome" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" placeholder="E-mail" id="form-email" required>

                  <?php

                  if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro3' ) { ?>
                  <div class="exception">
                      <p>Email já está em uso</p>
                  </div>

                  <script>
                      document.getElementById('form-email').className = 'form-control-error'
                  </script>


                  <?php } ?>

                </div>


                <div class="form-group">
                  <label>Senha</label>
                  <input name="senha" type="password" class="form-control" placeholder="Senha" id="form-senha" required>

                <?php

                if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'error1' ) { ?>
                <div class="exception">
                    <p>Senha não confere</p>
                </div>

                <script>
                    document.getElementById('form-senha').className = 'form-control-error'
                </script>


                <?php } ?>

                <?php

                if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'error2' ) { ?>
                <div class="exception">
                    <p>Senha precisa ter no mínimo 8 caracteres</p>
                </div>

                <script>
                    document.getElementById('form-senha').className = 'form-control-error'
                </script>


                <?php } ?>

                </div>



                <div class="form-group" >
                  <label>Confirmar senha</label>
                  <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirmar Senha" id="form-confirmar-senha" required >

                  <?php

                  if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'error1' ) { ?>

                  <div class="exception">
                      <p>Senha não confere</p>
                  </div>

                  <script>
                    document.getElementById('form-confirmar-senha').className = 'form-control-error'
                  </script>


                  <?php } ?>

                  <?php

                  if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'error2' ) { ?>
                  <div class="exception">
                    <p>Senha precisa ter no mínimo 8 caracteres</p>
                  </div>

                  <script>
                      document.getElementById('form-senha').className = 'form-control-error'
                  </script>


                  <?php } ?>

                </div>



                <div class="create-account">
                  <p>Já possui uma conta? <a href="login_professor.php">Entrar</a></p>
                </div>

                <button class="btn btn-lg btn-info btn-block" type="submit" onclick="">Criar conta</button>
              </form>
            </div>
          </div>
        </div> 
    </div>
  </body>
</html>