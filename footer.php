<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pie de pagina</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        ul {
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0;
}
.footer_area {
	padding:60px 0 20px;
	position: relative;
	color: #fff;
	z-index: 100;
	background: #000;
	word-break: break-all;
	word-wrap: break-word;
}

.single_ftr form{
	margin-top: 8px;
}
.single_ftr p{
	margin-bottom: 10px;
}

.sf_title{
    color: #cc4b00;
    text-transform: uppercase;
    font-size: 17px;
	margin-top: 0px;
	margin-bottom: 15px;
}
.ftr_logo {
    float: left;
    padding: 15px 46px 0 0;
}
.ftr_logo a img {
    transition: all 0.4s ease-in-out 0s;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    -o-transition: all 0.4s ease-in-out 0s;
}
.ftr_logo a:hover img {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    opacity: 0.3;
}
.newsletter_form form{
	position: relative;
	display: block;
}
.newsletter_form {
	margin-top: 0px;
	overflow: hidden;
}
.single_ftr p{
	display: inline-block;
}
.newsletter_form .form-control {
    height: 50px;
    line-height: 50px;
    margin: 0;
    padding: 8px 20px;
    width: 100%;
	position: relative;
	background: transparent;
	color: #fff;
	border-radius: 0;
}

.newsletter_form button {
	border: inherit;
	border-radius: 0;
	background: transparent;
	color: #fff;
	text-transform: uppercase;
	box-shadow: none;
	border: 1px solid transparent;
	transition: 0.5s;
	letter-spacing: 0.5px;
	position: absolute;
	right: 0px;
	top: 0;
	padding: 12px 17px;
	transition: .5s;
}
.newsletter_form button:hover,
.newsletter_form button:hover{
	background: transparent;
	color: #33d286;
	opacity: .9;
}
.newsletter_form ::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1
}

.newsletter_form ::-moz-placeholder {
    /* Firefox 19+ */
    color: #fff;
    opacity: 1
}
.newsletter_form :-ms-input-placeholder {
    /* IE 10+ */
    color: #fff;
    opacity: 1
}
.newsletter_form :-moz-placeholder {
    /* Firefox 18- */
    color: #fff;
    opacity: 1
}
.form-control{

}
.form-control:focus{
	border-color: #33d286;
}

.single_ftr li {
    padding-bottom: 7px;
    color: #fff;
}
.single_ftr a {
    color: #fff;
}
.single_ftr a:hover {
    color: #33d286;
}

.ftr_social_icon li {
	display: inline-block;
	text-align: center;
	padding: 4px;
}


.ftr_social_icon ul li a {
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: 17px;
    height: 40px;
    line-height: 32px;
    padding: 4px 8px;
    width: 40px;
	transition: .5s;
}
.ftr_social_icon ul li a:hover{
	background: #33d286;
	border-color: #33d286;
	color: #fff;
}

.ftr_btm_area {
	background: transparent;
	padding-top: 20px;
	padding-bottom: 20px;
	border-top: 1px dotted #888;
	margin-top: 28px;
	z-index: 100;
	position: relative;
}
.copyright_text{
    margin: 6px 0;
}
.payment_mthd_icon li {
	display: inline-block;
	margin-left: 10px;
	font-size: 30px;
	color: #fff;
}
    </style>
</head>

<body>

<footer class="footer_area">
			<div class="container">
				<div class="row">				
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Contactanos</h4>
							<ul>
								<li>AV Rivadavia / Saladillo, Bs. As.</li>
								<li> (02344)-450827</li>
								<li>libsfacundo@yahoo.com.ar</li>
							</ul>
						</div>
					</div> <!--  columna 1-->
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Politicas</h4>
							<ul>
								<li><a href="#">Legal</a></li>
								<li><a href="politica_de_privacidad.php">Politica de privacidad </a></li>
								<li><a href="terminos_condiciones.php">Terminos y Condiciones</a></li>
								<li><a href="https://www.instagram.com/_libreriafacundo_/?hl=es-la">Contactarnos</a></li>
							</ul>
						</div>
					</div> <!--  columna 2 -->
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Horarios</h4>
							<ul>
								<li><a>Lunes a Viernes</a></li>
								<li><a>9 a 13 hs  -  16 a 21 hs</a></li>
								<li><a>Sabado</a></li>
								<li><a>9 a 13 hs  -  17 a 21 hs</a></li>
							</ul>
						</div>
					</div> <!--columna 3 -->	
					
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">PRODUCTOS</h4>
							<ul>
								<li><a href="juguetes.php">JUGUETES</a></li>
								<li><a href="libros.php">LIBROS</a></li>
								<li><a href="articulos_escolares.php">ARTICULOS ESCOLARES</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->
					
				</div>
			</div>
	
		
			<div class="ftr_btm_area">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="ftr_social_icon">
								<ul>
									<li><a href="https://www.facebook.com/libreria.facundo"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/_libreriafacundo_/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.google.com/maps/contrib/107767443029582548986/place/ChIJJTJRXe_gvZURT0RCbRFozQ4/@-35.6363566,-59.7800479,16.3z/data=!4m6!1m5!8m4!1e1!2s107767443029582548986!3m1!1e1"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="copyright_text text-center">©2021 Todos los derechos reservados</p>
						</div>
						
						<div class="col-sm-4">
							<div class="payment_mthd_icon text-right">
								<ul>
									<li><i class="fa fa-cc-paypal"></i></li>
									<li><i class="fa fa-cc-visa"></i></li>
									<li><i class="fa fa-cc-mastercard"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
</body>
</html>