<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Cervejas Long Neck</title>
</head>
<style>
    body{
       
        
        background:Gainsboro;
    }
    #container{
        margin:auto;
        width:960px;
        float:left;
    }
    #topo{
        width:960px;
        float:left;
        height:20px;
        padding:10px;

    }
</style>
<body>
    
</body>
</html>

<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Painel</title>
</head>

<body>
<div class="container">
<h1>Cervejas Long Neck</h1>
    <hr>  
 </div>  
  <br>
  <body class="text-center">
    <?php 
        echo "Olá, Seja Bem Vindo(a), ".$_SESSION["nome"];
        echo "<h3>Menu</h3>";

        if($_SESSION["perfil"] == "adm"){
            include_once 'menuadmin.php';
        }else {
            include_once 'menuuser.php';
        }
    ?>


</br>
</body>
<?php include_once 'rodape.php'; ?>
</body>
</html>