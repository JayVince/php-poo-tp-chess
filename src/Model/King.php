<?php

namespace App\Model;

use App\Model\PieceModel;

class King extends PieceModel
{

     public function __construct($white)
     {
          parent::__construct($white);
     }

     // Ajout d'une fonction de mouvement du pion

     // Ajout egalement d'une fonction de roque, mouvement specifique au King
}
