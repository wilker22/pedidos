<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema de pedidos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale= 1">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">	
		<script> var base_url = "<?php echo URL_BASE ?>"</script>
				
	</head>
	<body>
		<div class="conteudo">
			<div class="base-caixa">
				<?php include_once 'cabecalho.php';?>
				<section>
					<?php $this->load($view, $viewData); //REtorna a home ?>
					<?php include_once 'rodape.php';?>
				</section>
			</div>
		</div>
		
		
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/js_pedido.js"></script>
	</body>
</html>