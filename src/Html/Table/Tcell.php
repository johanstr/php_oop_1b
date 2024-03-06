<?php

class Tcell
{
   private mixed $content = '';

   public function __construct(mixed $value)
   {
      $this->content = $value;
   }

   public function draw()
   {
      echo '<td>';
      echo $this->content;
      echo '</td>';
   }
}