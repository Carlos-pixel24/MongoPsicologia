<?php include "includes/menu.php" ?>

<br><label style="padding-right: 920px"><a href="expedientes.php">Ver registro completo</a></label><br>
<br><button onclick="exportTableToExcel('tblData')">Exportar este registro</button>

<?php
$buscar =  $_POST['buscar'];
require 'conexion.php';
// buscar frutas
$busqueda = array('Nombre' => $buscar);
$dato = $users->find($busqueda);
foreach ($dato as $dato) {
?>
<table border=1 id="tblData">
<tr>
    <td style="font-weight:bold"><p><label>Matricula</label></p></td>
    <td style="font-weight:bold"><p><label>Nombre</label></p></td>
    <td style="font-weight:bold"><p><label>Carrera</label></p></td>
    <td style="font-weight:bold"><p><label>Sexo</label></p></td>
    <td style="font-weight:bold"><p><label>Edad</label></p></td>
    <td style="font-weight:bold"><p><label>Estado Civil</label></p></td>
    <td style="font-weight:bold"><p><label>Telefono</label></p></td>
    <td style="font-weight:bold"><p><label>Email</label></p></td>
</tr>
<tr>
    <td><p><?php echo $dato["Matricula"]; ?></p></td>
    <td><p><?php echo $dato["Nombre"]; ?></p></td>
    <td><p><?php echo $dato["Carrera"]; ?></p></td>
    <td><p><?php echo $dato["Sexo"]; ?></p></td>
    <td><p><?php echo $dato["Edad"]; ?></p></td>
    <td><p><?php echo $dato["Estado Civil"]; ?></p></td>
    <td><p><?php echo $dato["Telefono"]; ?></p></td>
    <td><p><?php echo $dato["Email"]; ?></p></td>
</tr>
</table>
<?php
}
?>

<script type="text/javascript">
    //Funcion para exportar la tabla a Excell
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    var f = new Date();
    // Specify file name
    filename = filename?filename+'.xls':'Reporte de atencion psicologica ['+f.getDate()+"-"+(f.getMonth()+1)+"-"+f.getFullYear()+'].xls'; 
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

<?php include 'includes/footer.php' ?>