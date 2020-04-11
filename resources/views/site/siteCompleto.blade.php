<!DOCTYPE html>
<html>

<head>
    <meta name="google-site-verification" content="qZOO-tbV4SeOl-ULyXre4D2VBsdfCUeC9uYwHPfqXSE" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>{{ config('app.name', 'Achados e Perdidos') }}</title>
    <link rel="icon" href="ia3.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="images/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script src="contactform/contactform.js"></script>

        <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>
    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#perdidos">Perdidos</a></li>
                <!--li class="small-logo"><a href="{{ url('/login') }}"><img src="images/ia3-small-logo.png" alt=""></a></li-->
                <li><a href="#achados">Encontrados</a></li>
                <li><a href="#quemSomos">Quem Somos</a></li>
                <li><a href="#team">Time</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </div>
    </nav>
    <!--main-nav-end-->

    <section class="main-section client-part" id="home">
        <!--main-section client-part-start-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <figure class="logo animated fadeInDown delay-03s">
                        <a href="#"><img src="images/ia3-logo.png" alt=""></a>
                    </figure>
                    <h1 class="animated fadeInDown delay-05s">Bem vindo à <a href="https://inteligencia3.com.br/">I Found</a></h1>
                </div>
            </div>
            <br>
            <b class="quote-right wow fadeInDown delay-09s"><i class="fa-quote-right"></i></b>
            <div class="row">
                <div class="col-lg-12">
                    <p class="client-part-haead wow fadeInDown delay-09s">VOCÊ PERDEU? NÓS TE AJUDAMOS A ENCONTRAR</p>

                    <form class="form-horizontal" role="search" action="{{ url('cliente/busca') }}" method="post">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span id="search_concept">Procurar por</span> 
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#contains">Contains</a></li>
                                      <li><a href="#its_equal">It's equal</a></li>
                                      <li><a href="#greather_than">Greather than ></a></li>
                                      <li><a href="#less_than">Less than < </a></li>
                                      <li class="divider"></li>
                                      <li><a href="#all">Anything</a></li>
                                  </ul>
                              </div>

                              <input type="hidden" name="search_param" value="all" id="search_param">    
                              <input type="text" class="form-control"  placeholder="Procurar">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="main-section" id="perdidos">
    <!--main-section-start-->
    <div class="container">
        <h2>PERDEU???</h2>
        <h6>Vixiiii deu ruim? Nós te ajudamos.</h6>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Se você perdeu algo <br> você está no lugar certo</h3>
                        <p>Não fique sem seu bem maior, cadastre aqui na IFound que nos divulgamos e ajudamos a encontrar.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Queremos te ajudar</h3>
                        <p>O IFound é um serviço gratuito, criado para multiplicar as chances das pessoas encontrarem o que perderam através da internet</p>
                    </div>
                </div>
                <div align="center" >
                    <a class="btn btn-primary " href="{{ url('/registerSite') }}">Cadastre sua Procura</a>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                <img src="images/ia3-macbook-pro.png" alt="">
            </figure>

        </div>
    </div>
</section>
<!--main-section-end-->



