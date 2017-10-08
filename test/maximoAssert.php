<?php
    require_once "maximo.php";
		use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
		class maximoAssert extends TestCase{

              // Comprueba si son todos  negativos.
          public function testTodosNegativos(){

             $a=[3,-55,-12,-78,-567];
             $res = todosNegativos($a);
             $this->assertFalse($res);

          }



    }



?>
