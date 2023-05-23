<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pp.png"/>
        <title>E.T.A</title>
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
        <div class="container-fluid p-1 " style="background-color: MediumSeaGreen;text-align: center;">
            <h1>Tecnologia Web</h1>
        
          </div>
          <div class="row">
          <div class="col p-1 bg-dark  text-white"><a href="Index3.php" class="fa fa-home" style="font-size: 26px;" title='Home'></a></div>
          <div class="col p-1 bg-dark  text-white"><a href="ti.php">Inicio</a></div>
            <div class="col p-1 bg-dark text-white"><a href="Index4.php">Incluir User</a></div>
            <div class="col p-1 bg-dark  text-white"><a href="consultar2.php">Usuarios</a></div>
            <div class="col p-1 bg-dark  text-white"><a href="#"></a></div>
            <div class="col p-1 bg-dark text-white"><a href="#"></a></div>
            <div class="col p-1 bg-dark  text-white"><a href="#"></a></div>
            
          </div>
          <div class="container mt-5">
            <div class="row">
             
              <div class="col-sm-8">
              <?php

    
                        $endereco = "localhost" ;
                        $banco    = "conexao" ;
                        $usuario  = "root" ;
                        $senha    = "1234" ;

                        $conexao = new PDO( "mysql:host=$endereco;dbname=$banco" , $usuario  , $senha  ) ;

                        $sql = "SELECT * FROM usuarios" ;

                        $stm = $conexao->prepare($sql) ;

                        $resultado = $conexao->query("SELECT * FROM usuarios");

                        echo "<table border=2 class='table'>";

                        echo "<tr class='table-success'>";
                              echo "<td>" ;
                              echo "Nome";
                          echo "</td>" ;
                          echo "<td>" ;
                              echo "E-mail";
                          echo "</td>" ;
                          echo "<td>" ;
                              echo "Setor";
                          echo "</td>" ;
                          echo "<td>" ;
                              echo "Codigo";
                          echo "</td>" ;
                          echo "<td>" ;
                          echo "Nota 1";
                          echo "</td>" ;
                          echo "<td>" ;
                          echo "Nota 2";
                          echo "</td>" ;
                          echo "<td>" ;
                              echo "Média Final";
                          echo "</td>" ;
                          echo "<td>" ;
                              echo "";
                          echo "</td>" ;
                          echo "<td>" ;
                          echo "";
                      echo "</td>" ;
                          
                          
                          echo "</tr>";
                            //while( $linha=mysqli_fetch_assoc($res)){ //Associamos os valores da tabela sql com a variavel $linha
                            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                              
                                echo "<tr>" ;
                           
                                    echo "<td>" ;
                                        echo $linha["Nome"];//Aqui associamos que a varivel $linha com a coluna da tabela sql
                                    echo "</td>" ;
                                    echo "<td>" ;
                                        echo $linha["E_mail"];
                                    echo "</td>" ;
                                    echo "<td>" ;
                                        echo $linha["Setor"];
                                    echo "</td>" ;
                                    echo "<td>" ;
                                    echo $linha["codigo"];
                                    echo "</td>" ;
                                    echo "<td>" ;
                                    echo $linha["Nota1"];
                                    echo "</td>" ;
                                    echo "<td>" ;
                                    echo $linha["Nota2"];
                                    echo "</td>" ;
                                    $mf = $linha["Nota1"]+$linha["Nota2"];
                                    echo "<td>" ;
                                        echo $mf/2;
                                    echo "</td>" ;
                            
                                    echo "<td>" ; //associamos o codigo com as funções Alterar e Excluir e apartir disso as de acordo com o codigo
                                                  //as demais informções serão alteradas ou excluidas --> veremos a seguir
                                        echo "<a href='digita_alteracao2.php?codigo=".$linha["codigo"]."'>Alterar</a>";
                                    echo "</td>" ;
                                    echo "<td>" ;
                                        echo "<a href='deletar2.php?codigo= ".$linha["codigo"]."'>Excluir</a>";
                                    echo "</td>" ;
                                echo "</tr>" ;    
                            }
                        echo "</table>" ;
            ?>

              </div>

              <div class="col-sm-2">
                                <img src="https://cdn-6155dff1c1ac189188d9506c.closte.com/wp-content/uploads/2022/07/Inspetor-De-Alunos-De-Escola-Publica.png" heidth="400px" width="400px">
              </div>
            </div>
          </div>
          
        
      
    </body>
</html>