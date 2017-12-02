$( document ).ready(function () {
	$( "#nao-metais" ) 

	.mouseenter(function () {
                     // Adiciona cor
	$('article[data-name="nao-metais"]').removeClass("nao-metais");
	$('article[data-name="nao-metais"]').addClass("nao-metais2");
                     // Tira a cor dos outros elementos
                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
                     // Volta a cor
	$('article[data-name="nao-metais"]').removeClass("nao-metais2");
	$('article[data-name="nao-metais"]').addClass("nao-metais");
                     // Volta a cor dos outros elementos
                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#gases-nobres" ) 

	.mouseenter(function () {

	$('article[data-name="gases-nobres"]').removeClass("gases-nobres");
	$('article[data-name="gases-nobres"]').addClass("gases-nobres2");

                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){

	$('article[data-name="gases-nobres"]').removeClass("gases-nobres2");
	$('article[data-name="gases-nobres"]').addClass("gases-nobres");

                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#metais-alcalinos" ) 

	.mouseenter(function () {

	$('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
	$('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos2");
	$('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");

                     
	});
});

$( document ).ready(function () {
	$( "#metais-alcalino-terrosos" ) 

	.mouseenter(function () {

	$('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
	$('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos2");
	$('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#halogenios" ) 

	.mouseenter(function () {
	$('article[data-name="halogenios"]').removeClass("halogenios");
	$('article[data-name="halogenios"]').addClass("halogenios2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="halogenios"]').removeClass("halogenios2");
	$('article[data-name="halogenios"]').addClass("halogenios");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#metais-de-transicao" ) 

	.mouseenter(function () {
	$('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
	$('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao2");
	$('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#semi-metais" ) 

	.mouseenter(function () {
	$('article[data-name="semi-metais"]').removeClass("semi-metais");
	$('article[data-name="semi-metais"]').addClass("semi-metais2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="semi-metais"]').removeClass("semi-metais2");
	$('article[data-name="semi-metais"]').addClass("semi-metais");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#metais-representativos" ) 

	.mouseenter(function () {
	$('article[data-name="metais-representativos"]').removeClass("metais-representativos");
	$('article[data-name="metais-representativos"]').addClass("metais-representativos2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="metais-representativos"]').removeClass("metais-representativos2");
	$('article[data-name="metais-representativos"]').addClass("metais-representativos");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#lantanidios" ) 

	.mouseenter(function () {
	$('article[data-name="lantanidios"]').removeClass("lantanidios");
	$('article[data-name="lantanidios"]').addClass("lantanidios2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
                     $('article[data-name="actinidios"]').removeClass("actinidios");
                     $('article[data-name="actinidios"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="lantanidios"]').removeClass("lantanidios2");
	$('article[data-name="lantanidios"]').addClass("lantanidios");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
                     $('article[data-name="actinidios"]').removeClass("opaco");
                     $('article[data-name="actinidios"]').addClass("actinidios");
	});
});

$( document ).ready(function () {
	$( "#actinidios" ) 

	.mouseenter(function () {
	$('article[data-name="actinidios"]').removeClass("actinidios");
	$('article[data-name="actinidios"]').addClass("actinidios2");

                     $('article[data-name="gases-nobres"]').removeClass("gases-nobres");
                     $('article[data-name="gases-nobres"]').addClass("opaco");
                     $('article[data-name="matais-alcalinos"]').removeClass("metais-alcalinos");
                     $('article[data-name="matais-alcalinos"]').addClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("metais-alcalino-terrosos");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("opaco");
                     $('article[data-name="halogenios"]').removeClass("halogenios");
                     $('article[data-name="halogenios"]').addClass("opaco");
                     $('article[data-name="metais-de-transicao"]').removeClass("metais-de-transicao");
                     $('article[data-name="metais-de-transicao"]').addClass("opaco");
                     $('article[data-name="semi-metais"]').removeClass("semi-metais");
                     $('article[data-name="semi-metais"]').addClass("opaco");
                     $('article[data-name="metais-representativos"]').removeClass("metais-representativos");
                     $('article[data-name="metais-representativos"]').addClass("opaco");
                     $('article[data-name="lantanidios"]').removeClass("lantanidios");
                     $('article[data-name="lantanidios"]').addClass("opaco");
                     $('article[data-name="nao-metais"]').removeClass("nao-metais");
                     $('article[data-name="nao-metais"]').addClass("opaco");
	})

	.mouseleave(function(){
	$('article[data-name="actinidios"]').removeClass("actinidios2");
	$('article[data-name="actinidios"]').addClass("actinidios");

                     $('article[data-name="gases-nobres"]').removeClass("opaco");
                     $('article[data-name="gases-nobres"]').addClass("gases-nobres");
                     $('article[data-name="matais-alcalinos"]').removeClass("opaco");
                     $('article[data-name="matais-alcalinos"]').addClass("metais-alcalinos");
                     $('article[data-name="metais-alcalino-terrosos"]').removeClass("opaco");
                     $('article[data-name="metais-alcalino-terrosos"]').addClass("metais-alcalino-terrosos");
                     $('article[data-name="halogenios"]').removeClass("opaco");
                     $('article[data-name="halogenios"]').addClass("halogenios");
                     $('article[data-name="metais-de-transicao"]').removeClass("opaco");
                     $('article[data-name="metais-de-transicao"]').addClass("metais-de-transicao");
                     $('article[data-name="semi-metais"]').removeClass("opaco");
                     $('article[data-name="semi-metais"]').addClass("semi-metais");
                     $('article[data-name="metais-representativos"]').removeClass("opaco");
                     $('article[data-name="metais-representativos"]').addClass("metais-representativos");
                     $('article[data-name="lantanidios"]').removeClass("opaco");
                     $('article[data-name="lantanidios"]').addClass("lantanidios");
                     $('article[data-name="nao-metais"]').removeClass("opaco");
                     $('article[data-name="nao-metais"]').addClass("nao-metais");
	});
});