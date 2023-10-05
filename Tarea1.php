<?php
// Definir las variables necesarias
$sueldoBasico = 600;
$porcentajeComision = 7.5 / 100; // 7.5%
$descuentoPorcentaje = 11 / 100; // 11%
$bonificacionPorHijo = 50;

// Obtener el importe total vendido y la cantidad de hijos en edad escolar (puedes solicitar estos valores al usuario)
$importeTotalVendido = 1000; // Reemplaza con el importe total vendido
$cantidadHijosEnEdadEscolar = 2; // Reemplaza con la cantidad de hijos en edad escolar

// Calcular la comisión
$comision = $importeTotalVendido * $porcentajeComision;

// Calcular la bonificación por hijo
$bonificacion = $cantidadHijosEnEdadEscolar * $bonificacionPorHijo;

// Calcular el sueldo bruto
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;

// Calcular el descuento
$descuento = $sueldoBruto * $descuentoPorcentaje;

// Calcular el sueldo neto
$sueldoNeto = $sueldoBruto - $descuento;

// Mostrar los resultados
echo "Comisión: S/. " . $comision . "<br>";
echo "Bonificación: S/. " . $bonificacion . "<br>";
echo "Sueldo Bruto: S/. " . $sueldoBruto . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Sueldo Neto: S/. " . $sueldoNeto . "<br>";
?>
