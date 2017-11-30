<?php 

include 'banco.php';
 $pdo = Banco::conectar();

?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Atomic Hub</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Link para CSS Bootstrap -->
		<link rel="stylesheet" href="css2/bootstrap.min.css">

		<!-- Link para CSS -->    
		<link rel="stylesheet" href="css2/style2.css">
	</head>
	<body>
		<header>
			<span>Atomic Hub</span>
		</header>
		<section>
			<center><h2>Tabela Periódica</h2></center><br><br>
			<div class="container">
				<div class="row">

					<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 1";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                        ?>

					<div class="col-md-1 col-xs-18">
							<article data-name="nao-metais" class="nao-metais"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>

					</div>

					<?php 
					
					}

		                        ?>

					<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 2";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                        ?>
					
					<div class="col-md-1 col-xs-18 col-md-offset-16">
							<article data-name="gases-nobres" class="gases-nobres "><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
					</div>

					<?php 
					
					}

		                        ?>
		                        
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-18">
						<article data-name="matais-alcalinos" class="metais-alcalinos"><small class="numero">3</small><br><b class="principal">Li</b><br><small class="nome">Lítio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-alcalino-terrosos" class="metais-alcalino-terrosos"><small class="numero">4</small><br><b class="principal">Be</b><br><small class="nome">Berílio</small></article>
					</div>
					
					<div class="col-md-1 col-xs-18 col-md-offset-10">

						<article data-name="semi-metais" class="semi-metais"><small class="numero">5</small><br><b class="principal">B</b><br><small class="nome">Boro</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="nao-metais" class="nao-metais"><small class="numero">6</small><br><b class="principal">C</b><br><small class="nome">Carbono</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="nao-metais" class="nao-metais"><small class="numero">7</small><br><b class="principal">N</b><br><small class="nome">Nitrogênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="nao-metais" class="nao-metais"><small class="numero">8</small><br><b class="principal">O</b><br><small class="nome">Oxigênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="halogenios" class="halogenios"><small class="numero">9</small><br><b class="principal">F</b><br><small class="nome">Flúor</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="gases-nobres" class="gases-nobres"><small class="numero">10</small><br><b class="principal">Ne</b><br><small class="nome">Neônio</small></article>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-18">
						<article data-name="matais-alcalinos" class="metais-alcalinos"><small class="numero">11</small><br><b class="principal">Na</b><br><small class="nome">Sódio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-alcalino-terrosos" class="metais-alcalino-terrosos"><small class="numero">12</small><br><b class="principal">Mg</b><br><small class="nome">Magnésio</small></article>
					</div>
					
					<div class="col-md-1 col-xs-18 col-md-offset-10">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">13</small><br><b class="principal">Al</b><br><small class="nome">alumínio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="semi-metais" class="semi-metais"><small class="numero">14</small><br><b class="principal">Si</b><br><small class="nome">sílicio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="nao-metais" class="nao-metais"><small class="numero">15</small><br><b class="principal">P</b><br><small class="nome">Fósforo</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="nao-metais" class="nao-metais"><small class="numero">16</small><br><b class="principal">S</b><br><small class="nome">Enxofre</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="halogenios" class="halogenios"><small class="numero">17</small><br><b class="principal">Ci</b><br><small class="nome">Cloro</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="gases-nobres" class="gases-nobres"><small class="numero">18</small><br><b class="principal">Ar</b><br><small class="nome">Argônio</small></article>
					</div>

				</div>
				
				<!-- Laço de repetição -->
				<div class="row">
				 <?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 19 AND  `elementos`.`id_elemento` <=36  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                        ?>

					<div class=" col-md-1 col-xs-18">

						<article data-name="matais-alcalinos" class="

						<?php

							if ($rowElemento['id_tipo' ] == 1 ){

								echo"gases-nobres";

							}elseif($rowElemento['id_tipo' ] == 2 ){

								echo"halogenios";

							}elseif($rowElemento['id_tipo' ] == 3){

								echo"metais-alcalinos";

							}elseif($rowElemento['id_tipo' ] == 4){

								echo"metais-alcalino-terrosos";
								
							}elseif($rowElemento['id_tipo' ] == 5){

								echo"metais-representativos";
								
							}elseif($rowElemento['id_tipo' ] == 6){

								echo"metais-de-transicao";
								
							}elseif($rowElemento['id_tipo' ] == 7){

								echo"nao-metais";
								
							}elseif($rowElemento['id_tipo' ] == 8){

								echo"semi-metais";
								
							}elseif($rowElemento['id_tipo' ] == 9){

								echo"lantanidios";
								
							}else{

								echo"actinidios";

							}

						 ?>"

						 ><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
					</div>
					
				<?php 
					
					}

		                        ?>
		                      </div>

				<!--Fim do laço de repetição-->


				<div class="row">
					<div class="col-md-1 col-xs-18">
						<article data-name="matais-alcalinos" class="metais-alcalinos"><small class="numero">37</small><br><b class="principal">Rb</b><br><small class="nome">Rubídio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-alcalino-terrosos" class="metais-alcalino-terrosos"><small class="numero">38</small><br><b class="principal">Sr</b><br><small class="nome">Estrôncio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">39</small><br><b class="principal">Y</b><br><small class="nome">Ítrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">40</small><br><b class="principal">Zr</b><br><small class="nome">Zircônio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">41</small><br><b class="principal">Nb</b><br><small class="nome">Nióbio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">42</small><br><b class="principal">Mo</b><br><small class="nome">Molibdênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">43</small><br><b class="principal">Tc</b><br><small class="nome">Tecnécio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">44</small><br><b class="principal">Ru</b><br><small class="nome">Rutênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">45</small><br><b class="principal">Rh</b><br><small class="nome">Ródio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">46</small><br><b class="principal">Pd</b><br><small class="nome">Paládio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">47</small><br><b class="principal">Ag</b><br><small class="nome">Prata</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">48</small><br><b class="principal">Cd</b><br><small class="nome">Cádmio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">49</small><br><b class="principal">In</b><br><small class="nome">Índio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">50</small><br><b class="principal">Sn</b><br><small class="nome">Estanho</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="semi-metais" class="semi-metais"><small class="numero">51</small><br><b class="principal">Sb</b><br><small class="nome">Antimônio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="semi-metais" class="semi-metais"><small class="numero">52</small><br><b class="principal">Te</b><br><small class="nome">Telúrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="halogenios" class="halogenios"><small class="numero">53</small><br><b class="principal">I</b><br><small class="nome">Iodo</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="gases-nobres" class="gases-nobres"><small class="numero">54</small><br><b class="principal">Xe</b><br><small class="nome">Xenônio</small></article>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-1 col-xs-18">
						<article data-name="matais-alcalinos" class="metais-alcalinos"><small class="numero">55</small><br><b class="principal">Cs</b><br><small class="nome">Césio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-alcalino-terrosos" class="metais-alcalino-terrosos"><small class="numero">56</small><br><b class="principal">Ba</b><br><small class="nome">Bário</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">57-71</small><br><br><b class="principal">*</b></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">72</small><br><b class="principal">Hf</b><br><small class="nome">Háfnio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">73</small><br><b class="principal">Ta</b><br><small class="nome">Tântalo</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">74</small><br><b class="principal">W</b><br><small class="nome">Tungstênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">75</small><br><b class="principal">Re</b><br><small class="nome">Rênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">76</small><br><b class="principal">Os</b><br><small class="nome">Ósmio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">77</small><br><b class="principal">Ir</b><br><small class="nome">Irídio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">78</small><br><b class="principal">Pt</b><br><small class="nome">Platina</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">79</small><br><b class="principal">Au</b><br><small class="nome">Ouro</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">80</small><br><b class="principal">Hg</b><br><small class="nome">Mercúrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">81</small><br><b class="principal">Ti</b><br><small class="nome">Tálio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">82</small><br><b class="principal">Pb</b><br><small class="nome">Chumbo</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">83</small><br><b class="principal">Bi</b><br><small class="nome">Bismuto</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="semi-metais" class="semi-metais"><small class="numero">84</small><br><b class="principal">Po</b><br><small class="nome">Polônio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="halogenios" class="halogenios"><small class="numero">85</small><br><b class="principal">At</b><br><small class="nome">Astato</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="gases-nobres" class="gases-nobres"><small class="numero">86</small><br><b class="principal">Rn</b><br><small class="nome">Randônio</small></article>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-18">
						<article data-name="matais-alcalinos" class="metais-alcalinos"><small class="numero">87</small><br><b class="principal">Fr</b><br><small class="nome">Frâncio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-alcalino-terrosos" class="metais-alcalino-terrosos"><small class="numero">88</small><br><b class="principal">Ra</b><br><small class="nome">Rádio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">89-103</small><br><br><b class="principal">**</b><br></article>
					</div>
					<div class="col-md-1 col-xs-18">


						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">104</small><br><b class="principal">Rf</b><br><small class="nome">Rutherfórdio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">105</small><br><b class="principal">Db</b><br><small class="nome">Dúbnio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">106</small><br><b class="principal">Sg</b><br><small class="nome">Seabórgio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">107</small><br><b class="principal">Bh</b><br><small class="nome">Bóhrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">108</small><br><b class="principal">Hs</b><br><small class="nome">Hássio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">109</small><br><b class="principal">Mt</b><br><small class="nome">Meitnério</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">110</small><br><b class="principal">Ds</b><br><small class="nome">Darmstádio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">111</small><br><b class="principal">Rg</b><br><small class="nome">Roentgênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-de-transicao" class="metais-de-transicao"><small class="numero">112</small><br><b class="principal">Cn</b><br><small class="nome">Copernício</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">113</small><br><b class="principal">Uut</b><br><small class="nome">Ununtrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">114</small><br><b class="principal">Fl</b><br><small class="nome">Fleróvio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">115</small><br><b class="principal">Uup</b><br><small class="nome">Ununpentio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="metais-representativos" class="metais-representativos"><small class="numero">116</small><br><b class="principal">Lv</b><br><small class="nome">Livermório</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="halogenios" class="halogenios"><small class="numero">117</small><br><b class="principal">Uus</b><br><small class="nome">Ununséptio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="gases-nobres" class="gases-nobres"><small class="numero">118</small><br><b class="principal">Uuo</b><br><small class="nome">Ununóctio</small></article>
					</div>
				</div>
				<br>
				<div class="row">
					
					<div class="col-md-1 col-xs-18 col-md-offset-3">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">71</small><br><b class="principal">Lu</b><br><small class="nome">Lutécio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">70</small><br><b class="principal">Yb</b><br><small class="nome">Itérbio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">69</small><br><b class="principal">Tm</b><br><small class="nome">Túlio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">68</small><br><b class="principal">Er</b><br><small class="nome">Érbio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">67</small><br><b class="principal">Ho</b><br><small class="nome">Hólmio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">66</small><br><b class="principal">Dy</b><br><small class="nome">Disprósio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">65</small><br><b class="principal">Tb</b><br><small class="nome">Térbio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">64</small><br><b class="principal">Gd</b><br><small class="nome">Gadolínio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">63</small><br><b class="principal">Eu</b><br><small class="nome">Európio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">62</small><br><b class="principal">Sm</b><br><small class="nome">Samário</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">61</small><br><b class="principal">Pm</b><br><small class="nome">Promécio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">60</small><br><b class="principal">Nd</b><br><small class="nome">Neodímio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">59</small><br><b class="principal">Pr</b><br><small class="nome">Preaseodímio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">58</small><br><b class="principal">Ce</b><br><small class="nome">Cério</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="lantanidios" class="lantanidios"><small class="numero">57</small><br><b class="principal">La</b><br><small class="nome">Lantânio</small></article>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-1 col-xs-18 col-md-offset-3">
						<article data-name="actinidios" class="actinidios"><small class="numero">103</small><br><b class="principal">Lr</b><br><small class="nome">Laurêncio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">102</small><br><b class="principal">No</b><br><small class="nome">Nobélio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">101</small><br><b class="principal">Md</b><br><small class="nome">Mendelévio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">100</small><br><b class="principal">Fm</b><br><small class="nome">Férmio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">99</small><br><b class="principal">Es</b><br><small class="nome">Einstênio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">98</small><br><b class="principal">Cf</b><br><small class="nome">Califórnio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">97</small><br><b class="principal">Bk</b><br><small class="nome">Berquélio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">96</small><br><b class="principal">Cm</b><br><small class="nome">Cúrio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">95</small><br><b class="principal">Am</b><br><small class="nome">Amerício</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">94</small><br><b class="principal">Pu</b><br><small class="nome">Plutônio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">93</small><br><b class="principal">Np</b><br><small class="nome">Neptúnio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">92</small><br><b class="principal">U</b><br><small class="nome">Urânio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">91</small><br><b class="principal">Pa</b><br><small class="nome">Protactínio</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">90</small><br><b class="principal">Th</b><br><small class="nome">Tório</small></article>
					</div>
					<div class="col-md-1 col-xs-18">

						<article data-name="actinidios" class="actinidios"><small class="numero">89</small><br><b class="principal">Ac</b><br><small class="nome">Actínio</small></article>
					</div>
				</div>
				<br>
				<div class="hub">
					<ul>
						<li id="nao-metais"><img src="imagens/verde.png" width="20" height="20">Não-metais</li>
						<li id="semi-metais"><img src="imagens/verde-escuro.png" width="20" height="20">Semi-metais</li>
						
					</ul>
					<ul class="ul-margin-left">
						<li id="gases-nobres"><img src="imagens/azul.png" width="20" height="20">Gases nobres</li>
						<li id="halogenios"><img src="imagens/azul-claro.png" width="20" height="20">Halogênios</li>
						
					</ul>
					<ul class="ul-margin-left">
						<li id="metais-alcalinos"><img src="imagens/laranja.png" width="20" height="20">Metais alcalinos</li>
						<li id="metais-representativos"><img src="imagens/cinza.png" width="20" height="20">Metais representativos</li>
						
					</ul>
					<ul class="ul-margin-left">
						<li id="metais-alcalino-terrosos"><img src="imagens/amarelo.png" width="20" height="20">Metais alcalino-terrosos</li>
						<li id="metais-de-transicao"><img src="imagens/rosa.png" width="20" height="20">Metais de transição</li>
					</ul>
					<ul class="ul-margin-left">
						<li id="lantanidios"><img src="imagens/roxo.png" width="20" height="20">Lantanídeos</li>
						<li id="actinidios"><img src="imagens/marrom.png" width="20" height="20">Actinídeos</li>

					</ul>

				</div>
			</div>

		</section>
		<!-- Scripts para Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    		<script src="js/bootstrap.min.js"></script>

    		<script>

    			$( document ).ready(function () {
    				$( "#nao-metais" ) 

    				.mouseenter(function () {
    					$('article[data-name="nao-metais"]').removeClass("nao-metais");
    					$('article[data-name="nao-metais"]').addClass("nao-metais2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="nao-metais"]').removeClass("nao-metais2");
    					$('article[data-name="nao-metais"]').addClass("nao-metais");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#gases-nobres" ) 

    				.mouseenter(function () {
    					$('article[data-name="gases-nobres"]').removeClass("gases-nobres");
    					$('article[data-name="gases-nobres"]').addClass("gases-nobres2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="gases-nobres"]').removeClass("gases-nobres2");
    					$('article[data-name="gases-nobres"]').addClass("gases-nobres");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#metais-alcalinos" ) 

    				.mouseenter(function () {
    					$('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
    					$('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos2");
    					$('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#metais-alcalino-terrosos" ) 

    				.mouseenter(function () {
    					$('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
    					$('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos2");
    					$('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#halogenios" ) 

    				.mouseenter(function () {
    					$('article[data-name="halogenios"]').removeClass("halogenios");
    					$('article[data-name="halogenios"]').addClass("halogenios2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="halogenios"]').removeClass("halogenios2");
    					$('article[data-name="halogenios"]').addClass("halogenios");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#metais-de-transicao" ) 

    				.mouseenter(function () {
    					$('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
    					$('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao2");
    					$('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#semi-metais" ) 

    				.mouseenter(function () {
    					$('article[data-name="semi-metais"]').removeClass("semi-metais");
    					$('article[data-name="semi-metais"]').addClass("semi-metais2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="semi-metais"]').removeClass("semi-metais2");
    					$('article[data-name="semi-metais"]').addClass("semi-metais");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#metais-representativos" ) 

    				.mouseenter(function () {
    					$('article[data-name="metais-representativos"]').removeClass("metais-representativos");
    					$('article[data-name="metais-representativos"]').addClass("metais-representativos2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="metais-representativos"]').removeClass("metais-representativos2");
    					$('article[data-name="metais-representativos"]').addClass("metais-representativos");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#lantanidios" ) 

    				.mouseenter(function () {
    					$('article[data-name="lantanidios"]').removeClass("lantanidios");
    					$('article[data-name="lantanidios"]').addClass("lantanidios2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="lantanidios"]').removeClass("lantanidios2");
    					$('article[data-name="lantanidios"]').addClass("lantanidios");
    				});
    			});

    			$( document ).ready(function () {
    				$( "#actinidios" ) 

    				.mouseenter(function () {
    					$('article[data-name="actinidios"]').removeClass("actinidios");
    					$('article[data-name="actinidios"]').addClass("actinidios2");
    				})

    				.mouseleave(function(){
    					$('article[data-name="actinidios"]').removeClass("actinidios2");
    					$('article[data-name="actinidios"]').addClass("actinidios");
    				});
    			});




    		</script>


	</body>
</html>
