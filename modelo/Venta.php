<?php
class Venta
{
    public $Id;
    public $Fecha;
    public $MontoTotal;
    public $Observaciones;
    public $LineaVenta;
    public $Cliente;

    public function MostrarDatos()
    {
        echo '--->VENTA <br>';
        echo '--> ID: ' . $this->Id . '<br>'; 
        echo '--> Fecha: ' . $this->Fecha . '<br>';
        echo '--> Monto Total: ' . $this->MontoTotal . '<br>';
        echo '--> Observaciones: ' . $this->Observaciones . '<br>';

        echo '<hr> ----> Linea Venta <br>';
        echo '--> ID: ' . $this->LineaVenta->Id . '<br>';
        echo '--> Numero de linea: ' . $this->LineaVenta->NumeroLinea . '<br>';
        echo '--> Subtotal: ' . $this->LineaVenta->Subtotal . '<br>';
        echo '--> Cantidad: ' . $this->LineaVenta->Cantidad . '<br>';

        echo '<hr> ----> Producto <br>';
        echo '---> ID: ' . $this->LineaVenta->Producto->Id . '<br>';
        echo '---> Descripcion: ' . $this->LineaVenta->Producto->Descripcion . '<br>';
        echo '---> Codigo: ' . $this->LineaVenta->Producto->Codigo . '<br>';
        echo '---> Precio de venta: ' . $this->LineaVenta->Producto->PrecioVenta . '<br>';
        echo '---> Precio de compra: ' . $this->LineaVenta->Producto->PrecioCompra . '<br>';

        echo '<hr> ------> Proveedor <br>';
        echo '-----> ID: ' . $this->LineaVenta->Producto->Proveedor->Id . '<br>';
        echo '-----> Cuit: ' . $this->LineaVenta->Producto->Proveedor->Cuit. '<br>';
        echo '-----> Razon Social: ' . $this->LineaVenta->Producto->Proveedor->RazonSocial . '<br>';
        echo '-----> Codigo: ' . $this->LineaVenta->Producto->Proveedor->Codigo . '<br>';
        echo '-----> Direccion: ' . $this->LineaVenta->Producto->Proveedor->Direccion . '<br>';
        echo '-----> Telefono: ' . $this->LineaVenta->Producto->Proveedor->Telefono . '<br>';
        echo '-----> Mail: ' . $this->LineaVenta->Producto->Proveedor->Mail . '<br>';

        echo '<hr> -----> Cliente <br>';
        echo '----> ID: ' . $this->Cliente->Id . '<br>';
        echo '----> Nombre: ' . $this->Cliente->Nombre . '<br>';
        echo '----> Apellido: ' . $this->Cliente->Apellido . '<br>';
        echo '----> Documento: ' . $this->Cliente->Documento . '<br>';
        echo '----> Codigo: ' . $this->Cliente->Codigo . '<br>';
        echo '----> Direccion: ' . $this->Cliente->Direccion . '<br>';
        echo '----> Telefono: ' . $this->Cliente->Telefono . '<br>';
        echo '----> Mail: ' . $this->Cliente->Mail . '<br>';
    }
}
