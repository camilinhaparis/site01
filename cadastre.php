<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/form-validation.css" >  
    <link href="css/bootstrap.min.css" rel="stylesheet">    
  </head>   
   
  <body class="bg-light">

    <div class="container">

        <!-----------seção principal do site------>
      <section id="form"> 
              <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/Ajudai.png" >
                <h2>Cadastro do Cliente</h2>      
              </div>

          <div class="row g-5 ">  
            
            
                  <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                    <div >
                      <label>Nome:* </label>
                      <input type="text" name="nome" placeholder="Digite o seu nome completo" class="form-control" required><br>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Atividade:*</label>
                      <input type="text" name="atividade" placeholder="Digite sua atividade" class="form-control" required><br>
                    </div>
                  
                    <div class="col-12">
                        <label class="form-label">E-mail:*</label>
                        <input type="text" name="email" placeholder="Digite o e-mail" class="form-control" required><br>
                        <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <label class="form-label">Senha:*</label>
                    <input type="password" name="senha" placeholder="Digite uma senha" class="form-control" required><br>

                    <label class="form-label">Dica:*</label>
                    <input type="text" name="dica" placeholder="Digite uma dica" class="form-control" required><br>

                    <label class="form-label">Telefone:*</label>
                    <input type="text" name="telefone" placeholder="Digite o seu telefone" class="form-control" required><br>

                    <label class="form-label">Endereco:*</label>
                    <input type="text" name="endereco" placeholder="Digite o seu endereco" class="form-control" required><br>      

                    <label class="form-label">Imagem da capa:*</label>
                    <input type="file" name="capa"  class="entradas_img" required><br>
                    <br>

                    <label class="form-label">Imagem de perfil:*</label>
                    <input type="file" name="perfil"  class="entradas_img" required><br>
                    
                    <hr class="my-4">

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="same-address">
                      <label class="form-check-label" for="same-address">Quero receber recomendações e dicas de aprendizado.</label>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="save-info">
                      <label class="form-check-label" for="save-info">Ao se inscrever, você concorda com nossos Termos de Uso e com a Política de Privacidade.</label>
                    </div>
                    <br>                    

                    <label><input type="submit" value="CADASTRAR" class="w-100 btn btn-primary btn-lg"></label>

                    <hr class="my-4">
                    <div class="text-center">
                      <label >Já tem uma conta?<a href="perfil.php"><b> Faça Login</b></a><br></lael>
                    </div>
                </form>  
                
              
          </div>  
      </section>      
      <footer class="my-5  text-muted text-center text-small">
        <p class="mb-1">&copy; 2021–2022 Ajudaí</p>    
      </footer>

    </div>
  </body>
</html>
