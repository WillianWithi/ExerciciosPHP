<?php
	if(isset($_POST['prato'])){
        $soma = $_POST['prato'] + $_POST['sobremesa'] + $_POST['bebida'];
        echo 'Consumirar um total de '.$soma.' calorias';
	}else{	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Calorias</title>
	</head>

	<body>
		<form method="POST" action="">
  			prato:
  				<select name="prato">
  					<option value="180">Vegetariano</option>
  					<option value="230">Peixe</option>
  					<option value="250">Frango</option>
  					<option value="350">Carne</option>
	   			</select>  
	  		Sobremesa:
	  			<select name="sobremesa">
	  				<option value="75">Abacaxi</option>
	  				<option value="110">Sorvete Diet</option>
	  				<option value="170">Mousse Diet</option>
	  				<option value="200">Mousse de Chocolate</option>
		        </select>
	  		Bebidas: 
	  			<select name="bebida">
	  				<option value="20">Chá</option>
	  				<option value="70">Suco de Laranja</option>
	  				<option value="100">Suco de Melão</option>
	  				<option value="65">Refrigerante Diet</option>
		   		</select>
		   	<input type="submit" value="Calcular"/>
	   	</form>    
	</body>
</html>
<?php
   }
?>