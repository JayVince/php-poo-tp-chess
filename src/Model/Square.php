<?php

namespace App\Model;

class Square
{

     /**
      * 
      */
     protected int $x;
     /**
      * 
      */
     protected int $y;
     /**
      * 
      */
     protected string $piece;

     /**
      *Représentation d'une case sur le plateau du jeu
      *
      * @param integer $x case sur l'axe X
      * @param integer $y case sur l'axe Y
      * @param string $piece type de pion
      */
     public function __construct(
          int $x = null,
          int $y = null,
          string $piece = ""
     ) {
          $this->x = $x;
          $this->y = $y;
          $this->piece = $piece;
     }

     /**
      * Get case X
      *
      * @return void
      */
     public function getX()
     {
          return $this->x;
     }

     /**
      * Get case Y
      *
      * @return void
      */
     public function getY()
     {
          return $this->y;
     }

     /**
      * Get type du pion
      *
      * @return void
      */
     public function getPiece()
     {
          return $this->piece;
     }

     public function setPiece(string $piece)
     {
          $this->piece = $piece;

          return $this;
     }
}
