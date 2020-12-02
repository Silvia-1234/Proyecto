
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">

    body{
      color:#9FE4A7;
      margin:0;
      padding:0;
    }
    .fondo{
    background:url(images/fondodesesion.jpg);
    background-size:cover;
    
}
.caja{
  
    
    border: black 1px solid;
    height:300px;
    width:250px;
    margin-top:100px;

}



    </style> 



</head>


<body class="fondo">


<center>
<h4 >SISTEMA DE RESERVA DE VIAJES</h4>

      

      <div class="caja">

       <h4 >Inicio de Sesión</h4>
       
          <form action="validar.php" method="POST">
               <img src="images/sesion.png" WIDTH=100 HEIGHT=100>

             <div class="contenedor">
            
              <input type="text"  name="usuario" placeholder="usuario">
             </div><br>

            
             <div class="contenedor">
              <input type="password" name="contraseña" placeholder="contraseña">
              
             </div>
             <br>
            
             <br>
           <div>
           <button class="btn-login" type="submit">Ingresar  <i class=""></i></button>

          </div>
            
          </form>

      </div>

    </center>

</body>

</html>

