<?php

namespace App\Model;

abstract class PieceModel
{

     /**
      * Couleur du pion
      */
     protected bool $white;
     /**
      * Etat du pion du joueur
      */
     protected bool $killed;

     public function __construct(
          bool $white = false,
          bool $killed = false
     ) {
          $this->white = $white;
          $this->killed = $killed;
     }

     /**
      * Get couleur du pion
      *
      * @return void
      */
     public function getPieceWhite()
     {
          return $this->white;
     }

     /**
      * Get état du pion du joueur
      *
      * @return void
      */
     public function getPieceKilled() {
          return $this->killed;
     }

     /**
      * Set couleur du pion du joueur
      *
      * @param bool $white
      * @return self
      */
     public function setPieceWhite($white) {
          $this->white = $white;

          return $this;
     }

     /**
      * Set état du pion du joueur
      *
      * @param bool $killed
      * @return self
      */
     public function setPieceKilled($killed) {
          $this->killed = $killed;

          return $this;
     }
}
