<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://kit.fontawesome.com/b25e671b20.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="./public/img/abra-o-livro.png">
    <title>Rodrigo Lopes - Portfólio</title>
</head>

<body>
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#principal">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#redessociais">Redes sociais</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fim Da navegação -->
    <!-- Header -->
    <header class="page-header">
        <div class="container mt-7">
            <div class="row align-items-center justify-content-center">
                <div class="col-5 header-text">
                    <h2 id="principal">Olá, Me chamo Rodrigo Lopes</h2>
                    <p>Programador FullStack</p>
                    <p class="text-muted italico">"O homem erudito é um descobridor de fatos que já existem - mas o homem sábio é um criador de valores que não existem e que ele faz existir." - Albert einsten</p>
                    <a class="btn btn-outline-success btn-lg" href="https://github.com/RodrigoPaulaLopes">GitHub</a>
                    <a class="btn btn-outline-success btn-lg" href="https://www.linkedin.com/in/rodrigopaulalopes/">linkedin</a>
                </div>
                <div class="col-5">
                    <img class="header-img imagem" src="../public/img/eu.jpg" alt="Rodrigo Lopes Foto">
                </div>
            </div>
        </div>
    </header>
    <!-- fim do header -->
    <!-- Corpo -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center bg-dark text-light mt-3">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h3 id="sobre">Um pouco sobre mim</h3>
                            <p>Olá, meu nome é Rodrigo, sou estudante de sistemas de informação pela Unesa - Universidade Estácio de Sá.
                                Atualmente estou estudando para ser um programador fullstack. Sou apaixonado por programação e sempre procuro estar evoluindo meu conhecimento.
                                Tenho como objetivo e SONHO ajudar as pessoas mais carentes com a tecnologia e educação fazendo assim um mundo melhor para todos. </p>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Minhas habilidades</h5>
                        <div class="col-4">
                            <span class="fab fa-php fa-3x"></span>
                            <p>PHP</p>
                            <span class="fab fa-css3-alt  fa-3x"></span>
                            <p>Css3</p>
                            <span class="fab fa-bootstrap fa-3x"></span>
                            <p>Bootstrap</p>
                        </div>
                        <div class="col-4 ">
                            <span class="fab fa-js fa-3x"></span>
                            <p>JavaScript</p>
                            <span class="fab fa-react fa-3x"></span>
                            <p>React JS</p>
                            <span class="fab fa-html5 fa-3x"></span>
                            <p>Html5</p>
                        </div>
                        <div class="col-4">
                            <span class="fas fa-database fa-3x"></span>
                            <p>Mysql</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Habilidades gradient">
        <div class="container text-center">
            <div class="row">
                <div class="row">
                    <div class="col-12 text-center mt-4 mb-4">
                        <h3 id="projetos">Meus Projetos</h3>
                    </div>
                </div>
                <div class="row cartas">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./public/img/cep.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consulta CEP</h5>
                            <p class="card-text">Projeto de consulta de cep com api viacep.</p>
                            <a href="https://github.com/RodrigoPaulaLopes/ConsultandoCep" class="btn btn-success">Repositorio</a>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="./public/img/clorocine.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Filmes - LionsFilm's</h5>
                            <p class="card-text">Projeto feio para cadastrar seus filmes e favoritalos.</p>
                            <a href="https://github.com/RodrigoPaulaLopes/Clorocine" class="btn btn-success">Repositorio</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./public/img/crud.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de clientes </h5>
                            <p class="card-text">App de cadastro de clientes onde permite excluir, alterar, deletar e mostrar todos os clientes.</p>
                            <a href="https://github.com/RodrigoPaulaLopes/CrudPHPcomBootstrap" class="btn btn-success">Repositorio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contato">
        <div class="container">
            <div class="d-flex flex-row">
                <div class="col-12 mt-3">
                    <div class="container text-center">
                        <h3 id="redessociais">Minhas Redes sociais</h3>
                    </div>
                    <div class="container text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-whatsapp fa-3x"></i>
                                <h5 class="card-title">WhatsApp</h5>
                                <p class="card-text">Converse comigo pelo WhatsApp.</p>
                                <a href="https://api.whatsapp.com/send?phone=5521994894638" class="btn btn-outline-success">Contate-me</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-linkedin fa-3x"></i>
                                <h5 class="card-title">linkedin</h5>
                                <p class="card-text">Visite meu linkdin para ficar por dentro do meu dia a dia como programador.</p>
                                <a href="https://www.linkedin.com/in/rodrigopaulalopes/" class="btn btn-outline-success">Contate-me</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class=" card-body">
                            <i class="fab fa-github fa-3x"></i>
                            <h5 class="card-title">GitHub</h5>
                            <p class="card-text">Visite meu GitHub para conhecer meus repositorios e projetos.</p>
                            <a href="https://github.com/RodrigoPaulaLopes" class="btn btn-outline-success">Contate-me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- final do corpo -->
    <!-- footer -->
    <footer>
        <div class="container bg-black text-light mt-3">
            <div class="row">
                <div class="col-7 mt-3 mr-3">
                    <h5>Site desenvolvido por Rodrigo Lopes | 2021</h5>
                    <p>Este site foi desenvolvido como um portfólio para mostrar minhas habilidades com programação.</p>
                </div>
                <div class="col-5 mt-3 ml-3">
                    <ul class='link-rodape'>
                        <a href="#principal">
                            <li>Principal</li>
                            <a href="#sobre">
                                <li>Sobre</li>
                                <a href="#projetos">
                                    <li>Projetos</li>
                                </a>
                                <a href="#redessociais">
                                    <li>Redes Sociais</li>
                                </a>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Obrigado pela visita!</p>
            </div>
        </div>
    </footer>
    <!-- fim do footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>