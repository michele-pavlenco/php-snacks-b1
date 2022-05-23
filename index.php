<?php 
$partite = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantu',
        'puntiCasa' => '55',
        'puntiOspite' => '60',
    ],
    [
        'casa' => 'Brescia',
        'ospite' => 'Virtus Bologna',
        'puntiCasa' => '80',
        'puntiOspite' => '50',
    ],
    [
        'casa' => 'Los Angeles Leakers',
        'ospite' => 'Chicago Bulls',
        'puntiCasa' => '100',
        'puntiOspite' => '95',
    ]
];
for ($i=0; $i < count($partite); $i++) {
    ?>
        <p>
          <?= $partite[$i]['casa'] ?> -
          <?= $partite[$i]['ospite'] ?> |
          <?= $partite[$i]['puntiCasa'] ?> -
          <?= $partite[$i]['puntiOspite'] ?>
        </p>
    <?php
    }
?>