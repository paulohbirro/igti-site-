<?php	
	get_header();
?>

<!--  PÁGINA HOME  -->

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script type="text/javascript">

$(function(){
  $("a").click(function (event) {
    event.preventDefault();
    var idElemento = $(this).attr("href");
    var deslocamento = $(idElemento).offset().top;
    $('html, body').animate({ scrollTop: deslocamento }, 'slow');
  });
});
</script>

<div  class="container-fluid">
	<div class="row">
		<div id="menu_topo"  class="col-md-4">
		 <a  data-toggle="collapse" data-parent="#panel-73087" href="#panel-element-31298">
		 		<img  src="<?=get_template_directory_uri()."/img/menu_movel.png";?>">
		 </a>
<div style="border-radius: 10px;"  id="panel-element-31298" class="panel-collapse collapse">
<div class="panel-body">

<ul class="nav navbar-nav">
	<li><a  href="#link1">Sobre</a></li>
	<li><a href="#link2">Polos dos Cursos</a></li>
	<li><a href="#">Pós-Graduação</a></li>

 </ul>
</div>
</div>


</div>

<div style="text-align: center;" class="col-md-4 text-right">
 <img  src="<?=get_template_directory_uri()."/img/logo.png";?>">
		</div>
		<div id="link_contato" class="col-md-4">Contato
		</div>
</div>

</div>


    <div class="container-fluid">
    	</div>	
             <div id="banner_meio" class="row" >
                <div style="height:500px; padding-top: 100px; text-align: center; color: #00FFFF; " class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 style="font-weight: 600; font-size: 50px;" class="mbr-section-title display-1">Estude a distância</h1>
                    <p class="mbr-section-lead lead" style="font-weight: 600; font-size: 50px;">com aulas semnais por <br> videoconferência</p>
                    <div style="text-align: center;" class="mbr-section-btn"><a class="btn btn-blue btn-lg btn-primary" href="#">Inscreva-se para <br>uma analise de perfil</a> 

                    <span style="padding-left: 20px;">

                    <a class="btn btn-black btn-lg" href="https://mobirise.com">Conheça  <br> nossos cursos</a>
</span>
                    </div>
                </div>
            </div>
        </div>
    
	<div class="row">
		<div  class="col-md12">
			<h1 id="titulo_pos_graduacao">Por que somos a melhor <br> pós-graduação do pais?</h1>
		</div>
	</div>
	
	
	<!--  3 ICONES IMAGEM  -->

	<div id="linha_icones_home" class="row">
		<div  class="col-md-4">
			<img  src="<?=get_template_directory_uri()."/img/camera.png";?>">
		</div>
		<div  class="col-md-4">
			<img  src="<?=get_template_directory_uri()."/img/percentual.png";?>">
		</div>
		<div  class="col-md-4">
			<img  src="<?=get_template_directory_uri()."/img/aluno.png";?>">
		</div>
</div>

	<!--  TEXTO ABAIXO 3 ICONES -->

	<div id="icones_curso" class="row">
		<div  id="icone_ativdade" class="col-md-4">
			<h3>50% do curso <br> em atividades <br>  interativas</h3>
		</div>
		
		<div id="icone_aluno" class="col-md-4">
			<h3>50% do curso <br> em atividades <br>  interativas</h3>
		</div>

		<div id="icone_retencao" class="col-md-4">
			<h3>50% do curso <br> em atividades <br>  interativas</h3>
		</div>
	</div>

	<!--  BOXE DE TEXTOS ABAIXO DOS ICONES  -->

	<div id="icones_curso" class="row icones_curso">
		<div  id="icone_ativdade" class="col-md-4">
			As aulas interativas semanais <br> permitem ao aluno esclarecer <br> as suas dúvidas ao vivo
		</div>

		<div id="icone_aluno" class="col-md-4">
			As aulas interativas semanais <br> permitem ao aluno esclarecer <br> as suas dúvidas ao vivo
		</div>

		<div id="icone_retencao" class="col-md-4">
			As aulas interativas semanais <br> permitem ao aluno esclarecer <br> as suas dúvidas ao vivo
		</div>
		</div>			
	
