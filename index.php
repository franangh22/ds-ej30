<?php
require_once 'modelo/Cliente.php';
require_once 'modelo/Proveedor.php';
require_once 'modelo/Producto.php';
require_once 'modelo/LineaVenta.php';
require_once 'modelo/Venta.php';
require_once 'modelo/DatosPersona.php';

#Instanciar CLIENTE
$C = new Cliente();
$C->Id = 1;
$C->Codigo = 123;
$C->Nombre = 'Bob';
$C->Apellido = 'Esponja';
$C->Documento = 32198435;
$C->Direccion = 'Fondo de bikini 1234';
$C->Telefono = '(+1) 90 12332466'; 
$C->Mail = 'Spongebob2000@gmail.com';


#Instanciar Proveedor
$Proveedor = new Proveedor();
$Proveedor-> Id = 1;
$Proveedor-> Codigo = 124542;
$Proveedor-> Direccion = 90222;
$Proveedor-> Telefono = 341001999;
$Proveedor-> Mail = 'HomeroSimpson@springfield.com';
$Proveedor-> RazonSocial = 'Planta Nuclear';
$Proveedor-> Cuit = 1234754;

#Instanciar Producto
$P = new Producto();
$P->Id = 1;
$P->Descripcion = 'Nike';
$P->Codigo = 2342545;
$P->PrecioVenta = '$xxxx';
$P->PrecioCompra = '$xxxx';
$P->Proveedor = $Proveedor;

#Instanciar LineaVenta
$LineaVenta = new LineaVenta();
$LineaVenta->Id = 1;
$LineaVenta->NumeroLinea = 124;
$LineaVenta->Producto = $P;
$LineaVenta->Subtotal = '$xxxx';
$LineaVenta->Cantidad = 10000;

#Instanciar VENTA
$Venta = new Venta();
$Venta->Id = 1;
$Venta->Fecha = date('d / m/ y , D');
$Venta->MontoTotal = '$2500000';
$Venta->Observaciones = 'test';
$Venta->Cliente=$C;
$Venta->LineaVenta=$LineaVenta;
$Venta->MostrarDatos();