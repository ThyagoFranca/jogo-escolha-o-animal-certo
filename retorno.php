<?php
    $correto = $_GET['apresentado'];
    $escolhido = $_GET['escolhido'];
?>

<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mapa Back-End 1">
        <meta name="author" content="Thyago França">

        <title>Mapa Back-End 1</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    
    <body>
    	<?php if($correto === $escolhido) { ?>
    		<p>Você acertou! O animal secreto é <?= $escolhido ?></p>
    	<?php } else { ?>
        	<p>Você escolheu: <strong><?= $escolhido ?></strong>. A opção correta é: <strong><?= $correto ?></strong>.</p>
    	<?php } ?>

        <div class="text-center mt-5">
            <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
        </div>

    </body>
</html>
