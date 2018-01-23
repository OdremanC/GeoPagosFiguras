<?php

// Declarar la interfaz 'FiguraGeometrica'
interface FiguraGeometrica
{
    public function getBase();
    public function getDiametro();
    public function getTipoDeFigura();
    public function getAltura();
    public function getSuperficie();
    
}

class Circulo implements FiguraGeometrica {
   public $tipoDeFigura = "Circulo";
    public function getDiametro(){
        $diametro = rand(5, 50);
        return "El Diametro es:". $diametro;
    }
    public function getBase(){
        
        return  "NULL";
    }
    public function getTipoDeFigura(){
        $tipoDeFigura = "Circulo";
        return $tipoDeFigura;
    }
    public function getAltura(){
        return "NULL";
    }
    public function getSuperficie(){
        return "NULL";
    }    

}

class Cuadrado implements FiguraGeometrica{
    public $tipoDeFigura = "Cuadrado";
    public function getBase(){
        $base = 8;
        return $base;
    }
    public function getDiametro(){
        $diametro = "NULL";
        return $diametro;
    }
    public function getTipoDeFigura(){
        $tipoDeFigura = "Cuadrado";
        return $tipoDeFigura;
    }
    public function getAltura(){
        return $altura = 8;
    }
    public function getSuperficie(){
        $base = 8;
        $superficie = $base * $base;
        return $superficie;
    }   	
}

class Triangulo implements FiguraGeometrica{
    public $tipoDeFigura = "Triangulo";
    public function getBase(){
        $base = rand(5, 50);
        return $base;
    }
    public function getDiametro(){
        return "NULL";
    }
    public function getTipoDeFigura(){
        $tipoDeFigura = "Triangulo";
        return $tipoDeFigura;
    }
    public function getAltura(){
        $altura = rand(5, 50);
        return $altura;
    }
    public function getSuperficie(){
        return ;
    }         
}

//clase que devuelve el objeto deseado mediante la instanciacion de la clase correspondiente
class Fabrica {

    public function crearFigura($nombre) {

    	switch ($nombre) {
    		case 'Circulo':
    			return new Circulo();
    			break;
    		case 'Cuadrado':
    			return new Cuadrado();
    			break;
    		case 'Triangulo':
    			return new Triangulo();
    			break;
    	}
    }
}


$clase = new Fabrica;

$figura = $clase->crearFigura("Cuadrado")->tipoDeFigura;
print_r($clase->crearFigura($figura)->getSuperficie()); "\n";


?>