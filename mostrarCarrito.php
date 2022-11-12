<?php
    include 'skydash/global/ServerConfiguration.php';
    include 'skydash/global/DbConnection.php';
    include 'carrito.php'
    include 'templates/cabecera.php'
?>
<br>

<h3>Lista del Carrito</h3>
<?php if (!empty($_SESSION['CARRITO'])) { ?>
<table class="">
    <tbody>
    <tr>
        <th width="40%">Descripcion</th>
    </tr>
    </tbody>
</table>
    <?php $total=0; ?>
    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
            <td width="20%" class="text-center">$<?php echo $producto['PRECIO'] ?></td>
            <td width="20%" class="text-center">$
                <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
            <td width="5%"></td>
        </tr>

        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">            
        </form>
    <?php } ?>

<?php } else{ ?>
<div>
    No hay productos en el carrito
</div>
<?php } ?> 