<section class="main-section alabaster" id="achados">
    <!--main-section alabaster-start-->
    <div class="container">
        <div class="row">
            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <img src="images/iphone.png" alt="">
            </figure>
            <div class="col-lg-7 col-sm-8 featured-work">
                <h2>Achei!!!</h2>
                <P class="padding-b">Vivemos em um mundo em que o ser humano quer se dar bem em tudo, mas honestidade é o primeiro passo para mudanças verdadeiras. Pensando nisso, acreditamos que podemos ajudar sempre o nosso próximo, devolvendo a alegria de quem perdeu. </P>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInRight delay-02s">
                        <i class="fa-magic"></i>
                    </div>
                    <div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>Banco de dados</h3>
                        <p>O ia3 tem todo o suporte para inserção de banco de dados com as informações dos seus clientes como: 
                            Dados cadastrais, frequência de compra, ticket médio, além disso também calcula a taxa de dispersão
                        e retenção do seu negócio. </p>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInRight delay-04s">
                        <i class="fa-gift"></i>
                    </div>
                    <div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>Gerenciados financeiro</h3>
                        <p> Nosso gerenciador financeiro, chamado ia3 Financis, que dá o suporte na hora da gestão dos recursos como: 
                        Contas a pagar e receber, fluxo de caixa, controle de estoque, emissão de nota fiscal e faturamento.</p>
                    </div>
                </div>
                    <div align="center" >
                        <a class="btn btn-primary " href="{{ url('/registerSite') }}">Cadastre sua Procura</a>
                    </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="main-section paddind" id="quemSomos">
    <div class="container">
        <h2>Quem Somos</h2>
        <br>
        <P class="padding-b">Uma questão sempre surgiu em nossas conversas, o pequeno empresário e startups fazem marketing? 
            Pensando nisso resolvemos criar uma consultoria com o foco no pequeno empreendedor e a pequena empresa, 
            para auxiliá-los desde o começo na gestão de marketing do seu negócio. Nascida em 2017, a Inteligencia3 
            é uma consultoria de gestão de marketing inteligente e inovação com foco em estratégia, melhoria de processos 
            e força de vendas, oferecendo o suporte necessário em todo o processo de vendas (prospecção, vendas e pós-vendas). 
            Nossa meta é reduzir o tempo que sua empresa gasta em vender, analisando o dia a dia, identificando as melhorias 
            e implementando ferramentas capazes de otimizar processos e reduzir os possíveis insucessos. Também preocupada com o futuro, 
            a Inteligencia3 fornece suporte ao e-commerce e realiza a gestão das operações on-line, tornando o comercio eletrônico 
        cada vez mais moderno, competitivo e estratégico na obtenção e resultados.</P>
        <br>
    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        <div class="Portfolio-box-container">
            <div class=" Portfolio-box missao">
                <img src="images/missao.png" alt="">
            </div>
            <h3>Missao</h3>
            <p>Implantar uma rotina estratégica misturando o marketing, informação e inovação.</p>
        </div>
        <div class="Portfolio-box-container">
            <div class=" Portfolio-box visao">
                <img src="images/visao.png" alt="">
            </div>
            <h3>Visao</h3>
            <p>Tornar o marketing uma filosofia de vida empresarial dos nossos cliente e parceiros, alcançar os 
            resultados e oferecer os melhores caminhos a serem traçados sem deixar de buscar todos os dias o conhecimento.</p>
        </div>
        <div class="Portfolio-box-container">
            <div class=" Portfolio-box valores">
                <img src="images/valores.png" alt="">
            </div>
            <h3>Valores</h3>
            <p>Compromisso, ética, visão de futuro, simplicidade.</p>
        </div>
    </div>
</section>

<!--c-logo-part-end-->
<section class="main-section team" id="team">
    <!--main-section team-start-->
    <div class="container">
        <h2>Time</h2>
        <h6>Conheça nosso time.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="images/leandro.jpg" alt="">
                    <ul>
                        <li><a href="https://www.linkedin.com/in/leandroferreira/" class="fa-linkedin"></a></li>
                        <li><a href="https://www.instagram.com/olele_leandro" class="fa-instagram"></a></li>
                        <li><a href="https://www.facebook.com/" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Leandro Ferreira</h3>
                <span class="wow fadeInDown delay-03s">Fundador</span>
                <p class="wow fadeInDown delay-03s">Idealizador, fundador e administrador do IFound.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="images/wesley.jpg" alt="">
                    <ul>
                        <li><a href="www.linkedin.com/in/wesleychaves" class="fa-linkedin"></a></li>
                        <li><a href="https://www.instagram.com/weslleychavess" class="fa-instagram"></a></li>
                        <li><a href="https://www.facebook.com/weslley.chavess" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Wesley Chaves</h3>
                <span class="wow fadeInDown delay-06s">CTO</span>
                <p class="wow fadeInDown delay-06s">Pós graduando MBA em Engenharia de Software pela FIAP, bacharel em Ciência da Computação pela universidade UNIP - Universidade Paulista, Co-Fundador e
                responsável pela criação da infraestrutura tecnológica da IFound com a responsabilidade de realizar toda pesquisa, desenvolvimento e planos para novos produtos. Desenvolvendo indicadores e garantindo as entregas dos pacotes de atividades a serem desempenhadas para a execução do projeto.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="images/mauricio.jpg" alt="">
                    <ul>
                        <li><a href="https://www.linkedin.com/in/mauricio/" class="fa-linkedin"></a></li>
                        <li><a href="https://www.instagram.com/mauricio" class="fa-instagram"></a></li>
                        <li><a href="https://www.facebook.com/mauricio" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Maurício Ferreira</h3>
                <span class="wow fadeInDown delay-03s">Co-Fundador</span>
                <p class="wow fadeInDown delay-03s">Co-Idealizador, Co-Fundador e administrador do IFound.</p>
            </div>
        </div>
    </div>
