<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indice</title>
    <style type="text/css">
  .menu {
    display:inline-block;
    float:left; 
    padding:10px; 
    font-weight:bold; 
    background-color:grey; 
    border: black 1px solid;
    background-color:#BFF503;
    
    }
    a { color: black; 
        text-decoration:none}

    .padre {
    display: flex;
    justify-content: center;
}
    .hijo {
    padding: 50px;
    margin: 20px;
    background-color: black;
    
}

table {
   width: 100%;
   border: 1px solid black;
   text-align: left;
   border-collapse: collapse;
   margin: 0 0 1em 0;
   caption-side: top;
}

body{
        margin:0;
        padding:0;
    }
    .fondoAdm{
    background:url(images/fondoAdmin.jpg);
    background-size:cover;
}

 td, th {
   padding: 0.3em;
   text-align: center;
}

.formulario{
    margin-left:200px;
    margin-right:200px;
}

.borde{
    text-align:center;
    border: black 1px solid;
    margin-top:50px;
    margin-left: 525px;
    margin-right:525px;
    padding-bottom:10px;
    
}

  </style>

  


</head>
<body class="fondoAdm">

<nav class="padre">

    <div class="menu">
    <a href="admin.php" class>Reservas</a>
    </div>

    <div class="menu">
    <a href="mensajesadmin.php" class>Mensajes</a>
    </div>

    <div class="menu">
    <a href="ListarAdmin.php" class>Lista de administradores</a>
    </div>

    <div class="menu">
    <a href="registro.php" class>Añadir Administrador</a>
    </div>

    <div class="menu">
    <a href="desconectar.php" class>Salir</a>
    </div>
</nav>
<hr>