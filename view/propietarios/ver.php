<style>
    th{
        width: 8rem;
        text-align: left;
        border-bottom: 1px solid black;
    }
    td{
        width: 8rem;
    }
</style>

<h1>Detalle de un propietario</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>

    <tr>
        <td><?php echo $propietario->nombre ?></td>
        <td><?php echo $propietario->edad ?></td>
    </tr>
</table>
<p>
    <a href="/index.php">Volver al listado</a>
</p>