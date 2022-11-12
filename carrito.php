<?php
session_start();
$mensaje="";
if(isset($_POST['btnAccion']))
{
    switch($_POST['btnAccion'])
    {
        case 'Agregar':
            if(is_numeric(oprnssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="OK, todo correcto".$ID."</br>";
            }else {
                $mensaje.="ID incorrecto".$ID."</br>";
            }

            if (is_string(openssl_decrypt($_POST['nombre']))) {
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY)
                $mensaje.="OK, nombre".$NOMBRE."</br>";
            }else {
                $mensaje.="nombre incorrecto".$NOMBRE."</br>";
            }

            if (is_string(openssl_decrypt($_POST['precio']))) {
                $PRICE=openssl_decrypt($_POST['precio'],COD,KEY)
                $mensaje.="OK, precio".$PRICE."</br>";
            }else {
                $mensaje.="precio incorrecto".$PRICE."</br>";
            }

            if (is_string(openssl_decrypt($_POST['cantidad']))) {
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY)
                $mensaje.="OK, cantidad".$CANTIDAD."</br>";
            }else {
                $mensaje.="cantidad incorrecta".$CANTIDAD."</br>";
            }

            if (is_string(openssl_decrypt($_POST['imagen']))) {
                $IMAGEN=openssl_decrypt($_POST['imagen'],COD,KEY)
                $mensaje.="OK, imagen".$IMAGEN."</br>";
            }else {
                $mensaje.="imagen incorrecta".$IMAGEN."</br>";
            }
    }
    if (!isset($_SESSION['CARRITO'])) {
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,
            'IMAGEN'=>$IMAGEN
        );
        $_SESSION['CARRITO'] [0]=$producto;
        $mensaje="Producto agregado al carrito";
    } else {
        $idProductos=array_column($_SESSION['CARRITO'],"ID");
        if (in_array($ID,$idProductos)) {
            echo "<script>alert('El producto ya a sido seleccionado');</script>"
            $mensaje="";
        } else {
            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO,
                'IMAGEN'=>$IMAGEN
            );
            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            $mensaje="Producto agregado al carrito";
        }
    }
}
?>