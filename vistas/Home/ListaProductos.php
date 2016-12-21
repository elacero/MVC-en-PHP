<h1>Listado de productos</h1>
<br>
<a href='app.php?controlador=home&accion=crear'>Nuevo producto</a>
<br>
<table>
<tr>
    <td>Id</td>
    <td>Producto</td>
    <td>Precio</td>
    <td>Stock</td>
</tr>
<?php

foreach($this->productos as $producto)
{
    echo "<tr>";
    echo "<td>".$producto->ProductID."</td>";
    echo "<td>".$producto->ProductName."</td>";
    echo "<td>".$producto->UnitPrice."</td>";
    echo "<td>".$producto->UnitsInStock."</td>";
    echo "</tr>";
}
?>
</table>