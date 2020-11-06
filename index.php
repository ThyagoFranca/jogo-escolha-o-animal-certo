<?php

$animais_caracteristicas = [
    'leao' => [
        'nome' => 'Leão',
        'imagens'=> 'leao.png',
        'caracteristicas' => [
            ['Macho tem juba', 'leao/tem-juba.jpg'],
            ['Andam em bando', 'leao/em-bando.jpg']
        ]
    ],
    'tigre' => [
        'nome' => 'tigre',
        'imagens'=>'tigre.png',
        'caracteristicas' => [
            ['Maior de todos os felinos', 'tigre/maior-de-todos.jpg'],
            ['É um predador solitário', 'tigre/predador-solitario.jpg']
        ]
    ],
    'cachorro' => [
        'nome' => 'Cachorro',
        'imagens'=>'cachorro.png',
        'caracteristicas' => [
            ['Melhor amigo do home', 'cachorro/melhor-amigo.jpg'],
            ['Pode ser adestrado facilmente', 'cachorro/adestrado.jpg']
        ]
    ],
    'coruja' => [
        'nome' => 'Coruja',
        'imagens'=>'coruja.png',
        'caracteristicas' => [
            ['enxerga no escuro', 'coruja/noturna.jpg'],
            ['Pode girar o pescoço, quase atingindo um ângulo de 360º', 'coruja/gira-pescoço.jpg']
        ]
    ]
];

function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return true;
}

$escolha = $animais_caracteristicas;
shuffle_assoc($escolha);

$animais = array_keys($animais_caracteristicas);
$img_aleatoria  = rand(0, 3);
$img_aleatoria2 = (($img_aleatoria + 1) > 3 ) ? ($img_aleatoria - 1) : ($img_aleatoria + 1);
$animal_escolhido = $animais_caracteristicas[$animais[$img_aleatoria]];

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

        <style>
            body {
                background: lightgreen;
            }

            .card-img-top {
                width: 100%;
                height: auto;
                object-fit: cover;
                max-height: 250px;
                min-height: 250px;
            }

            .img-bott {
                width: 100%;
                height: 200px;
                object-fit: contain;
            }

        </style>
    </head>

    <body>
        <div class="container py-5" style="background: lightskyblue">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-image">
                        <img src="images/<?=$animal_escolhido['caracteristicas'][0][1]?>" class="img-fluid card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?=$animal_escolhido['caracteristicas'][0][0]?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-image">
                        <img src="images/<?=$animal_escolhido['caracteristicas'][1][1]?>" class="img-fluid card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?=$animal_escolhido['caracteristicas'][1][0]?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /container -->

        <div class="container mt-3" style="background: lightgreen">
            <div class="row">
                <?php
                    foreach ($escolha as $key => $elemento) : ?>
                        <div class="col-md-3">
                            <a href="retorno.php?apresentado=<?= $animais[$img_aleatoria] ?>&escolhido=<?= $key ?>">
                                <img class="img-fluid img-bott" src="images/<?= $elemento['imagens'] ?>">
                            </a>
                        </div>
                <?php endforeach; ?>
            </div>
        </div><!-- /container -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
