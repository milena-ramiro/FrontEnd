<!DOCTYPE html>
<html>

	<head lang="pt-br">

			<meta charset="utf-8">
			<title>Facebook</title>

			<meta name="description" content="Recriando tela de login do Facebook">
			<meta name="keywords" content="facebook,login,estudos">
			<meta name="author" content="Milena Ramiro">
			
			<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

			<link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet"> 
			<link rel="stylesheet" type="text/css" href="css/style.css">

		</head>

	<body>

		<header>
			<div class="center">
				<div class="logo">
					<h2>Facebook</h2>
				</div>

				<form method="post" class="form-login">

					<div class="form-element">
						<p>E-mail ou telefone</p>
						<input type="email" name="email">
					</div>

					<div class="form-element">
						<p>Senha</p>
						<input type="password" name="senha">
					</div>

					<div class="form-element">
						<input type="submit" name="acao" value="Entrar">
					</div>

				</form>

				<div class="clear"></div>

			</div>
		</header>

		<section class="main">

			<div class="center">

				<div class="img-pessoas">
					<img src="images/img-login.png">
				</div>


				<div class="abrir-conta">
					<h2>Abra uma conta</h2>
					<h3>É gratuito e sempre será.</h3>

					<form class="criar-conta">
						<div class="w50">
							<input type="text" name="Nome" placeholder="Nome">
						</div>

						<div class="w50">
							<input type="text" name="Sobrenome" placeholder="Sobrenome">
						</div>

						<div class="w100">
							<input type="email" name="email" placeholder="E-mail">
						</div>

						<div class="w100">
							<input type="password" name="senha" placeholder="Senha">
						</div>

						<div class="w100">
							<h2>Data de nascimento:</h2>

							<select name="nascimento-dia" class="nascimento">

								<?php
									for($i = 1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>

							</select>

							<select name="nascimento-mes" class="nascimento">

								<option value="0">Janeiro</option>
								<option value="1">Fevereiro</option>
								<option value="2">Março</option>
								<option value="3">Abril</option>
								<option value="4">Maio</option>
								<option value="5">Junho</option>
								<option value="6">Julho</option>
								<option value="7">Agosto</option>
								<option value="8">Setembro</option>
								<option value="9">Outubro</option>
								<option value="10">Novembro</option>
								<option value="11">Dezembro</option>

							</select>

							<select name="nascimento-ano" class="nascimento">


								<?php
									for($i = 1980; $i <= 2020; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>


							</select>

							<div class="clear"></div>
								
						</div> <!-- NASCIMENTO -->

						<div class="w100">
							<div class="input-radio">
								<input name="sexo" type="radio" value="masculino">
								<h2>Masculino</h2>
							</div>

							<div class="input-radio">
								<input name="sexo" type="radio" value="feminino">
								<h2>Feminino</h2>
							</div>

							<div class="clear"></div>

						</div> <!-- FIM SEXO -->

						<div class="w100">
							<input type="submit" name="acao" value="Cadastre-se">
						</div>

						<div class="clear"></div>

					</form> <!--criar-conta-->

				</div><!--abrir-conta-->


				<div class="clear"></div>

			</div> <!--center-->

		</section> <!-- FIM MAIN -->


		<section class="linguas">
			<div class="center">
				
				<a class="selected-lingua" href="#">Português (BR)</a>
				<a class="" href="#">English (US)</a>
				<a class="" href="#">Español</a>
				<a class="" href="#">Français (France)</a>
				<a class="" href="#">Italiano</a>
				<a class="" href="#">العربية</a>
				<a class="" href="#">Deutsch</a>
				<a class="" href="#">हिन्दी</a>
				<a class="" href="#">中文(简体)</a>
				<a class="" href="#">日本語</a>

			</div>
		</section> <!-- FIM LINGUAS -->


		<section class="rodape">
			<div class="center">
				
				<div class="form-outros">
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
					<a href="#">Lorem Ipsum</a>
				</div>

			</div>
		</section>

	</body>

</html>