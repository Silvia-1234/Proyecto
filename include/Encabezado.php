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
    background-color:#0197D7; 
    border: black 1px solid;
    
    }
    body{
        margin:0;
        padding:0;
    }

    a { color: black; 
        text-decoration:none}

    .padre {
    display: flex;
    justify-content: center;
    background-color:#0078A7; 
    width: 100%;
       
}
    .hijo {
    padding: 50px;
    margin: 20px;
    background-color: grey;
    
}

.fondo{
    background:url(images/fondo.jpg);
    background-size:cover;

}
table, tr, th, td{
border: 1px solid #000000;
text-align: center;
    }

.precios{
    float:right; 
    padding:10px; 
    font-weight:bold; 
    background-color:#0197D7; 
    border: black 1px solid;
    width: 48%;
    height: 300px;
    margin:2px;
    color:#040205;
    font-size:25px;
}
.santacruz{
    background:url(images/santacruz.jpg);
    background-size:cover;
    background-position:center;
}
.cochabamba{
    background:url(images/cochabamba.jpg);
    background-size:cover;

}
.tarija{
    background:url(images/tarija.jpg);
    background-size:cover;
    background-position:center;
}
.potosi{
    background:url(images/potosi.jpg);
    background-size:cover;
    background-position:center;
}
.oruro{
    background:url(images/oruro.jpg);
    background-size:cover;
    background-position:center;
}
.reserva{
    border: black 1px solid;
    padding:1px;
    background-color:yellow;
}
.borde{
    
    border: black 1px solid;
    margin-top:50px;
    margin-left: 500px;
    margin-right:500px;
    padding-bottom:10px;
    
}
.contenedor{
    padding:4px;
    
}

  </style>

  


</head>
<body class="fondo">

<nav class="padre">

    <div class="menu">
    <a href="index.php" class>Inicio</a>
    </div>

    <div class="menu">
    <a href="precios.php" class>Precios</a>
    </div>

    <div class="menu">
    <a href="contacto.php" class>Contacto</a>
    </div>

    <div class="menu">
    <a href="sesion.php" class>Iniciar sesion</a>
    </div>
</nav>
