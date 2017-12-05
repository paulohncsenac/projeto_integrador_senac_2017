<!DOCTYPE html>
<html>

    <head>
        <title>Game Hobby</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="final.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">

        <!--Scripts-->

        <script src="js/javascript01.js" crossorigin="anonymous"></script>
        <script src="js/javascript02.js" crossorigin="anonymous"></script> 
        <script src="js/javascript03.js" crossorigin="anonymous"></script> 
        <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
            });





            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
            }
            }
        </script>

    </head>

    <body>
        <script type="text/javascript" src="js/jssor.slider.min.js"></script>

        <script type="text/javascript">
            jssor_1_slider_init = function() {
            var jssor_1_SlideoTransitions = [
            [{b:-1,d:1,o:-0.7}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];
            var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
            }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            /*#region responsive code begin*/
            var MAX_WIDTH = 3000;
            function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
            jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
            window.setTimeout(ScaleSlider, 30);
            }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
            };
        </script>

        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
            .jssorb032 {position:absolute;}
            .jssorb032 .i {position:absolute;cursor:pointer;}
            .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
            .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
            .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
            .jssorb032 .i.idn {opacity:.3;}
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>

        <div class="container">

            <div class="row">

                <div class="col-xs-2  col-md-1 col-md-offset-10 col-xs-offset-6">

                    <div class="textoTopo"><a href="telaCadastro.html" >Login</a></div>

                </div>

                <div class="col-xs-2  col-md-1">

                    <div class="textoTopo"><a href="telaLogin.html">Cadastrar</a></div>

                </div>

            </div>

        </div>



        <header>
            <div class="titulo-1">
                <img src="https://raw.githubusercontent.com/paulohncsenac/projeto_integrador_senac_2017/master/gamehobby/Gamehobby.png" class="img-responsive" alt="">
            </div>
        </header>



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="active" >

                                <a class="navbar-brand" href="#">Home</a>

                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Ultimas Noticias<span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Lançamentos</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jogos<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PS4</a></li>
                                        <li><a href="#">XBOX ONE</a></li>
                                        <li><a href="#">PC</a></li>

                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Contato</a></li>
                                <li><a href="#">Sobre nós</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>

        </div>

        <!-- make a div with 100% width, place jssor slider in the div -->


        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="./svg/loading/static-svg/spin.svg." />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                <div>
                    <img data-u="image" src="forza.jpg" />

                </div>
                <div>
                    <img data-u="image" src="sniper.jpg" />
                </div>
                <div>
                    <img data-u="image" src="Rainbow.jpg" />

                </div>

                <div>
                    <img data-u="image" src="massefect.jpg" />
                </div>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>


        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->

        <br>
        <br>

        <div class="container visible-md visible-lg">
            <div class="row" >
                <div class="col-md-6">
                    <img id="imagem1" src="xbox1.jpg" alt="..." class="img-responsive">

                </div>
                <div class="col-md-6">
                    <img id="imagem2" src="ps4-1.jpg" alt="..." class="img-responsive">

                </div>
            </div>  
        </div>

        <div class="container visible-xs visible-sm">
            <div class="row" >
                <div class="col-xs-12 col-sm-12">
                    <img id="imagem1" src="xbox1.jpg" alt="..." class="img-responsive">

                </div>

            </div>  
        </div>
        <br>
        <br>
        <div class="container container visible-xs visible-sm">
            <div class="row" >

                <div class="col-xs-12 col-sm-12">
                    <img id="imagem2" src="ps4-1.jpg" alt="..." class="img-responsive">

                </div>
            </div>  
        </div>
        <br>
        <br>

        <div class="container">
            <div class="row" >

                <div class="col-md-12">
                    <img id="imagem3" src="pROJETO.png" alt="..." class="img-responsive">

                </div>
            </div>
        </div>

        <br>
        <br>

        <section id="blog-section" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/death-stranding.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#">
                                                
                                                <?php
                                                
                                                    $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum mi in efficitur tempor. Aliquam dui est, pellentesque quis ultrices sit amet, efficitur in dui. In hac habitasse platea dictumst. Morbi mi ex, pellentesque a ante quis, lobortis feugiat diam. Etiam neque sem, fringilla id velit tempus, pretium malesuada justo. Proin vel dignissim neque. Mauris augue nisi, ornare non dolor sed, tincidunt porta purus. Aliquam consectetur imperdiet tellus, eget cursus.";

                                                    if (strlen($str) > 100){

                                                        $str = substr($str, 0, 100) . '...';
                                                    }

                                                    echo $str .'<a>Leia Mais</a>';
                                            
                                                ?>
                                                
                                                </a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="">
                                        <span style="font-size: 16px;color: #fff;">João Alves</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>João Victor Alves</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/god-of-war-4.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#"><?php
                                                
                                                    $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum mi in efficitur tempor. Aliquam dui est, pellentesque quis ultrices sit amet, efficitur in dui. In hac habitasse platea dictumst. Morbi mi ex, pellentesque a ante quis, lobortis feugiat diam. Etiam neque sem, fringilla id velit tempus, pretium malesuada justo. Proin vel dignissim neque. Mauris augue nisi, ornare non dolor sed, tincidunt porta purus. Aliquam consectetur imperdiet tellus, eget cursus.";

                                                    if (strlen($str) > 100){

                                                        $str = substr($str, 0, 100) . '...';
                                                    }

                                                    echo $str .'<a>Leia Mais</a>';
                                            
                                                ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                                        <span style="font-size: 16px;color: #fff;">Rafazel Dezena</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Rafazel Dezena</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>       

                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/quake-champions.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum mi in efficitur tempor. Aliquam dui est, pellentesque quis ultrices sit amet, efficitur in dui. In hac habitasse platea dictumst. Morbi mi ex, pellentesque a ante quis, lobortis feugiat diam. Etiam neque sem, fringilla id velit tempus, pretium malesuada justo. Proin vel dignissim neque. Mauris augue nisi, ornare non dolor sed, tincidunt porta purus. Aliquam consectetur imperdiet tellus, eget cursus.</a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                                        <span style="font-size: 16px;color: #fff;">Luan Hunter</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Luan Hunter</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>       

                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/metal-gear-survive.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum mi in efficitur tempor. Aliquam dui est, pellentesque quis ultrices sit amet, efficitur in dui. In hac habitasse platea dictumst. Morbi mi ex, pellentesque a ante quis, lobortis feugiat diam. Etiam neque sem, fringilla id velit tempus, pretium malesuada justo. Proin vel dignissim neque. Mauris augue nisi, ornare non dolor sed, tincidunt porta purus. Aliquam consectetur imperdiet tellus, eget cursus.</a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                                        <span style="font-size: 16px;color: #fff;">João Victor Alves</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>João Alves</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                
                            </div>       

                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/resident-evil-biohazard.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#"><p>Resident Evil 7: Biohazard</p> Biohazard afasta-se dos erros cometidos com o último game da franquia e volta àquilo que tornou a saga Resident Evil tão marcante: terror de sobrevivência. Menos armas e mais suspense, o jogo volta a se focar na vertente psicológica do terror.</a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                                        <span style="font-size: 16px;color: #fff;">Luan Hunter</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Luan Hunter</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>       

                            <div class="col-lg-6 col-md-6">
                                <aside>
                                    <img src="https://s.aficionados.com.br/imagens/horizon-zero-dawn.jpg" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3><a href="#"><p>Horizon Zero Dawn</p> Um dos jogos mais aguardados dos últimos anos, Horizon Zero Down é um exclusivo do PlayStation. RPG de mundo aberto e com influência de Skyrim e Assassin’s Creed, o jogo passa-se 1000 anos no futuro com criaturas robôticas dominando o planeta.</a></h3>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                                        <span style="font-size: 16px;color: #fff;">Rafael Dezena</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Rafael Dezena</h3>
                                                <p>Programador web</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>       

                            

                   
                        </div>
                    </div>

                    <!--           // RECENT POST===========-->
                    <div class="col-lg-4">           
                        <div class="widget-sidebar">
                            <h2 class="title-widget-sidebar">// RECENT POST</h2>
                            <div class="content-widget-sidebar">
                                <ul>
                                    <li class="recent-post">
                                        <div class="post-img">
                                            <img src="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg" class="img-responsive">
                                        </div>
                                        <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                        <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                                    </li>
                                    <hr>

                                    <li class="recent-post">
                                        <div class="post-img">
                                            <img src="https://lh3.googleusercontent.com/-ojLI116-Mxk/WM1ZIwdnuwI/AAAAAAAADeo/4K6VpwIPSfgsmlXJB5o0N8scuI3iW4OpwCJoC/w424-h318-n-rw/thumbnail6.jpg" class="img-responsive">
                                        </div>
                                        <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                        <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                                    </li>
                                    <hr>

                                    <li class="recent-post">
                                        <div class="post-img">
                                            <img src="https://lh3.googleusercontent.com/-TrK1csbtHRs/WM1ZI1SIUNI/AAAAAAAADeo/OkiUjuad6skWl9ugxbiIA_436OwsWKBNgCJoC/w424-h318-n-rw/thumbnail3.jpg" class="img-responsive">
                                        </div>
                                        <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                        <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                                    </li>
                                    <hr>

                                    <li class="recent-post">
                                        <div class="post-img">
                                            <img src="https://lh3.googleusercontent.com/-UKfIhJSBW9M/WM1ZI8ou34I/AAAAAAAADeo/vlLGY29147AYLaxUW29ZXJlun115BhkhgCJoC/w424-h318-n-rw/thumbnail7.jpg" class="img-responsive">
                                        </div>
                                        <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                        <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                                    </li>


                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>


        <footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
            <div class="overlay"></div>
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h3>A Little About Stamina.</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p><a class="btn btn-primary" href="#">Become A Member</a></p>
                    </div>
                    <div class="col-md-8">
                        <h3>Classes</h3>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Cardio</a></li>
                                <li><a href="#">Body Building</a></li>
                                <li><a href="#">Yoga</a></li>
                                <li><a href="#">Boxing</a></li>
                                <li><a href="#">Running</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Boxing</a></li>
                                <li><a href="#">Martial Arts</a></li>
                                <li><a href="#">Karate</a></li>
                                <li><a href="#">Kungfu</a></li>
                                <li><a href="#">Basketball</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Badminton</a></li>
                                <li><a href="#">Body Building</a></li>
                                <li><a href="#">Teams</a></li>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2017 | All Rights Reserved.</small> 
                            <small class="block">Powered by  siteName.com</small>
                        </p>
                    </div>
                </div>

            </div>
        </footer>




    </body>
</html>