<section id="link1"></section>


<!-- PÁGINA COMO FUNCIONA -->
<div  id="box_c_funciona" class="row">
		<div  class="col-md-12">
			<h1 id="title_c_funciona" >Como funciona</h1>
			
		</div>

</div>

<div  class="row cinza">
	<div class="col-md-6 cinza">
	<img class="img-responsive  img-thumbnail" src="<?=get_template_directory_uri()."/img/img_funciona.png";?>">
	</div>

		<div class="col-md-6 cinza">
		<div id="boxe_menor_f"><h1>Modelo de <br> ensino inovador</h1>
				nonnnonono nonononono onn onno no on  oo non no nono no no no no nno o
			nonnnonono nonononono onn onno no on  oo non no nono no no no no nno ooo ooo	
			<br><br><a href="http://igti.com.br/cursos" class="btn btn-black"><span>Conheça nossos<br> cursos</span></a>
			</div>

		</div>
</div>

<div  class="row cinza">
		<div class="col-md-6 cinza">
		<div id="boxe_menor_esquerda"><h1>Modelo de <br> ensino inovador</h1>
				nonnnonono nonononono onn onno no on  oo non no nono no no no no nno o
			nonnnonono nonononono onn onno no on  oo non no nono no no no no nno ooo ooo	
			<br><br><a href="http://igti.com.br/cursos" class="btn btn-black"><span>Conheça nossos<br> cursos</span></a>
			</div>
		</div>

		<div class="col-md-6 cinza">

			<img class="img-responsive  img-thumbnail" src="<?=get_template_directory_uri()."/img/img_funciona2.png";?>">
		

		</div>
</div>

<div  class="row cinza">
		<div class="col-md-6 cinza">
			<img class="img-responsive  img-thumbnail" src="<?=get_template_directory_uri()."/img/img_funciona3.png";?>"><br><br>
		</div>

		<div class="col-md-6 cinza">
		<div id="boxe_menor_f"><h1>Modelo de <br> ensino inovador</h1>
				nonnnonono nonononono onn onno no on  oo non no nono no no no no nno o
			nonnnonono nonononono onn onno no on  oo non no nono no no no no nno ooo ooo	
			<br><br><a href="http://igti.com.br/cursos" class="btn btn-black"><span>Conheça nossos<br> cursos
			</span></a>
			</div>

		</div>
</div>

<!-- FIM FUNCIONA -->


<!-- MAPA FUNCIONA -->


<div style="background-color: #FAFAFA;"  class="row">
		<div class="cold-md-12">

				<h1 id="titulo_pos_graduacao">Milhares de alunos  <br> em todo pais?</h1>
				<section id="link2"></section>
		</div>	

		<div class="col-md-2"></div>
		<div class="col-md-4">

		<h2  style="font-weight: 600; text-align: justify; ">Polos para <br> o encontro  ao final <br> do curso

		</h2>

		<ul id="lista_estados" ">
		<li><a class="link_mapas" href="">Belo Horizonte</a></li>
		<li><a class="link_mapas"  href="">Brasília</a></li>
		<li><a class="link_mapas"  href="">Curitiba</a></li>
		<li><a class="link_mapas"  href="">Florianapolis</a></li>
		<li><a class="link_mapas"  href="">Fortaleza</a></li>
		<li><a class="link_mapas"  href="">Manaus</a></li>
		<li><a class="link_mapas"  href="">Porto alegre</a></li>
		<li><a class="link_mapas"  href="">Recife</a></li>
		<li><a class="link_mapas"  href="">Rio de janeiro</a></li>
		<li><a class="link_mapas"  href="">São Paulo</a></li>
		<li><a class="link_mapas"  href="">Salvador</a></li>
		<li><a class="link_mapas"  href="">Vitoria</a></li>	
		</ul>	
		<a href="#" class="btn btn-black">Conheça o local do <br> seu encontro presencial</a>	
		</div>
		<div class="col-md-6">
				<img class="img-responsive  img-thumbnail" src="<?=get_template_directory_uri()."/img/mapa.png";?>">
		</div>
		

</div>

</div>

<?php get_footer();?>