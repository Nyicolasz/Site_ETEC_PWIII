<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <title>Document</title>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            background-color: aqua;
        }

        #logo {
            padding-top: 8px;
            margin-right: 12cm;
            width: 60px;
            height: 60px;
        }

        #NavBar_Botoes {

            font-size: 18px;
        }

        a {
            margin: 2px;
        }

        #Visao_Geral {
            filter: brightness(50%);
            position: absolute;
            width: 100%;
            height: 80%;
            left: 0;

        }

        #Textos_Imagem {
            margin-left: 3cm;
        }

        #Texto1_imagem {
            position: relative;
            margin-top: 4cm;
            width: 170px;
            text-align: left;
        }

        #Texto2_imagem {
            position: relative;
            margin-top: 35px;
            text-align: left;
            width: 170px;
        }

        .h6 {
            color: #9a9696;
            font-size: 18px;

            width: 155px;
        }

        .h2 {
            color: white;
            width: 700px;
        }

        .Botao_imagem {

            width: 8cm;

            .btn {
                position: relative;
                margin-top: 1cm;
                height: 45px;
                width: 8cm;
                border-radius: 40px;
                font-size: 18px;
                filter: brightness(87%);

            }
        }

        #Div_Pesquisa {
            margin-top: 4cm;
            height: 4cm;
            width: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        #Barra_Pesquisa {
            width: 40%;
            height: 40%;
            border-radius: 40px;
            border-color: #c13838;
            border-width: 2px;
            font-size: 15pt;
        }

        #Conteudo1 {
            height: 18cm;
            background-color: white;
        }

        #Titulo {
            padding-top: 4%;
            text-align: center;
            width: 34cm;

            h2 {
                font-size: 25pt;
            }
        }

        #carouselExampleDark {
            margin-top: 3cm;
            margin-left: 27%;
            width: 70%;
            color: #c13838;
        }

        #Imagem1carr {
            height: 10cm;
            border-radius: 40px;
            color: #c13838;

        }

        #Texto1 {
            margin-top: 5cm;
            margin-left: 1cm;
        }


        p {
            text-align: left;
            font-size: 18px;
            width: 15cm;

        }

        .Botao_Conteudo1 {

            .btn {
                margin-top: 2cm;
                height: 45px;
                width: 10cm;
                border-radius: 40px;
                font-size: 18px;

            }
        }

        #Conteudo2 {
            height: 30cm;
        }

        #Cartoes_Cursos {
            margin-top: 2cm;
            width: 30cm;
        }

        #Cartao_DS {
            font-size: 12pt;
            transition: all 0.5s;
            cursor: pointer;
        }

        #Cartao_DS:hover {
            -webkit-filter: drop-shadow(15px 10px 5px rgba(0, 0, 0, .5));
            filter: drop-shadow(15px 10px 5px rgba(0, 0, 0, .5));
        }

        #Etiqueta {
            background-color: #c13838;
            height: 55px;
            width: 55px;
            margin-top: 1cm;
            margin-left: 1cm;
        }

        #traco {

            background: #c13838;
            width: 100%;
            height: 2px;
            margin-top: 20px;

        }

        #img_Cartao {
            height: 5cm;
        }

        #Rodape {
            background-color: white;
            height: 8cm;

        }

        #logo_final {
            padding-top: 8px;
            width: 100px;
            height: 70px;
        }

        #redes_sociais {
            padding-top: 8px;
            width: 30px;
            height: 20px;
        }

        @media screen and (max-width: 1370px) {
            #logo {
                margin-right: 5cm;
            }
        }

        @media screen and (max-width: 905px) {

            #Visao_Geral {
                height: 60%;
            }

            #Texto1_imagem {
                margin-top: 2cm;

                .h6 {
                    font-size: 12pt;
                }

            }

            #Texto2_imagem {

                .h2 {
                    font-size: 18pt;
                    width: 10cm;
                }
            }

            .Botao_imagem {

                .btn {
                    height: 1cm;
                    width: 8cm;
                    font-size: 12pt;

                }
            }

            #Div_Pesquisa {
                margin-top: 2cm;
            }

            #Barra_Pesquisa {
                margin-top: 10px;
                height: 38%;
            }

        }

        @media screen and (max-width: 1199px) {



            p {
                width: 12cm;

            }
        }

        @media screen and (max-width: 991.20px) {

            #Titulo {
                h2 {
                    font-size: 22pt;
                }


            }

            p {
                width: 8cm;
                font-size: 12pt;

            }


            #carouselExampleDark {
                margin-top: 4cm;
            }

            #Imagem1carr {
                height: 7cm;

            }

            .Botao_Conteudo1 {

                .btn {
                    margin-top: 1cm;
                    width: 7cm;
                    font-size: 12px;

                }

            }

            #Cartao_DS {
                width: 13rem;
                height: 10cm;

                p {
                    font-size: 10pt;
                }
            }




            #img_Cartao {
                height: 4cm;
            }
        }

        @media screen and (max-width: 767.99px) {

            #Texto1 {
                margin-left: 2px;
            }

            p {
                width: 6cm;
                font-size: 10pt;

            }



            #Cartao_DS {
                width: 9rem;
                height: 6cm;

                p {
                    display: none;
                }

                h5 {
                    font-size: 10pt;
                }

                #traco {
                    display: none;
                }

                .btn {
                    display: none;
                }


            }




            #img_Cartao {
                height: 4cm;
            }


        }

        @media screen and (max-width: 705px) {

            #Figure_Visao_Geral {
                height: 8cm;
            }

            #Visao_Geral {
                height: 10cm;
            }

            #Div_Pesquisa {
                height: 3cm;
            }




        }

        @media screen and (max-width: 675.20px) {

            #Cartoes_Cursos {
                .col-sm-4 {
                    margin-bottom: 20px;
                    width: 5cm;
                }
            }

            #Coluna_Cartoes {
                width: 5cm;
            }

            #Cartoes_Cursos {
                width: 5cm;
            }

            #Titulo {
                width: 9cm;

                h2 {
                    font-size: 16pt;

                }


            }

            #Conteudo2 {

                height: 47cm;
            }

            #Barra_Pesquisa {
                font-size: 11pt
            }
        }

        @media screen and (max-width: 513.99px) {

            #Textos_Imagem {
                margin-left: 1cm;
            }

            #Conteudo1 {
                height: 20cm;
            }

            #Linha_Carrosel {
                position: relative;
                justify-content: center;
            }

            #carouselExampleDark {
                position: absolute;
                top: 0;
                left: 0;
                margin-left: 65px;
                margin-top: 5cm;
            }

            #Texto1 {
                margin-top: 1cm;
                width: 10cm;
                margin-bottom: 8cm;

                p {
                    width: 10cm;
                    text-align: start;
                }


            }


        }

        @media screen and (max-width: 483px) {
            #Barra_Pesquisa {
                font-size: 8pt
            }
        }

        @media screen and (max-width: 415.99px) {

            #Textos_Imagem {
                margin-left: 20px;
            }

            #Texto2_imagem {
                .h2 {

                    font-size: 12pt;
                    width: 5cm;
                }
            }

            .Botao_Conteudo1 {
                margin-left: 1.7cm;
            }

            #carouselExampleDark {
                margin-top: 6cm;
            }

            #Titulo {

                h2 {
                    font-size: 12pt;
                }
            }

            #Texto1 {
                margin-top: 1cm;
                margin-bottom: 8cm;
                margin-left: 2cm;
                width: 6cm;

                p {
                    text-align: center;
                    font-size: 12px;
                    width: 6cm;

                }
            }




        }

        @media screen and (max-width: 371.99px) {

            #Conteudo1 {
                height: 13cm;
            }



            .Botao_imagem {
                .btn {
                    width: 4cm;
                    font-size: 8pt;
                    height: 42px;
                }
            }

            .Botao_Conteudo1 {
                margin-left: 50px;

                .btn {
                    width: 4cm;
                    font-size: 8pt;
                }
            }

            #carouselExampleDark {
                margin-top: 1cm;
            }

            #Texto1 {

                p {
                    display: none;
                }
            }

            #Titulo {
                width: 4cm;

                h2 {
                    font-size: 10pt;

                }



            }

            #Textos_Imagem {
                width: 3cm;

                .Botao_imagem {
                    width: 3cm;
                }
            }

            #Barra_Pesquisa {
                font-size: 5pt;
                height: 1cm;
            }




        }
    </style>

    <script>
        function Cartao_DS() {

            window.location = "DS";
        }

        function Cartao_ADM() {

            window.location = "Adm";
        }

        function Cartao_LOG() {

            window.location = "LOG";
        }

        function Cartao_SJ() {

            window.location = "SJ";
        }

        function Cartao_RH() {

            window.location = "RH";
        }

        function Cartao_CONT() {

            window.location = "CONT";
        }
    </script>
