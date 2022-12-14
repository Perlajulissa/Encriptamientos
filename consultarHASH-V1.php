<?php
    include_once "conexion.php";
    $sentencia = $BD->query("SELECT * FROM usuarios WHERE id_tipo = 3;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AES registros</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <main style="margin:5%">
        <h1>Registros con encriptamiento HASH-V1</h1>
        
        <table class="table">
        <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de usario</th>
                <th scope="col">telefono</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña Encriptada con HASH-V1</th>
                <th scope="col">Opcion</th>
                </tr>
            </thead>
            <tbody>
           
                <?php foreach($usuarios as $usuario){ ?>
                
                <tr>
                    <td><?php echo $usuario->id_tipo ?></td>
                    <td><?php echo $usuario->nombre ?></td>
                    <td><?php echo $usuario->telefono ?></td>
                    <td><?php echo $usuario->usuario ?></td>
                    <td><?php echo $usuario->email ?></td>
                    <td><?php echo $usuario->password ?></td>
                    <td>                        
                        <a href="<?php echo "eliminarHASH-V1.php?id=".$usuario->id?>" type="button" class="btn btn-success">
                        <i class="bi bi-trash3"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg>                                                    
                        </a>   
                        <a href="<?php echo "editarHASH-V1.php?id=".$usuario->id?>" type="button" class="btn btn-outline-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                            </svg>                
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a type="submit" class="btn btn-lg btn-info " href="formularioRSA_DSA.php">Registrar nuevo usuario</a>
    </main>    
        
      </div>
    </div>
   
    
</body>
</html>