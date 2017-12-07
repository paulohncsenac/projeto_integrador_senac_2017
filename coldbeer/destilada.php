<?php 

	include 'banco.php';
	$pdo = Banco::conectar();

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DESTILADOS</title>
    <meta charset="utf-8">
   	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
   	<link rel="stylesheet" type="text/css"  href="css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="css/hover.css"/>
	<link rel="stylesheet" type="text/css" href="css/rodapé.css"/>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	 <script type="text/javascript">
        jQuery(document).ready(function ($) {

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

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
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

   	  <style>
	
	body{
  
		background-color:#EEE9E9!important;
		margin-bottom:200px;
		
		
	
	}
	
	.margin-img{
	    
		margin-bottom:20px;
		
	}
	
	.paddingRow{
	    
		padding-left:40px !important;
		
	}
	
  </style>

  </head>
  <body>
  <header class="topo">
     
	 <header class="nome">
		   
		   <div class="container">
				
				<div class="row">
				
					<div class="col-md-12">
					
				
				   
				   </div>
				   
				</div>
				<div class="row">
				
					<div class="col-md-6 col-md-offset-3 col-sm-offset-4 col-xs-offset-4">
					
					
					<span class="imageTop"><img style="padding-top 15px !important;" src="logocold.png"></span>
				   
					
					
				   </div>
				   
				</div>
			</div>
   
     </header>
  </header>
   
   
	<nav class="navbar navbar-inverse bg-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Cerveja</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Destilado <span class="sr-only">(current)</span></a></li>
        <li><a href="refri.html">Refrigerantes</a></li>
		  <li><a href="semalco.html">Não Alcoólicas</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aperetivos<span class="caret"></span></a>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
	   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisa</button>
    </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
 
 <div id="jssor_1" style="position:relative;margin:0 auto;top:-20px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
           
            <div>
                <img data-u="image" src="img/gallery/1300x500/black2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/1300x500/black.jpg" />
              
            </div>
			<div>
                <img data-u="image" src="img/gallery/1300x500/sminorff.jpg" />
              
            </div>
			
			<div>
                <img data-u="image" src="img/gallery/1300x500/red.jpeg"/>
              
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
    <!-- #endregion Jssor Slider End -->
 
 
<div class="containerindex">
	      
		 <!--div class="menu">
				<span><img src="img/coldbeer.fw.png"></span>
		</div-->
		

		
		<div class="row paddingRow margin-img">

			<?php 

				//Captura as informações para a lista de cerjevas
                $sqlCervejas = " SELECT * FROM `produto` WHERE `produto`.`Categoria` = 'destilados'";
                 
                 foreach($pdo->query($sqlCervejas) as $linhaCerveja)
                 {
		    ?>
			
			<div class="col-xs-12 col-sm-12 col-md-3">
				 <div class="grid">
				   
					<figure class="effect-apollo">
						<img class="img-responsive"  src="<?php echo $linhaCerveja['imagens'] ?>" >
						<figcaption>
							<h2><span></span></h2>
							<p  class="preco">R$ <?php echo str_replace('.',',',$linhaCerveja['PrecoUnitario']); ?></p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
                </div>
                <button type="button" class="btn btn-primary btn-block " data-toggle="modal" data-target="#<?php echo $linhaCerveja['IdProd'] ?>" >
						Detalhes.
				</button>
			</div>
			<?php 
					
				}
				//Fim da captura as informações para a lista de cerjevas

				//Captura as informações para a lista de cerjevas exibidas no modal junto com as informações adicionais
				foreach($pdo->query($sqlCervejas) as $linhaCerveja)
                 {
		    ?>
			
			
			<div class="container">

				<div class="row">

					<!-- Button trigger modal -->
						

						<!-- Modal -->
						<div class="modal fade" id="<?php echo $linhaCerveja['IdProd'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel" style="color: #000 !important;"><?php echo $linhaCerveja['NomeProd']; ?></h4>
						      </div>
						      <div class="modal-body" style="color: #000 !important;">
						      	<div class="row">
							        <div class="col-md-6 img-responsive">
							        	<img src="<?php echo $linhaCerveja['imagens'] ?>" />
							        </div>

							        <div class="col-md-6 ">
							        	<table class="table" id="myTable">
											  <thead class="thead-dark">
											    <tr>
											      <th>Marca</th>
											      <th><?php echo $linhaCerveja['MarcaProd']; ?></th>
											      <th></th>
											      <th></th>
												  <th></th>
											    </tr>
											  </thead>
											  <tbody>
											    
												<tr class="bg-warning">
											        <th class="cadas" scope="row">Embalagem</th>
											        <td><?php echo $linhaCerveja['Embalagem']; ?></td>
											        <td></td>
											        <td></td>
												    <td></td>
											    </tr>
												<tr class="bg-warning">
											      <th scope="row">Quantidade</th>
											      <td><?php echo $linhaCerveja['ML']; ?></td>
											      <td></td>
											      <td></td>
												  <td></td>
											    </tr>
											    
												<tr class="bg-warning">
											      <th scope="row">Unidade</th>
											      <td><?php echo $linhaCerveja['Unidade']; ?></td>
											      <td></td>
											      <td></td>
												  <td></td>
												
											    </tr>
												
												<tr class="bg-warning">
												 <th scope="row">Teor Alcoólico</th>
												 <td><?php echo $linhaCerveja['Teor']; ?></td>
											     <td></td>
											     <td></td>
												 <td></td>
												 
											    </tr>
												
											</tbody></table>
							        </div>

							    </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
						        
						      </div>
						    </div>
						  </div>
						</div>

				</div>
				
			</div>
			<?php }//Fim da Captura das informações para a lista de cerjevas exibidas no modal junto com as informações adicionais ?>

		</div>
			
					
		</div>
		</div>
		
		</div>
		
	</div>
	<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
            <div class="overlay"></div>
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h3>FALE CONOSCO:</h3>
                        <p>95417-812631</p>
                        
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