</section>

<section class="main-section paddind" id="clientes">
    <div class="container">
        <h2>Parceiros</h2>
    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        <div class=" Portfolio-box valores">
            <img src="images/martinsMourao.jpg" alt="">
        </div>
        <div class=" Portfolio-box valores">
            <a href="{{ url('/alunoRegulamento') }}"><img src="images/chavesTransportes.png" alt=""></a>
        </div>
    </div>
</section>

<section class="business-talking">
    <!--business-talking-start-->
    <div class="container">
        <h2>Achados e Perdidos.</h2>
    </div>
</section>
<!--business-talking-end-->
<div class="container">
    <section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Endereço:</h3>
                    <span>Sao Paulo<br>Brasil.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Contato:</h3>
                    <span>(11) 99602-0881 </span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email:</h3>
                    <span>contato@ifound.com.br</span>
                </div>
                <ul class="social-link">
                    <li class="linkedin"><a href="https://www.linkedin.com/company/inteligencia3/"><i class="fa-linkedin"></i></a></li>
                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success"> <?php Illuminate\Support\Facades\Session::get('mensagem_sucesso') ?></div>
                    @endif

                    {!! Form::open(['class'=> 'form-horizontal', 'method' => 'POST', 'url' => 'contato/salvarContato']) !!}

                    <div class="form-group">
                        <input type="text" name="nome" class="form-control input-text" id="nome" placeholder="Digite nome completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-text" name="email" id="email" placeholder="Digite um email válido" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-text" id="telefone" name="telefone" placeholder="Digite um telefone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-text text-area" id="mensagem" name="mensagem" rows="5" data-rule="required" data-msg="Mensagem" placeholder="Digite aqui sua mensagem"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center"><button type="submit" class="input-btn">Enviar Mensagem</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="images/ia3-footer-logo.png" alt=""></a></div>
        <span class="copyright">&copy; IFound. Todos Direitos Reservados</span>
        <div class="credits">
            <a href="https://inteligencia3.com.br/">IFound</a>
        </div>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function (e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function () {
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<script type="text/javascript">
    $(window).load(function () {

        $('.main-nav li a, .servicelink').bind('click', function (event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');
    /*
     if you don't want to use the easing effects:
     $('html, body').stop().animate({
     scrollTop: $($anchor.attr('href')).offset().top
     }, 1000);
     */
     if ($(window).width() < 768) {
        $('.main-nav').hide();
    }
    event.preventDefault();
});
    })
</script>

<script type="text/javascript">
    $(window).load(function () {


        var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


        $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
        columnWidth: colW
    }
});

        $(window).smartresize(function () {
    // check if columns has changed
    var currentColumns = Math.floor(($body.width() - 30) / colW);
    if (currentColumns !== columns) {
        // set new column count
        columns = currentColumns;
        // apply width to container manually, then trigger relayout
        $container.width(columns * colW)
        .isotope('reLayout');
    }

}).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });
</script>

</body>
</html>