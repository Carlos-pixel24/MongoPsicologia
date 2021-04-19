<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
         

</head>
<body>

<main class="container">
    <br>
    <button class="btn btn-info" data-toggle="modal" data-target="#ventanaModal">Abrir</button>

    <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="tituloVentana"><strong> Agenta tu cita</strong></h5>
                    <button class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="enviar.php" name="enviar" method="POST">
                    <div class="modal-body">
                        
                        <label for="nombre">Nombre completo</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
                    
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" placeholder="Correo" required>
                        
                        <label for="nombre">Asunto</label>
                        <input type="text" class="form-control" name="asunto" placeholder="Asunto" required>
                        
                        <label for="mensaje">Mensaje</label> <br>
                        <textarea name="mensaje" class="text textarea input-xlarge" rows="5" cols="62"placeholder="Asunto" required></textarea>
                        <br>
                        <br>
                        
                            <button type="submit" style="width:220px" name="btnEntregar" class="btn btn-success" >Enviar</button>
                        
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    
                </div>


            </div>
        </div>
    </div>

</main>

      


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>      
    
</body>
</html>