<?php
@include_once('Trow.php');

class Table
{
   private array $content = [];

   public function __construct(array $data)
   {
      foreach($data as $rij) {
         $this->content[] = new Trow($rij);
      }
   }

   public function draw()
   {
      echo '<table border="1">';

      // Geef iedere rij in content de draw opdracht
      foreach($this->content as $rowObject) {
         $rowObject->draw();
      }
      echo '</table>';
   }
}