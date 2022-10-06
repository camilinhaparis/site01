<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/form-validation.css" >  
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    <script src="js/main.js" type="module" defer></script>
  </head>   
   
  <body class="bg-light">

    <!----ACESSIBILIDADE----->
    <section >  
      <?php include "body/acessibilidade.php"; ?>
    </section>

    <div class="container">

        <!-----------seção principal do site------>
      <section id="form"> 
              <div class="py-5 text-center">
              <a href="index.php" class="classe1"><img src="img/Ajudai.png" /></a>
                <h2>Cadastro do Cliente</h2>   
                <p class="lead">Em observância à Lei nº. 13.709/18 – Lei Geral de Proteção de Dados Pessoais e
      demais normativas aplicáveis sobre proteção de Dados Pessoais, manifesto-me de
      forma informada, livre, expressa e consciente, no sentido de autorizar o web site
      Ajudaí a realizar o tratamento de meus Dados Pessoais para as finalidades e de
      acordo com as condições aqui estabelecidas</p>   
              </div>

          <div class="row g-5 ">             
            
                  <form action="cadastrar.php" method="post" enctype="multipart/form-data">
   
             <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label">Nome:* </label>
              <input type="text" name="nome" placeholder="Digite o seu nome completo" class="form-control" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label class="form-label">Sobrenome:* </label>
              <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome" class="form-control" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
                                
                  
                    <div class="col-sm-6">
                        <label class="form-label">E-mail:*</label>
                        <input type="text" name="email" placeholder="Digite o e-mail" class="form-control" required>
                        <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Senha:*</label>
                    <input type="password" name="senha" placeholder="Digite uma senha" class="form-control" required>
                    </div>

                    <div class="col-12">
                    <label class="form-label">Dica:*</label>
                    <input type="text" name="dica" placeholder="Digite uma dica" class="form-control" required>
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label">Atividade:*</label>
                      <input type="text" name="atividade" placeholder="Digite sua atividade" class="form-control" required>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">Telefone:*</label>
                    <input type="text" name="telefone" placeholder="Digite o seu telefone" class="form-control" required>
                    </div>
<!------------------------------------------------------------------->
                    <div class="inputbox col-sm-3">                      
                      <label for="cep" class="form-label">CEP</label>
                      <input type="text" nome="cep" class="form-control" id="cep" required>
                    </div>

                    <div class="inputbox col-sm-3">
                      <label for="estado"class="form-label">Estado</label>
                      <input type="text" nome="estado" class="form-control" id="estado" required>                      
                    </div> 

                    <div class="inputbox col-sm-6">
                      <label for="cidade" class="form-label">Cidade</label>
                      <input type="text" nome="cidade" class="form-control"  id="cidade" required>                      
                    </div> 

                    <div class="inputbox col-sm-7">
                      <label for="endereco" class="form-label">Endereco</label>
                      <input type="text" name="endereco" class="form-control" id="endereco" required>                      
                    </div> 
                    
                    <div class="inputbox col-sm-1">
                      <label for="numero" class="form-label">Número</label>
                      <input type="text" name="numero" class="form-control" id="numero" required>                      
                    </div> 

                    <div class="inputbox col-sm-4">
                      <label for="bairro" class="form-label">Bairro</label>
                      <input type="text" name="bairro" class="form-control" id="bairro" required>                      
                    </div> 


                   
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

                    <div class="d-grid d-md-flex first">
                    <label><input type="submit" value="Cadastrar" class="w-100 btn btn-primary btn-lg"></label>
                    </div>                 

                    
                    <hr class="my-4">
                    <div class="text-center">
                      <label >Já tem uma conta?<a href="perfil.php"><b> Faça Login</b></a><br></lael>
                    </div>
                </form>                  
          </div>  
      </section>      
    </div>
    

    <section id="rodape">  
      <?php include("head/rodape_index.php"); ?>
    </section>
  </body>
  
</html>
