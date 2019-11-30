<?php if (!defined('BASEPATH')) exit('No se permite acceso directo al script');
	class Mi_clase2{
	public function bucleforlibreriatablasmultiplicar(){
		$tabla = 2;
		for($i=1; $i<=10; $i++){
			echo ($tabla.' x '.$i.' = '.$tabla*$i.'<br>');
		}
}
}
?>