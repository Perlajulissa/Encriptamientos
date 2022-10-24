<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario AES</title>
 
</head>
<body>
    <style>
        form {
  
            padding: 1em;
            width: 25% ;
            background:25% #C6ECEA;
        }
        ul {
            
          padding: 1em;
          list-Style:none;
          text-align: justify;
          
        }
    </style>

    <script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
   
<center>

<form method="Post" action = "algoritmoRSA.php">  

 <center><label>Cifrado simétrico AES</label><center>
            <img class="mb-4" src="imagenes/usuario.jpg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Registro usuario</h1>

          
            <div class="mb-3">
             <label for="disabledTextInput" class="form-label">Nombre de usuario</label>
              <input type="text" name="nombre" class="form-control" id="disabledTextInput" placeholder="Nombre usuario">
            </div>

            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Telefono</label>
              <input type="text" name="telefono" class="form-control" id="disabledTextInput" placeholder="Telefono">  
            </div>

            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Usuario</label>
              <input type="text" name="usuario" class="form-control" id="disabledTextInput" placeholder="Usuario">  
            </div>

            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="disabledTextInput" placeholder="name@gmail.com"> 
            </div>
            
            <label for="txtPassword">Password</label>
            <div class=" input-group mb-3">
              
              <input type="password" name="psw" class="form-control" ID="txtPassword" placeholder="Password">
               
              <span id="show-hide-psswd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-opne"></span>
              <a id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()">
              
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
              <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
              <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
              </svg>
              </a>
            </div>
            
            <div class="form-floating" hidden>
            <label for="floatingid_type">id_tipo</label>
           
                <input type="number" name="id_tipo" class="form-control" id="floatingid_type" placeholder="id_tipo" value="2">  
            </div>
          <div><button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button></div>
        
        </form>
  <center>

    <br><a type="submit" class="w-100 btn btn btn-lg btn btn-info " href="consultarRSA.php">Consultar datos</a></br>
    <br><a type="submit" class=" w-100 btn btn btn-lg btn btn-info" href="menu.php">Menu</a>

</body>

</html>