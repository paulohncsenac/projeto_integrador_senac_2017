<?php 

include 'banco.php';
 $pdo = Banco::conectar();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- CSS Select2  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />


  </head>
  <body>
    
          <div class="container">

              <br><br><br>
              <form method="post" action="cadastrar.php">
                <?php 
                                   
                                    if(!empty($_POST)) {
                        
            
                                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $sql = "INSERT INTO elementos (nome, numero, label, id_tipo) VALUES(?,?,?,?)";
                                        $q = $pdo->prepare($sql);
                                        $q->execute(array( $_POST['nome'], $_POST['numero'], $_POST['label'], $_POST['id_tipo']));
                        
                            
                                      Banco::desconectar();
                                      
                                      session_start();
                                      $_SESSION['sucesso'] = 1;

                                      header('Location: http://localhost/projeto_integrador_senac_2017/atomichub/atomic_hub/sucesso.php');
                                      
                                      exit;
                        
                                    }

                ?>

                <div class="form-group">
                  <label class="col-form-label" for="formGroupExampleInput">Nome do elemento:</label>
                  <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="formGroupExampleInput2">Número:</label>
                  <input type="text" class="form-control" name="numero">
                </div>
                  <div class="form-group">
                  <label class="col-form-label" for="formGroupExampleInput2">Sigla:</label>
                  <input type="text" class="form-control" name="label">
                </div>

                  <div class="form-group">

                        <label for="exampleInputPassword1">Classe do Elemento:</label>
                        <select name="id_tipo" class="container" id="selectpicker">

                            <?php 

                                 $sqlElementos = " SELECT * FROM `tipos_de_elementos` ORDER BY `tipos_de_elementos`.`tipo` ASC";
                                 
                                 foreach($pdo->query($sqlElementos) as $rowElemento)
                                 {

                            ?>
                                <option value="<?php  echo  $rowElemento['id_tipo']; ?>"><?php  echo  ucfirst($rowElemento['tipo']); ?></option>
                                <?php 
          
                                 }

                                ?>

                    </select>

                  </div>

                 <div class="form-group"> 
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      </form>
                  

          </div>   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Scripts Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script>
      
      $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
      });
      
  </script>

  <script>
      
      $(document).ready(function() {
          $('#selectpicker').select2();
      });
      
  </script>
<!-- Fim dos Scripts do Select2 -->


  </body>
</html>