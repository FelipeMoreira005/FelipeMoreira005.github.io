<!DOCTYPE html>
<html class="no-js" lang="pt">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/icone01.png">
    <meta name="viewport" content="width=device-width" />
    <title>Sistemas Concorrentes</title>
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/foundation.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <script src="javascripts/modernizr.foundation.js"></script>
    <link rel="stylesheet" href="ligature.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <!-- MENUS -->
    <nav>
     <div class="twelve columns header_nav">
       <div class="row" style="width: 100%;padding: 0 10px;">
          <ul id="menu-header" class="nav-bar horizontal">
           <li class="active"><a href="index.php" style="cursor: pointer;">Início</a></li>
            <li class="has-flyout">
              <li class=""><a href="#info">Informações</a></li>
              <li class=""><a href="#galeria">Galeria</a></li>
              <li class=""><a href="#curiosidades">Curiosidades</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- MENUS -->

    <!-- HEADER -->
      <header>
            <h1 class="heading_supersize">Sistemas Concorrentes e Distribuídos</h1>
            <h2 class="welcome_text">Paradigmas de programação para a construção de programas de computador </h2>
      </header>
    <!-- HEADER -->

    <!-- INFORMAÇÕES -->
       <section class="section_light" id="info">
            <div class="row">

             <div class="four columns">
                <h3><span class="dropcap_red lsf-icon-dropcap" title="help"></span>Sistemas distribuídos</h3>
                <p>Um sistema distribuído é uma coleção de computadores independentes entre si que se apresenta ao usuário como um sistema único, coerente e autônomos interligados através de uma rede de computadores.</p>
             </div>

              <div class="four columns">
                <h3><span class="dropcap_black lsf-icon-dropcap" title="info"></span> Características</h3>
                <p>Múltiplos componentes autônomos;<br>Componentes não são compartilhados por todos os usuários;<br>Recursos podem não ser acessíveis;<br>Múltiplos pontos de controle;<br></p>
              </div>

              <div class="four columns">
                <h3><span class="dropcap_black lsf-icon-dropcap" title="category"></span>Clusters</h3>
                <p>Um cluster consiste em computadores vagamente ou fortemente ligados que trabalham em conjunto para que, em muitos aspectos, eles possam ser vistos como um único sistema.</p>
              </div>

            </div>
        </section>
    <!-- INFORMAÇÕES -->

    <!-- GALERIA -->
    <!-- Scrip galeria -->
    <section  class="section_dark">
      <div class="row">

      <h2 id="galeria">Galeria</h2>

      <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
      <script type="text/javascript">
      jssor_1_slider_init = function() {

          var jssor_1_options = {
            $AutoPlay: true,
            $AutoPlaySteps: 4,
            $SlideDuration: 160,
            $SlideWidth: 200,
            $SlideSpacing: 3,
            $Cols: 4,
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$,
              $Steps: 4
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$,
              $SpacingX: 1,
              $SpacingY: 1
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
          function ScaleSlider() {
              var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
              if (refSize) {
                  refSize = Math.min(refSize, 809);
                  jssor_1_slider.$ScaleWidth(refSize);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }
          ScaleSlider();
          $Jssor$.$AddEvent(window, "load", ScaleSlider);
          $Jssor$.$AddEvent(window, "resize", ScaleSlider);
          $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      };
    </script>
    <!-- Scrip galeria -->

    <!-- Style galeria -->
    <style>
      .jssorb03 {
          position: absolute;
      }
      .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
          position: absolute;
          width: 21px;
          height: 21px;
          text-align: center;
          line-height: 21px;
          color: white;
          font-size: 12px;
          background: url('img/b03.png') no-repeat;
          overflow: hidden;
          cursor: pointer;
      }
      .jssorb03 div { background-position: -5px -4px; }
      .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
      .jssorb03 .av { background-position: -65px -4px; }
      .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
      .jssora03l, .jssora03r {
          display: block;
          position: absolute;
          width: 55px;
          height: 55px;
          cursor: pointer;
          background: url('img/a03.png') no-repeat;
          overflow: hidden;
      }
      .jssora03l { background-position: -3px -33px; }
      .jssora03r { background-position: -63px -33px; }
      .jssora03l:hover { background-position: -123px -33px; }
      .jssora03r:hover { background-position: -183px -33px; }
      .jssora03l.jssora03ldn { background-position: -243px -33px; }
      .jssora03r.jssora03rdn { background-position: -303px -33px; }
      .jssora03l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
      .jssora03r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
    <!-- Style galeria -->

    <!-- Style zoom -->
    <style type="text/css">
    .parentimage {
      width: 300px;
      height: 300px;
      -webkit-transition: all .3s ease-out;
      -moz-transition: all .3s ease-out;
      -o-transition: all .3s ease-out;
      transition: all .3s ease-out;
    }
    .parentimage:hover {
      -moz-transform: scale(2);
      -webkit-transform: scale(2);
      -o-transform: scale(2);
      -ms-transform: scale(2);
      transform: scale(2);
    }
    </style>
    <!-- Style zoom -->

      <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;" >
          <!-- Loading Screen -->
          <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
              <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
              <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
          </div>
          <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
              <div>
                  <img data-u="image" src="img/1.jpg" class="parentimage"/>
              </div>
              <div style="display: none;">
                  <img data-u="image" src="img/2.jpg" class="parentimage"/>
              </div>
              <div style="display: none;">
                  <img data-u="image" src="img/3.jpeg" class="parentimage"/>
              </div>
              <a data-u="any" href="http://www.jssor.com" style="display:none">Carousel</a>
              <div style="display: none;">
                  <img data-u="image" src="img/4.jpg" class="parentimage"/>
              </div>
              <div style="display: none;">
                  <img data-u="image" src="img/5.jpg" class="parentimage"/>
              </div>
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
              <!-- bullet navigator item prototype -->
              <div data-u="prototype" style="width:21px;height:21px;">
                  <div data-u="numbertemplate"></div>
              </div>
          </div>
          <!-- Arrow Navigator -->
          <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
          <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
      </div>
      <script type="text/javascript">jssor_1_slider_init();</script>
      </div>
    </section>
    <!-- GALERIA -->

    <!-- CURIOSIDADES -->
    <section class="section_main">
        <h2 style="text-align:center" id="curiosidades">Curiosidades</h2>
          <div class="row">

              <article class="six columns">
                    <div class="panel">
                        <h3>Aplicações</h3>
                        <p>Comerciais (reservas de bilhetes, bancos);<br>
                          Internet (WWW);<br>
                          Acesso a informações multimídia(Áudio (voz) e vídeo conferência, P2P-TV);<br>
                          Groupware (trabalho cooperativo).<br>
                          "Você sabe que existe um sistema distribuído quando a falha de um computador que você nunca ouviu falar impede que você faça qualquer trabalho" - Leslie Lamport</p>

                      <a href="#" class="button secondary small radius" data-reveal-id="myModal1">Leia mais &raquo;</a>
                    </div>
              </article>

              <article class="six columns">
                    <div class="panel">
                        <h3>Metas</h3>
                        <p>Acesso a recursos (Facilitar aos usuários e aplicações acesso a recursos remotos);<br>
                        Transparência (Ocultar o fato de que seus processos e recursos estão fisicamente distribuídos);<br>
                        Abertura (Característica que determina se um sistema pode ser estendido de diferentes maneiras);<br>
                        Escalabilidade (Aumento do número de usuários e/ou processos).</p>
                      <a href="#" class="button secondary small radius" data-reveal-id="myModal2">Leia mais &raquo;</a>
                    </div>
              </article>

          </div>
    </section>
    <!-- CURIOSIDADES -->

    <!-- Modals -->
    <div id="myModal1" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="modalTitle">Aplicações</h2>
      <p class="lead">Middleware</p>
      <p>Suportar computadores e redes heterogêneos, oferecendo uma visão de sistema único;<br>
    SDs são organizados por meio de uma camada de software.<br>
    <img src="images/middleware.png"></p>
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <div id="myModal2" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="modalTitle">Metas</h2>
      <p class="lead">Acesso a Recursos</p>
      <p>Segurança;<br>
      Senhas, autenticação de usuários;<br>
      Rastreamento de comunicações para montar um perfil de preferências.
    </p>

    <p class="lead">Transparência</p>
    <p>Ocultar diferenças entre arquiteturas de máquinas;<br>
      Acordo sobre como os dados devem ser representados.</p>

    <p class="lead">Abertura</p>
    <p>Abertura (Define até que ponto duas implementações de sistemas ou componentes de fornecedores
    diferentes devem coexistir e trabalhar em conjunto).</p>

    <p class="lead">Escalabilidade</p>
    <p>Tamanho (Algoritmos Centralizados);<br>
    Geográfica (Usuários podem estar longe um dos outros).</p>

    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <!-- Modals -->

    <!-- FOOTER -->
    <footer style="background: rgb(18, 97, 71);">
        <div class="footer">
          <div class="row" style="width: 100%;">

            <article class="four columns" >
                <span style="color: rgba(255, 255, 255, 0.5);">
                  <span style="color: rgb(250, 250, 250);font-family: 'Open Sans Condensed';font-size:17px;">Sobre</span><br><br>
                  Projeto apresentado a disciplina <br>sistemas concorrentes, sobre a orientação do<br> Prof. Stênio Longo <br>
                  <br>
              </span>
            </article>

            <article class="four columns">
                <span>
                  <span style="font-size:20px;color: rgb(250, 250, 250);font-family: 'Open Sans Condensed';">Sistemas concorrentes e distribuídos</span><br><br>
                  <a href="http://www.fainor.com.br" target="_blank"><img src="images/fainor.png" width="100"></a>
                </span>
            </article>

            <article class="four columns">
              <span style="color: rgba(255, 255, 255, 0.5);">
                 <span style="color: rgb(250, 250, 250);font-family: 'Open Sans Condensed';font-size:17px;">Autores</span><br><br>
                  Felipe Moreira<br>
                  Holdimar Paiva<br>
              </span>
           </article>
          </div>

        </div>
    </footer>
    <!-- FOOTER -->

    <!-- SCRIPTS -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script>
    <script src="javascripts/app.js" type="text/javascript"></script>
    <!-- SCRIPTS -->
  </body>
</html>