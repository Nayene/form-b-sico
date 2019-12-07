<?php
    require_once("conexao.php");
    $conexao=conexaoBD();

    if(isset($_GET['enviar'])){
        $txtnome = $_GET['txtnome'];
        $txtemail = $_GET['txtemail'];
        $txtmensagem = $_GET['txtmensagem'];
        $sltassunto = $_GET['sltassunto'];

        $sql = "INSERT INTO dados (nome,email,mensagem,assunto) VALUES ('".$txtnome."','".$txtemail."','".$txtmensagem."','".$sltassunto."')";
         mysqli_query($conexao,$sql);
         //echo ($sql);  
         header('location:index.php');
    }
    
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>site</title>
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
        <header>
            <div class="caixa-header">
                <div class="container-header">
                      <div class="logo">SUPLIMENT</div>
                      <div class="menu">
                          <div class="item-menu">SOBRE</div>
                          <div class="item-menu">GALERIA</div>
                          <div class="item-menu">FALE CONOSCO</div>
                          <div class="item-menu">CONSULTAS</div>
                      </div>      
                </div>
            </div>
        </header>
        <section class="section">
            <div class="caixa-section">
              <div class="caixa-faleconosco" >
                  <form class="formFaleConosco" >
                      <div class="titulo" style="text-align: center;">Fale Conosco</div>
                      <div class="linha">Nome:</div>
                      <div class="linha">
                        <input type="text" name="txtnome" placeholder="Digite seu nome completo" >  
                      </div>
                      <div class="linha">Email:</div>
                      <div class="linha">
                        <input type="text" name="txtemail" placeholder="Digite seu nome completo" >  
                      </div>
                      <div class="linha">Assunto:</div>
                      <div class="linha">
                          <select name="sltassunto">
                              <option>Avaliação</option>
                              <option>Reclamação</option>
                              <option>Sugestão</option>
                          </select>
                      </div>
                      <div class="linha">Mensagem:</div>
                      <div class="linha">
                        <textarea name="txtmensagem" placeholder="Digite sua mensagem" style=" height: 80px;"></textarea> 
                      </div>
                      <div class="linhabtn">
                        <input type="submit" value="Enviar" id="enviar" name="enviar">
                      </div>
                      
                  </form>
                      
              </div>
            </div>
        

        </section>
        <footer>

        </footer>
    </body>
</html>