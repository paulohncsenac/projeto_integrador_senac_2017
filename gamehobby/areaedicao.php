<?php 

include 'banco.php';
 $pdo = Banco::conectar();

 session_start();
 error_reporting(0);
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];


 if($nome == null && $id == null){

   header('Location: telaLogin.html');
}
  
?>
<!DOCTYPE html>
<html lang='en' class=''>
    <head>
        <meta charset='UTF-8'>
        <meta name="robots" content="noindex">
        <link rel="canonical" href="https://codepen.io/yavuzselim/pen/LNYrBd" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">

        <style class="cp-pen-styles">body {
                background-color: #bdc3c7;
            }

            .table-fixed {
                width: 100%;
                background-color: #f3f3f3;
            }
            .table-fixed tbody {
                height: 400px;
                overflow-y: auto;
                width: 100%;
            }
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td {
                float: left;
            }
            .table-fixed thead tr th {
                float: left;
                background-color: white;
                border-color: #6600cc;
            }
            
            .areaedi{
                
          font-size: 50px;
          text-align: center;
          color: #6600cc;
              
            }
            
        </style>
    </head>
    <h2><a href="logout.php">Sair</a></h2>
    <body>
        
        <br>
        <br>
        
        <div class="areaedi">Área Edição</div>
        
        <br>
        <br>
        
        <div class="container">
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th class="col-xs-3">First Name</th>
                        <th class="col-xs-3">Last Name</th>
                        <th class="col-xs-6">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>

                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                    <tr>
                        <td class="col-xs-3">John</td>
                        <td class="col-xs-3">Doe</td>
                        <td class="col-xs-6">johndoe@email.com</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>
<?php  Banco::desconectar(); ?>