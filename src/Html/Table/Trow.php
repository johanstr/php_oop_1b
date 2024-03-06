<?php
@include_once('Tcell.php');

class Trow
{
   private array $content = [];

   public function __construct(array $data)
   {
      foreach($data as $index => $value) {
         $this->content[] = new Tcell($value);
      }
   }

   public function draw()
   {
      echo '<tr>';
      foreach($this->content as $cel) {
         $cel->draw();
      }
      echo '</tr>';
   }
}