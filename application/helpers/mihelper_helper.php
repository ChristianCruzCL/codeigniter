<?php
function getNombre(){
	return "<h1>Christian Cruz</h1>";
} 
function foo(){
	echo "Esto es un nuevo mensaje Foo";
}
function operaciones_basicas($n1,$n2,$operacion){
$resultado = 0;
if($operacion == "Sumar"){
	$resultado = $n1 + $n2;
}else if($operacion == "Restar"){
	$resultado = $n1 - $n2;
}else if($operacion == "Multiplicar"){
	$resultado = $n1 * $n2;
}
return $resultado;
}
function recursividad($a){
	if($a < 20){
		echo "$a\n";
		recursividad($a + 1);
	}
}
function buclefor(){
	for ($i=0; $i <=10 ; $i++) { 
		echo $i."<br>";
	}
}
function estructura(){
	echo '<!DOCTYPE html>
	<html>
	<body>
	Esta es una estructura cargada desde un helper personalizado llamado mihelper_helper.php
	</body>
	</html><br>';
}
function relojjavascript(){
	echo '<script language="JavaScript">
	function mueveReloj(){
		momentoActual = new Date()
    	hora = momentoActual.getHours()
    	minuto = momentoActual.getMinutes()
    	segundo = momentoActual.getSeconds()
    	str_segundo = new String (segundo)
    if (str_segundo.length == 1)
    segundo = "0" + segundo
	str_minuto = new String (minuto)
    if (str_minuto.length == 1)
       minuto = "0" + minuto
       str_hora = new String (hora)
    if (str_hora.length == 1)
       hora = "0" + hora
       horaImprimible = hora + " : " + minuto + " : " + segundo
       document.form_reloj.reloj.value = horaImprimible
       setTimeout("mueveReloj()",1000)
}
</script>
<body onload="mueveReloj()">
<form name="form_reloj">
<input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
</form>
</body>';
}
function redireccion(){
	echo '<script>
function confirmacion() {
	var pregunta = confirm("¿Deseas visitar la página principal?")
	if (pregunta){
		alert("Te envío allí rápidamente")
		window.location = "https://usam.edu.sv/";
	}
	else{
		alert("Quizás en otro momento...\n Gracias de todas formas")
	}
}
</script>
<button type="button" onclick="confirmacion()" >Probar confirm</button>';
}
?>