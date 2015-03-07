<?php

class PersonalController Extends BaseController{
  public function getRegistrar($tipo,$nombre){
      if($tipo=="enfermera")
       
      echo "hola {$nombre} eres{$tipo}";
}
}

