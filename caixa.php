<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>vendas</title>
	<?php require_once "menu.php"; ?>
	<link rel="stylesheet" href="css/caixa.css">
</head>
<body>

	<div class="container">
		 <h1>Venda de Produtos</h1>
		 
		 	<div class="col-sm-4">
		 		<div class="borda">
		 		</div>	
		 	
		 	</div>


		 	
		 
		 
		 	<div class="col-sm-8">
		 		
		 		<div id="vendasFeitas">

		 			
<?php 

	
	//require_once "vendas/vendasRelatorios.php" 

	?>

		 		</div>
		 	</div>
		
	</div>
</body>
</html>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#vendaProdutosBtn').click(function(){
				esconderSessaoVenda();
				$('#vendaProdutos').load('vendas/vendasDeProdutos.php');
				$('#vendaProdutos').show();
			});
			$('#vendasFeitasBtn').click(function(){
				esconderSessaoVenda();
				$('#vendasFeitas').load('vendas/vendasRelatorios.php');
				$('#vendasFeitas').show();
			});
		});

		function esconderSessaoVenda(){
			$('#vendaProdutos').hide();
			$('#vendasFeitas').hide();
		}

	</script>

<?php 
	}else{
		header("location:../index.php");
	}
 ?>