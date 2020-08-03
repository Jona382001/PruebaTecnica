
<script type="text/javascript">
$(document).ready(function() {
    $('#empresas_data').DataTable({
    "pageLength": 10,
    "scrollY": 300,
        "scrollX": false,
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
} );
</script>

<table id="empresas_data" class="table table-bordered table-striped">

<thead>
  
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Acciones</th>
    </tr>
</thead>
<tbody>
  
<?php 

require_once "../clases/Conexion.php";
        $c= new conectar();
        $conexion=$c->conexion();

    $sql="select * from `empresas`";
    $result=mysqli_query($conexion,$sql);


 while($ver=mysqli_fetch_row($result)):
    ?>
<tr id= "filas">
<td><?php echo $ver[0]; ?></td>
<td><?php echo $ver[1]; ?></td>
<td>
<span class="btn btn-primary " onclick="obtenerdetalles(<?php echo $ver[0]; ?>)">Ver</span>
<span class="btn btn-primary " onclick="btnEditar(<?php echo $ver[0]; ?>)" >Editar</span>
<span class="btn btn-danger " onclick="eliminar(<?php echo $ver[0]; ?>)">Eliminar</span>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>