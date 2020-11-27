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
    background-color: grey;
    
}
table, tr, th, td{
border: 1px solid #000000;
text-align: center;
    }
  </style>

  


</head>
<body style="">

<nav class="padre">

    <div class="menu">
    <a href="admin.php" class>reservas</a>
    </div>

    <div class="menu">
    <a href="mensajesadmin.php" class>mensajes</a>
    </div>

    <div class="menu">
    <a href="ListarAdmin.php" class>Lista de administradores</a>
    </div>

    <div class="menu">
    <a href="registro.php" class>añadir administrador</a>
    </div>

    <div class="menu">
    <a href="desconectar.php" class>Salir</a>
    </div>
</nav>
