<?php
  

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Teste AlphaCode</title>
  </head>
  <body>
   
    <main>
      <header>
        <div>
          <img src="./img/logo_alphacode.png" alt="" />
        </div>
        <div>
          <h1>Cadastro de contatos</h1>
        </div>
      </header>
      <section class="container">
      <form action="../back-end/php/create.php" method="post"></form> 
        <div class="container-register margin-top-register row">
          <div class="col-md-6">
            <label for="nome">Nome completo</label>
            <input
              name="nome"
              id="nome"
              type="text"
              placeholder="  Ex.: Letícia Pacheco dos Santos"
            />
            <div class="line-botton"></div>
          </div>
          <div class="col-md-6">
            <label for="data">Data de nascimento</label>
            <input
              name="data"
              id="data"
              type="text"
              placeholder="  Ex.: 03/10/2003"
            />
            <div class="line-botton"></div>
          </div>
        </div>
        <div class="container-register row">
          <div class="col-md-6">
            <label for="email">Email</label>
            <input
              name="email"
              id="email"
              type="text"
              placeholder="  Ex.: leticia@gmail.com"
            />
            <div class="line-botton"></div>
          </div>
          <div class="col-md-6">
            <label for="profession">Profissão</label>
            <input
              name="profession"
              id="profession"
              type="text"
              placeholder="  Ex.: Desenvolvedora Web"
            />
            <div class="line-botton"></div>
          </div>
        </div>
        <div class="container-register row">
          <div class="col-md-6">
            <label for="phone">Telefone para contato</label>
            <input
              name="phone"
              id="phone"
              type="text"
              placeholder="  Ex.: (11) 4033-2019"
            />
            <div class="line-botton"></div>
          </div>
          <div class="col-md-6">
            <label for="celular">Celular para contato</label>
            <input
              name="celular"
              id="celular"
              type="text"
              placeholder="  Ex.: (11) 98493-2039"
            />
            <div class="line-botton"></div>
          </div>
        </div>

        <div class="container-notification row">
          <div class="col-md-6 form-group">
            <input type="checkbox" name="phone" id="ctrl-level-1" />
            <label for="ctrl-level-1">Número de celular possui Whatsapp</label>
          </div>
          <div class="col-md-6 form-group">
            <input type="checkbox" name="email" id="ctrl-level-2" />
            <label for="ctrl-level-2">Enviar notificações por E-mail</label>
          </div>
          <div class="col-md-12 form-group">
            <input type="checkbox" name="notification" id="ctrl-level-2" />
            <label for="ctrl-level-3">Enviar notificações por SMS</label>
          </div>

          <div class="button-register col-md-12">
            <button name="btnSave" class="btn btn-primary" type="button">
              Cadastrar contato
            </button>
          </div>
        </div>
        <div class="line-notification"></div>
      </section>
      <section class="container">
        <table class="table">
          <thead class="header-info">
            <tr>
              <th scope="col-md3">Nome</th>
              <th scope="col-md3">Data de nascimento</th>
              <th scope="col-md3">E-mail</th>
              <th scope="col-md3">Celular para contato</th>
              <th scope="col-md3">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Letícia Pacheco</td>
              <td>03/10/2003</td>
              <td>leticia@gmail.com</td>
              <td>(11) 98493-2039</td>
              <td>Imagens</td>
            </tr>
          </tbody>
        </table>
      </section>
      <footer class="container">
        <div class="footer-info container-register">
          <div class="col-md3">
            <p>Termos | Políticas</p>
          </div>

          <table class="footer-img col-md3">
            <tr>
              <td>© Copyright 2022 | Desenvolvido por</td>
              <td><img src="./img/logo_rodape_alphacode.png" alt="" /></td>
            </tr>
          </table>

          <div class="col-md3">
            <p>©Alphacode IT Solutions 2022</p>
          </div>
        </div>
      </footer>
    </main>
  </form>
    <script type="module" src="./js/alphacode.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
