<?php require 'pages/header.php' ?>
	<form method="POST" id="form" class="formulario"onsubmit="validar();" class="formulario">
		<div class="form-group row">
  			<div class="col-xs-2"><br>
  				Nome:
        		<input class="form-control" type="text" name="caractere" id="caractere" autocomplete="off" required><br>
				
				Data de Nascimento:
				<input class="form-control" type="text" id="txtData" maxlength="10" onkeyup="mask_date();" required><br>

				Email:
					<input class="form-control" type="email" nome="email" autocomplete="off" required><br>

				CEP:
					<input class="form-control" type="text" id="txtCEP" maxlength="9" name="cep"onkeyup="mask_cep();" value="" size="10" required><br>
		        Cidade:
		        	<input class="form-control" name="cidade" type="text" id="cidade" size="40"><br>

		        Estado:
		        	<input class="form-control" name="uf" type="text" id="uf" size="2"><br>

				Celular:
					<input class="form-control" type="text" id="txtCel" maxlength="15" onkeyup="mask_cel();" required><br>

				<button type="submit" class="btn btn-outline-dark">ENVIAR</button>
			</div>
		</div>
		<div class="box-selecionado">
			<img src="img/calca1.jpg">
		</div>
	</form>
<script type="text/javascript" src="js/validacao.js"></script>
<?php require 'pages/footer.php' ?>