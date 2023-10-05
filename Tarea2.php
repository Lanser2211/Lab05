<?php
$precioActualGaseosa = 10; 
$cantidadUnidadesAdquiridas = 5; 

$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * 0.05);

$importeCompra = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;

$importeDescuento = $importeCompra * 0.07;

$importeAPagar = $importeCompra - $importeDescuento;

$obsequioCaramelos = $cantidadUnidadesAdquiridas * 2;

echo "Nuevo Precio de la Gaseosa: S/. " . $nuevoPrecioGaseosa . "<br>";
echo "Importe de la Compra: S/. " . $importeCompra . "<br>";
echo "Importe del Descuento: S/. " . $importeDescuento . "<br>";
echo "Importe a Pagar: S/. " . $importeAPagar . "<br>";
echo "Obsequio: " . $obsequioCaramelos . " caramelos<br>";
?>
