<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="">
            </a>

            <div class="menu d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-lg-flex">
                    <li class="nav-item"><a class="nav-link" href="./Views/fofocas.php">Fofocas</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Views/correio.php">Correio Elegante</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lorem Ipsum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lorem Ipsum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lorem Ipsum</a></li>
                </ul>
                <button class="btn btn-warning ms-3 login-btn" type="submit"><a href="./Views/loginForm.php">Login</a></button>
            </div>
        </div>
    </nav>
    <!-- img com escola e tals -->
    <div class="hero-section mx-5">
        <div class="container hero-content">
            <div class="row pt-5">
                <div class="col-lg-6 col-md-8 pt-5">
                    <h1 class="display-1 hero-title">
                        <strong><span class="text-warning pt-3">Riverdale</span></strong>
                    </h1>
                    <p class="lead hero-subtitle">
                        O que acontece na <br>
                        <span class="text-primary-riverdale">Riverdale High</span>, fica na <br>
                        <span class="text-primary-riverdale">Riverdale High</span>.
                    </p>
                    <button class="btn btn-warning btn-lg enter-btn mt-4"><a href="./Views/loginForm.php">
                        Entre agora </a><span class="ms-2">→</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="elegant-mail-section container my-5">
    <div class="elegant-mail-card rounded-4 d-flex flex-column flex-lg-row p-0">
        
        <div class="col-lg-7 gap-0 position-relative text-center text-lg-start mb-lg-0">
            <div class="elegant-mail-card-text-area">
                <h2 class="fs-6 fw-normal">
                    Confira o
                </h2>
                <h3 class="elegant-mail-title inria-serif-bold-italic">
                    Correio Elegante 
                </h3>
                <p class="fs-6 fw-normal mb-lg-5">Existe amor em Riverdale</p>
            </div>
            
              <img src="assets/correioeleganterecortado.png" alt="Pombo do Correio Elegante" 
                 class="elegant-mail-img position-absolute">
        </div>

        <div class="elegant-mail-participate-card col-lg-5 d-flex flex-column align-items-lg-start text-center text-lg-start">
            <div class="elegant-mail-content align-items-lg-start text-center text-lg-start">
                <p class="text-warning fs-5 fw-bold mb-0">Experimente nosso</p>
                <h3 class="elegant-mail-subtitle fs-1 fw-bold mb-3">Sigilo total</h3>
                <p class="fs-6 fw-normal mb-4 text-white-50" style="max-width: 450px;">
                    Em Riverdale, todo mundo tem segredos — e alguns chegam em forma de bilhete. Bem-vindo ao Correio 
                    Elegante, onde mensagens anônimas revelam o que o coração não consegue esconder.
                </p>
            </div>
            
            <div class="elegant-mail-stats mb-4">
                <small class="text-white-50 me-4">
                    <i class="bi bi-envelope-heart"></i> Mensagens de amor enviadas: 
                    <span class="text-warning fw-bold fs-5">147</span>
                </small>
            </div>
            
            <button class="btn btn-warning btn-lg enter-btn">
                <a href="./Views/correio.php">Participe agora</a> <span class="ms-2">→</span>
            </button>
            </div>
        </div>
    </div>
