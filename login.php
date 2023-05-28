<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="calculadora">
		<div class="display">
			<input type="text" id="resultado" readonly>
		</div>
		<div class="botones">
			<button onclick="agregarNumero('7')">7</button>
			<button onclick="agregarNumero('8')">8</button>
			<button onclick="agregarNumero('9')">9</button>
			<button onclick="operacion('+')">+</button>
			<button onclick="agregarNumero('4')">4</button>
			<button onclick="agregarNumero('5')">5</button>
			<button onclick="agregarNumero('6')">6</button>
			<button onclick="operacion('-')">-</button>
			<button onclick="agregarNumero('1')">1</button>
			<button onclick="agregarNumero('2')">2</button>
			<button onclick="agregarNumero('3')">3</button>
			<button onclick="operacion('*')">*</button>
			<button onclick="agregarNumero('0')">0</button>
			<button onclick="agregarNumero('.')">.</button>
			<button onclick="borrar()">C</button>
			<button onclick="operacion('/')">/</button>
			<button onclick="calcular()">=</button>
		</div>
	</div>
	
	<script src="script.js"></script>
</body>
</html>
<?php
  if (isset($_POST['calcular'])) {
    $operacion = $_POST['operacion'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    switch ($operacion) {
      case 'sumar':
        $resultado = $num1 + $num2;
        break;
      case 'restar':
        $resultado = $num1 - $num2;
        break;
      case 'multiplicar':
        $resultado = $num1 * $num2;
        break;
      case 'dividir':
        if ($num2 == 0) {
          $resultado = 'Error';
        } else {
          $resultado = $num1 / $num2;
        }
        break;
    }
  }
?>