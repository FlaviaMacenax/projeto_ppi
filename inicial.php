<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importação da fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Josefin+Sans:wght@300;400;500;700&family=Prata&display=swap" rel="stylesheet">
    <!--Importação dos ícones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Ícone da barra do navegador-->
    <link rel="icon" type="image/x-icon" href="imagens/flexicon.png">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="isiarah.css" />
    <link rel="stylesheet" type="text/css" href="slide.css" />
    <title>Isiarah Jewelry</title>
</head>
<body>
     <!--Cabeçalho-->
     <header class="container">
            <div class="logo">
               <img src="imagens/logo.png" width="200" height="auto" alt="logo da Isiarah">
            </div> 
     </header>

    <!--Carrossel-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="carrossel.css" />

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./js/bootstrap.js"> </script>
  <script src="carrossel.js"></script>
  
    <div id="carousel" class="carousel slide" data-ride="carousel">

<!--   Bullets do carrossel, se aumentar uma imagem, aumente um li e acrescento o próximo número -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/slide1.png">
    </div>

    <div class="carousel-item">
      <img src="imagens/slide2.png">
    </div>

    <div class="carousel-item">
      <img src="imagens/slide3.png">
    </div>
  

  <div class="carousel-item">
      <img src="imagens/slide4.png">
    </div>

    <div class="carousel-item">
          <img src="imagens/slide5.png">
        </div>

  </div> <!-- Fecha elementos dentro do carrossel -->
  
<!--   Controladores | Botões -->
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"> Previous </span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"> Next </span>
  </a> 
</div> <!-- Fim do carrossel -->

</body>