</head>

<body>


    <div class="bg-body-tertiary text-center">


        <header>


            <nav class="navbar  nav-underline navbar-expand-lg  container bg-body-tertiary" id="NavBar_Geral">




                <div class="container-fluid" id="NavBar_Botoes">

                    <figure class="figure">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png" id="logo">
                    </figure>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Cursos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="DS">Desenvolvimento de Sistemas</a></li>
                                    <li><a class="dropdown-item" href="CONT">Contabilidade</a></li>
                                    <li><a class="dropdown-item" href="RH">Recursos Humanos</a></li>
                                    <li><a class="dropdown-item" href="LOG">Logística</a></li>
                                    <li><a class="dropdown-item" href="SJ">Serviços Jurídicos</a></li>
                                    <li><a class="dropdown-item" href="Adm">Administração</a></li>


                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Instituição
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Historia">Historia</a></li>
                                    <li><a class="dropdown-item" href="Infraestrutura">Infraestrutura</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Departamentos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="APM">APM- Associação de Pais e Mestres</a></li>
                                    <li><a class="dropdown-item" href="Cordenacao">Cordenação de cursos</a></li>
                                    <li><a class="dropdown-item" href="Direcao">Direção</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Oportunidades">Oportunidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Vestibulinho">Vestibulinho</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>






        </header>


    </div>


    <div>



        <main>
            <div id="Figure_Visao_Geral">

                <figure class="figure">
                    <img src="{{asset('img/desgraca.webp')}}" id="Visao_Geral">

                    <div id="Textos_Imagem">
                        <div id="Texto1_imagem">
                            <p class="h6"><b>HISTORIA</b></p>
                        </div>

                        <div id="Texto2_imagem">
                            <p class="h2"><b>Conheça a historia da Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</b></p>
                        </div>

                        <div class="Botao_imagem">
                        <button type="button" class="btn btn-danger"><a class="nav-link" href="#Conteudo1"><b>CONHEÇA NOSSA HISTORIA</b></a></button>
                        </div>
                    </div>
                </figure>

            </div>



            <div class="bg-body-tertiary " id="Div_Pesquisa">
                <input class="form-control me-2" type="search" placeholder="O que está buscando?" aria-label="Search" id="Barra_Pesquisa">
            </div>

            <div id="Conteudo1">

                <div class="container text-center" id="Titulo">
                    <h2><b>Descubra a historia da </br>ETEC ZONA LESTE</b></h2>
                </div>

                <div class="container text-center">
                    <div class="row" id="Linha_Carrosel">
                        <div class=" col">


                            <div id="Texto1" class="container text-center">

                                <p>Pelo que me lembro, foi faldo que era para ser uma prisão, ai o pessoal da região não aceitou e se tornou a ETEC.</p>

                            </div>

                            <div class="Botao_Conteudo1">
                            <button type="button" class="btn btn-danger"><a class="nav-link" href="Infraestrutura"><b>CONHEÇA NOSSA INFRAESTRUTURA</b></a></button>
                            </div>

                        </div>
                        <div class="col">

                            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>

                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('img/Entrada_etec.webp')}}" class="d-block w-100" alt="..." id="Imagem1carr">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('img/thiago.jpeg')}}" class="d-block w-100" alt="..." id="Imagem1carr">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('img/arthur.jpeg')}}" class="d-block w-100" alt="..." id="Imagem1carr">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>

            <div class="bg-body-tertiary " id="Conteudo2">

                <div class="container text-center" id="Titulo">
                    <h2><b>Nossos Cursos</b></h2>
                </div>

                <div class="container text-center" id="Cartoes_Cursos">
                    <div class="row" id="Coluna_Cartoes">
                        <div class="col-sm-4">

                            <div class="card" id="Cartao_DS" onclick="Cartao_DS()">
                                <img src="img/DS.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style=" width: 100%; text-align: center; margin-top: 10px;">É o profissional que analisa e projeta sistemas.</p>
                                    <a href="Teste" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="DS"></a>
                            </div>



                        </div>
                        <div class="col-sm-4">

                            <div class="card" id="Cartao_DS" onclick="Cartao_CONT()">
                                <img src="img/Cont.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Contabilidade</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style="width: 100%; text-align: center; margin-top: 10px;"> É o profissional que presta serviços nas áreas financeira, econômica, etc.</p>
                                    <a href="Teste" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="CONT"></a>
                            </div>

                        </div>
                        <div class=" col-sm-4">

                            <div class="card" id="Cartao_DS" onclick="Cartao_RH()">
                                <img src="img/RH2.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Recursos Humanos</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style="width: 100%; text-align: center; margin-top: 10px;">É o profissional que organiza todo o capital humano, sendo responsável por ações na empresa.</p>
                                    <a href="Teste" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="RH"></a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="container text-center" id="Cartoes_Cursos">
                    <div class="row">
                        <div class=" col-sm-4">

                            <div class="card" id="Cartao_DS" onclick="Cartao_LOG()">
                                <img src="img/Log2.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Logística</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style="width: 100%; text-align: center; margin-top: 10px;">É o profissional que coordena e movimentar recursos até o destino desejado.</p>
                                    <a href="Teste" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="LOG"></a>
                            </div>



                        </div>
                        <div class="col-sm-4">

                            <div class="card" id="Cartao_DS" onclick="Cartao_SJ()">
                                <img src="img/Juridico.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Serviços Jurídicos</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style="width: 100%; text-align: center; margin-top: 10px;">É o profissional que resolve conflitos na aplicação das leis e na garantia dos direitos.</p>
                                    <a href="Teste" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="SJ"></a>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card" id="Cartao_DS" onclick="Cartao_ADM()">
                                <img src="img/adm.jpg" class="card-img-top" alt="..." id="img_Cartao">
                                <div class="card-body">
                                    <h5 class="card-title">Administração</h5>
                                    <div id="traco"></div>
                                    <p class="card-text" style="width: 100%; text-align: center; margin-top: 10px;">É o profissional que planeja, organiza, lidera e controla diversas áreas de uma impresa.</p>
                                    <a href="Adm" class="btn" style="background-color: #c13838; color: white">Conhecer</a>
                                </div>

                                <a href="Adm"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>


    </div>

    <div>



        <div class=" text-center">


            <footer id="Rodape">


                <div class="container text-center" style="padding-top:50px">
                    <div class="row">
                        <div class="col">

                            <figure class="figure" id="logo_final">
                                <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png" class="figure-img img-fluid rounded" alt="...">
                            </figure>

                        </div>
                        <div class="col" style="margin-top:25px; margin-right:5cm; font-size:15pt">

                            © 2024 Etec Zona Leste. Todos os direitos reservados.<br> Nycolas :(


                        </div>
                    </div>




            </footer>


        </div>



    </div>
</body>

</html>