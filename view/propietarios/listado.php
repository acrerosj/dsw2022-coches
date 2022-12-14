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

<h1>Listado de Propietarios</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>
    <?php foreach ($propietarios as $p): ?>

        <tr>
            <td>
                <a href="/propietarios.php/ver/<?=$p->nombre?>">
                <?php echo $p->nombre ?>
                </a>
            </td>
            <td><?php echo $p->edad ?></td>
        </tr>

     <?php endforeach; ?>
</table>