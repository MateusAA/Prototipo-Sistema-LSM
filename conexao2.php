<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pp.png"/>
        <title>Teste</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--folhas de estilo em bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /* Estilize a barra de navegação superior */
          col {
                    overflow: hidden;
                    background-color: rgb(63, 58, 58);
                  }

                  /* Estilize os links do topnav */
                  .col a {
                    float: left;
                    display: block;
                    color: #f2f2f2;
                    text-align: center;
                    padding: 5px 20px;
                    text-decoration: none;
                  }

                  /* Alterar cor ao passar o mouse */
                  .col a:hover {
                    background-color: rgb(25, 24, 24);
                    color: yellowgreen;
                  }

                  /* Em telas com largura de 600px ou menos, faça os links do menu empilharem um sobre o outro, em vez de próximos um do outror */
                  @media screen and (max-width: 600px) {
                    .col a {
                  float: none;
                  width: 100%;
                }
              }
        </style>
     </head>
     <body>
        <div class="container-fluid p-1 " style="background-color:MediumSeaGreen;text-align: center;">
            <h1>Tecnologia Web</h1>
        
          </div>
          <div class="row">
            <div class="col p-1 bg-dark  text-white"><a href="Index2.php" class="fa fa-home" style="font-size: 26px;" title='Home'></a></div>
            <div class="col p-1 bg-dark text-white"><a href="Index.php">Cadastro</a></div>
            <div class="col p-1 bg-dark  text-white"><a href="Index3.php">Login</a></div>
            <div class="col p-1 bg-dark  text-white"><a href="#"></a></div>
            <div class="col p-1 bg-dark text-white"><a href="#"></a></div>
            <div class="col p-1 bg-dark  text-white"><a href="#"></a></div>
            
          </div>
          <div class="container mt-5">
            <div class="row">
             
              <div class="col-sm-4">

          
               <?php
                
                          $loginUsuario = $_REQUEST["e_mail"] ;
                          $senhaUsuario = $_REQUEST["Senha"] ;
                
                          $endereco = "localhost" ;
                          $banco    = "conexao" ;
                          $usuario  = "root" ;
                          $senha    = "1234" ;

                          $conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  ) ;
                        
                          $sql = "SELECT * FROM usuarios WHERE E_mail= :email and Senha= :senha" ;
                          $stm = $conexao->prepare($sql) ;
                          $stm->bindValue(':email'  , $loginUsuario  ) ;
                          $stm->bindValue(':senha'  , $senhaUsuario  ) ;

                          $stm->execute();    
                          
                          
                          if($dados = $stm->fetch(PDO::FETCH_ASSOC) ){

                            /*$user = $dados['Nome'];
                            $senha = $dados['Senha'];


                              // A senha está correta, então inicie uma nova sessão
                              session_start();
                              
                              // Armazene dados em variáveis de sessão
                              
                              $_SESSION['usuario'] = $user;
                              $_SESSION['senha'] = $senha;                            
                              
                              // Redirecionar o usuário para a página de boas-vindas
                              header("location: ti.php");*/

                              if ($dados["Setor"] == "Adm") {
                                  header('Location: admin.html');
                              }
                              if ($dados["Setor"] == "Ti") {
                                  header('Location: ti.php');
                                 
                              }
                              if ($dados["Setor"] == "Aluno") {
                                  header('Location: rh.html');
                              }
                              if ($dados["Setor"] == "Profes") {
                                header('Location: professor.html');
                            }
                           
                          } else {
                             header("location: Index3.php");
                          }

                          echo "<br>";
                          echo "<a href='Index3.php'>Voltar</a>";

                      ?>
              </div>
              <div class="col-sm-2">
                                
                                </div>
                                <div class="col-sm-2">
                                
                                </div>
                                <div class="col-sm-2">
                                <img src="https://cdn-6155dff1c1ac189188d9506c.closte.com/wp-content/uploads/2022/07/Inspetor-De-Alunos-De-Escola-Publica.png" heidth="400px" width="400px">
              </div>
            </div>
          </div>
          
      
    
    </body>
</html>