<?php

namespace App\Model;

use App\Model\PieceModel;

class Knight extends PieceModel
{
     public function __construct($white)
     {
          parent::__construct($white);
     }

     // Ajout d'une fonction de mouvement du pion
}
