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

<h1>Listado de coches</h1>
<p>
    <a href="/propietarios.php">Ver propietarios</a>
</p>
<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
    </tr>
    <?php foreach ($rowset as $key => $row): ?>

        <tr>
            <td><?php printf("<a href=\"/index.php/ver/%s\">%s</a>", $key, $row->getMarca()) ?></td>
            <td><?php echo $row->getModelo() ?></td>
            <td><?php echo $row->getColor() ?></td>
            <td>
                <a href="/propietarios.php/ver/<?=$row->getPropietario()?>">
                <?php echo $row->getPropietario() ?>
                </a>
            </td>
        </tr>

     <?php endforeach; ?>
</table>