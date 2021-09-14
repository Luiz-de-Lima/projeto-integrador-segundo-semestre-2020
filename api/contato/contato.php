<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\header.css">
    <link rel="stylesheet" href="..\css\contato.css">
    <link rel="shortcut icon" href="..\css\img\logoCopia.png" />
    <!--footer------------------------------------------------------------------->
    <link rel="stylesheet" href="..\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--footer------------------------------------------------------------------->
    <title>Contato</title>
</head>

<body>
    <header>
        <img src="..\css\img\logoCopia.png" alt="" class="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="..\index.php">Menu</a></li>
                <li><a href="..\serviços\servicos.php">Serviços</a></li>
                <li><a href="..\sobre\sobre.php">Sobre</a></li>
            </ul>
        </nav>
        <a class="cta" href="..\contato\contato.php"><button>Entre em contato</button></a>
    </header>
  
  
  <style>
      ::-webkit-scrollbar-track {
        background-color: transparent;
      }
      ::-webkit-scrollbar {
        width: 3px !important;
        background-color: transparent;
      }
      ::-webkit-scrollbar-thumb {
        background-color: transparent;
      }

  </style>

<!--Abaixo do header-->
<div id="container">
  <br><br><br>
      <h1 style="font-size:25px ;">Sinta se a vontade em nos enviar um email com seu pedido.</h1>
      <br><br><br>
      <div id="contato">
        
                
                <form action="email.php" method="post">
                    <div class="formLabel">
                        <label  for="nome">Insira seu Nome:</label>
                    </div>
                    <div class="formInput">
                        <input type="text" name="nome" id="nome">
                    </div>
                        
                    <div class="formLabel">
                        <label for="Email">Insira seu email:</label>
                    </div>
                    <div class="formInput">
                        <input type="email" name="email" id="email">
                    </div>
                        
                    
                    <div class="formLabel">
                        <label for="Telefone">Insira seu telefone:</label>
                    </div>
                        <div class="formInput">
                        <input type="tel" name="telefone" id="telefone">
                    </div>
                    <div class="formLabel">
                        <label for="assunto">Assunto:</label>
                    </div>
                    <div class="formInput">
                        <textarea name="assunto" id="assunto" cols="30" rows="10" style="margin-left: 6px;">
                        </textarea>
                    </div>
                    
                    <div class="botao">
                    <button  type="submit" style="width:200px;margin-left:1%;">Enviar</button>
                    </div>
        
                    
                </form>
      </div>
</div>




<!-- FOOTER------------------------------------------------------>
<footer>
  <div class="footer-container">
    <div class="left-col">
      <img src="..\css\img\logoCopia.png" alt="" class="logo">
      <div class="social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <p class="rights-text">© Copyright.</p>
    </div>

    <div class="right-col">
      <h1>Nossas Novidades</h1>
      <div class="border"></div><br>
      <p>Digite seu email para receber nossas novidades.</p><br>
      <form action="" class="newsletter-form">
        <input type="text" class="txtb" placeholder="Digite Seu Email">
        <input type="submit" class="btn" value="submit">
      </form>
    </div>
  </div>
</footer>

</body>
</html>