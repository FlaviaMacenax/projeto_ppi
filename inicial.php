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
               <img src="imagens/logo.png" width="150" height="auto" alt="logo da Isiarah">
            </div> 
        </header>

    <!--Página inicial-->
    <section class="slider">
        <div class="slider-content">

            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">
            <input type="radio" name="btn-radio" id="radio4">
            <input type="radio" name="btn-radio" id="radio5">
            <input type="radio" name="btn-radio" id="radio6">

            <div class="slide-box primeiro">
                <img src="imagens/slide1.png" width="888" height="554" alt="imagem com brincos">
            </div>
            <div class="slide-box">
                <img src="imagens/slide2.png" width="888" height="554" alt="imagem com aneis">
            </div>
            <div class="slide-box">
                <img src="imagens/slide3.png" width="888" height="554" alt="imagem com brincos">
            </div>
            <div class="slide-box">
                <img src="imagens/slide4.png" width="888" height="554" alt="imagem com colares">
            </div>
            <div class="slide-box">
                <img src="imagens/slide5.png" width="888" height="554" alt="imagem com brincos">
            </div>
            <div class="slide-box">
                <img src="imagens/slide6.png" width="888" height="554" alt="imagem com brincos">
            </div>

            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
            </div>

            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
                <label for="radio6" class="manual-btn"></label>
            </div>
        </div>
    </section>
</body>