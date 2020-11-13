<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\umaIdeiaSuperfula\css\header.css">
    <link rel="stylesheet" href="..\umaIdeiaSuperfula\css\index2.css">
    <link rel="shortcut icon" href="..\umaIdeiaSuperfula\css\img\logoCopia.png" />
    <!--footer------------------------------------------------------------------->
    <link rel="stylesheet" href="..\umaIdeiaSuperfula\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--footer------------------------------------------------------------------->
    <title>Uma Idéia Supérfula</title>
</head>
<body>
    <header>
        <img src="..\umaIdeiaSuperfula\css\img\logoCopia.png" alt="" class="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">Menu</a></li>
                <li><a href="..\umaIdeiaSuperfula\serviços\servicos.php">Serviços</a></li>
                <li><a href="..\umaIdeiaSuperfula\sobre\sobre.php">Sobre</a></li>
            </ul>
        </nav>
        <a class="cta" href="..\umaIdeiaSuperfula\contato\contato.php"><button>Entre em contato</button></a>
    </header>
<!--Scrollbar-->
    <style>
      /*::-webkit-scrollbar {
      width: 12px;
      margin:10px;
      
      }

      ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(199,0,11, 0.8); 
      -webkit-border-radius: 10px;
      border-radius: 10px;
      padding: 10px
      }

      ::-webkit-scrollbar-thumb {
      -webkit-border-radius: 10px;
      border-radius: 10px;
      background: rgba(255,0,0,0.8); 
      -webkit-box-shadow: inset 0 0 6px rgba(199,0,11, 0.8); 
      }
      ::-webkit-scrollbar-thumb:window-inactive {
      background: rgba(199,0,11, 0.8);
      } */
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
      <img src="..\umaIdeiaSuperfula\css\img\predio.jpg" style="width: 100%; height:300px;" alt="" >
      <br><br>
      <div style=" border:1px solid black; width:100%; height:230px;">
      <div style=" width:80%; height:50%">
          <h1 style="font-size: 2rem; margin-top:2%; margin-left:3%;">POR QUE TERCEIRIZAR A LIMPEZA DO ESTABELECIMENTO?</h1>
          <p style="font-size: 1rem; margin-top:2%; margin-left:3%;">A qualidade do asseio de um ambiente pode impactar diretamente na imagem da empresa, além de influenciar
          também no bem-estar de seus frequentadores, podendo afetar a rotina de trabalho.</p>
          
          <p style="font-size: 1rem; margin-top:2%; margin-left:3%;">Nesse sentido, no momento de contratar uma empresa terceirizada de limpeza e conservação, é importante que se tenha em vista que a prestadora do serviço deve fornecer 
          uma equipe apta para traçar um cronograma estratégico da área de limpeza do estabelecimento, que considere a natureza, tamanho e fluxo de pessoas. Entender as necessidades 
          específicas dos clientes e selecionar profissionais aptos para realizarem a limpeza e conservação de ambientes são pontos chave para a eficiência do serviço.</p>
      </div>
      </div>
<!-- FOOTER------------------------------------------------------>
    <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="..\umaIdeiaSuperfula\css\img\logoCopia.png" alt="" class="logo">
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">Created by S&C © Copyright.</p>
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