</div>
    <div class="body-section  mx-5" style="padding-top: 150px;">
        <h1 class="text-center">Te entregamos as melhores <span class="text-primary-riverdale">fofocas</span></h1>
        <h4 class="text-center fs-6 fw-normal">Confira o que os alunos de Riverdale High que estão comentando no momento
        </h4>
        <div class="gossip-card-section">
            <div class="row gx-5 justify-content-center">
                <div id="gossip-card" class="card col-10 col-md-5 mb-3 bg-transparent">
                    <a id="gossip-card-link">
                        <img src="assets/riverdalecorredores.jpg" id="" class="card-img-top object-fit-cover"
                            style="height: 230px" />
                        <div class="card-img-overlay">
                        </div>
                        <div class="card-body p-0">
                            <p class="pb-0 mb-0 card-text fw-bold text-multiline-ellipsis line-3"
                                style="color: #ffffff">Mistério nas Sombras: o que realmente está acontecendo nos
                                corredores da Riverdale High?</p>
                            <p class="pt-0 text-multiline-ellipsis line-2" style="color: #ffffff;">Nos últimos dias,
                                rumores estranhos têm circulado pelos corredores da Riverdale High. Portas que se abrem
                                sozinhas, luzes que piscam no final do turno e bilhetes anônimos deixados nos armários
                                de alguns alunos. Coincidência? Ou mais um capítulo sombrio na história da nossa cidade?
                            </p>
                        </div>
                    </a>
                </div>

                <div id="gossip-card" class="card col-10 col-md-5 mb-3 bg-transparent">
                    <a id="gossip-card-link">
                        <img src="assets/personagens.jpg" id="" class="card-img-top object-fit-cover"
                            style="height: 230px" />
                        <div class="card-img-overlay">
                        </div>
                        <div class="card-body p-0">
                            <p class="mb-0 card-text fw-bold text-multiline-ellipsis line-3" style="color: #ffffff">
                                Betty, Archie e Veronica: triângulo, amizade… ou algo mais?</p>
                            <p class="pt-0 text-multiline-ellipsis line-2" style="color: #ffffff;">Se tem algo que nunca
                                falta em Riverdale, são histórias — e, ultimamente, os corredores da escola estão mais
                                agitados do que nunca. De supostos romances secretos a brigas silenciosas entre melhores
                                amigos, os alunos parecem ter se tornado especialistas em espalhar mistérios dignos de
                                um roteiro.</p>
                        </div>
                    </a>
                </div>
                <div id="gossip-card" class="card col-10 col-md-5 mb-3 bg-transparent">
                    <a id="gossip-card-link">
                        <img src="assets/crimescene.jpg" id="" class="card-img-top object-fit-cover"
                            style="height: 230px" />
                        <div class="card-img-overlay">
                        </div>
                        <div class="card-body p-0">
                            <p class="mb-0 card-text fw-bold text-multiline-ellipsis line-3" style="color: #ffffff">
                                Assassinato em Riverdale: o silêncio que ecoa pelos corredores da High</p>
                            <p class="pt-0 text-multiline-ellipsis line-2" style="color: #ffffff;">A tranquilidade — ou
                                o que restava dela — foi quebrada em Riverdale nesta semana. Na madrugada de
                                terça-feira, o corpo de um estudante foi encontrado próximo ao antigo ginásio,
                                reacendendo o medo e as perguntas que a cidade tenta esquecer desde o caso Jason
                                Blossom.</p>
                        </div>
                    </a>
                </div>
                <div id="gossip-card" class="card col-10 col-md-5 mb-3 bg-transparent">
                    <a id="gossip-card-link">
                        <img src="assets/anuario.jpg" id="" class="card-img-top object-fit-cover" style="height: 230px" />
                        <div class="card-img-overlay">
                        </div>
                        <div class="card-body p-0">
                            <p class="mb-0 card-text fw-bold text-multiline-ellipsis line-3" style="color: #ffffff">
                                Anuário 2025: lembranças, segredos e o que as fotos não mostram</p>
                            <p class="pt-0 text-multiline-ellipsis line-2" style="color: #ffffff;">Chegou a época mais
                                aguardada — e temida — do ano: o lançamento do anuário da Riverdale High. Sorrisos
                                ensaiados, frases inspiradoras e memórias congeladas em páginas brilhantes. Mas, como
                                sempre em Riverdale, nem tudo é tão simples quanto parece.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="btn-see-more-place text-center">
                <button class="btn btn-warning btn-lg see-more-btn mt-4"><a href="./Views/fofocas.php">Ver mais</a> <span
                        class="ms-2">→</span></button>
            </div>
        </div>
        <div class="riverdale-map-section container mt-5 position-relative"> 
    <div class="localization-nav-bar position-absolute top-0 start-50 translate-middle-x">
        <div class="d-flex justify-content-between align-items-center py-2 px-4">
            <div class="text-white">
                <small class="d-block fw-normal">Se localize em</small>
                <p class="mb-0">Riverdale</p>
                </div>
        </div>
    </div>
    
    <div class="map text-center">
        <img src="assets/mapa.jpg" style="height: 799px; max-width: 100%; display: inline-block;" alt="">
    </div>
</div>
    <footer class="container-fluid p-0 position-relative overlap-footer-wrapper">
        
        <div class="container">
            
            <div id="customFooter" class="text-white">
                
                <div class="row">
                    <div class="col-12">
                        <div class="top-list-footer d-flex justify-content-center mb-4 flex-wrap">
                            <a href="./Views/fofocas.php" class="link-underline link-underline-opacity-0 mx-3 mb-2" style="color: #FFD600;">Fofocas</a>
                            <a href="./Views/correio.php" class="link-underline link-underline-opacity-0 mx-3 mb-2" style="color: #FFD600;">Correio</a>
                            <a href="./Views/loginForm.php" class="link-underline link-underline-opacity-0 mx-3 mb-2" style="color: #FFD600;">Login</a>
                            <a href="" class="link-underline link-underline-opacity-0 mx-3 mb-2" style="color: #FFD600;">Lorem Ipsum</a>
                            <a href="" class="link-underline link-underline-opacity-0 mx-3 mb-2" style="color: #FFD600;">Lorem Ipsum</a>
                        </div>
                    </div>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-8 text-md-start text-center">
                        <p class="mb-3">O Blue & Gold tem como objetivo dar voz aos alunos da Riverdale High, investigando o que acontece dentro e fora dos corredores da escola. É o jornal oficial da Riverdale High, feito para expor verdades, contar histórias e revelar o que muitos preferem deixar nas sombras.</p>
                        
                        <div class="social-icons d-flex justify-content-md-start justify-content-center">
                            <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                            <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                        <div class="d-flex justify-content-md-end justify-content-center align-items-center">
                            <img src="assets/logo.png" alt="Riverdale Logo" class="me-2" style="height: 50px;">
                        </div>
                    </div>
                </div>
            </div> </div>
    </footer>
</body>

</html>