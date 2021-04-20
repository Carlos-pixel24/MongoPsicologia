<?php include "includes/menu.php" ?>


<!------------------------------------------------------------------------------>
<br>
<form method="post" action="buscar_expedientes.php" style="padding-right: 600px">
    
    
    <div class="d-flex justify-content-between">
    <label>Buscar tabla por matricula</label>
    <input class="input100 m-1" type="text" name="buscar" id="buscar">


    <div class="container-login100-form-btn">
		<a class="login100-form-btn" >
		    <button type="submit">Buscar </button>
		</a>

    </div>
    </div>

</form>
<br>
<!------------------------------------------------------------------------------>

<div class="container-login100-form-btn">
<div class="d-flex justify-content-center m-">
		<a class="login100-form-btn" >
            <button onclick="exportTableToExcel('tblData')">Exportar todo a Excel</button>
		</a>
</div>
</div>
<p>
    <?php
    require_once("conexion.php");

    if ($users->count()>0)
    {
        $datos = $users->find();
        ?>
        
        <table  class="table" border=1 id="tblData">
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
        <?php
        foreach ($datos as $dato) {
?>     
        
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
        <tr>
            <td colspan="8"><br></td>
        </tr>
        

                <?php
        }//foreach
                ?>
                </table>

                <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>

</p>

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