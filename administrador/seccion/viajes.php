<?php include("../template/cabecera.php"); ?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtViaje=(isset($_POST['txtViaje']))?$_POST['txtViaje']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");

switch($accion){

case "Agregar":  
    $sentenciaSQL= $conexion->prepare("INSERT INTO destino (nombre,imagen,descripcion) VALUES (:nombre,:imagen,:descripcion);");
    $sentenciaSQL->bindParam(':nombre',$txtViaje);
    $sentenciaSQL->bindParam(':imagen',$txtImagen);
    $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
    $sentenciaSQL->execute();
       break;

       case"Modificar":
       //echo "Presionado boton modificar";
       $sentenciaSQL= $conexion->prepare("UPDATE destino SET nombre=:nombre, descripcion=:descripcion WHERE ID=:ID");
       $sentenciaSQL->bindParam(':nombre',$txtViaje);
       $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
       $sentenciaSQL->bindParam(':ID',$txtID);
 $sentenciaSQL->execute();
 
if ($txtImagen!="") {
    $sentenciaSQL= $conexion->prepare("UPDATE destino SET imagen=:imagen WHERE ID=:ID");
    $sentenciaSQL->bindParam(':imagen',$txtImagen);
    $sentenciaSQL->bindParam(':ID',$txtID);
$sentenciaSQL->execute();

}


       break;

       case"Cancelar":
       echo "Presionado boton cancelar";
       break;

       case"Seleccionar":
      //  echo "Presionado boton Seleccionar";
      $sentenciaSQL= $conexion->prepare("SELECT * FROM destino WHERE ID=:ID");
      $sentenciaSQL->bindParam(':ID',$txtID);
$sentenciaSQL->execute();
$Viaje=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

$txtViaje=$Viaje['nombre'];
$txtDescripcion=$Viaje['descripcion'];
$txtImagen=$Viaje['imagen'];
        break;

        case"Borrar":
         //   echo "Presionado boton Borrar";
         $sentenciaSQL= $conexion->prepare("DELETE  FROM destino WHERE ID=:ID");
         $sentenciaSQL->bindParam(':ID',$txtID);
         $sentenciaSQL->execute();
            break;

}

$sentenciaSQL= $conexion->prepare("SELECT * FROM destino");
$sentenciaSQL->execute();
$listaViajes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    body {
        background:url(../../img/fondo.jpg) no-repeat center center fixed;
        background-size: cover; 
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: #6c757d;
        color: #fff;
        padding: 15px;
        font-weight: bold;
    }

 

    .table-bordered {
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table-bordered th, .table-bordered td {
        background-color: #f8f9fa;
        text-align: center;
        padding: 10px;
    }
</style>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos del Destino
    </div>

    <div class="card-body">
    <form method="POST" enctype="multipart/form-data">

    
        <div class="form-group">
            <label for="txtID">ID:</label>
            <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
        </div>

        <div class="form-group">
            <label for="txtViaje">Destino:</label>
            <input type="text" class="form-control" value="<?php echo $txtViaje; ?>" name="txtViaje" id="txtViaje" placeholder="Destino:">
        </div>

        <div class="form-group">
            <label for="txtDescripcion">Descripcion del destino:</label>
            <input type="text" class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion del destino:">
        </div>

        <div class="form-group">
            <label for="txtImagen">Imagen:</label>
            <?php echo $txtImagen;?>

            <input type="file" class="form-control" name="txtImagen" id="txtImagen">
        </div>

        <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>
    </form>
    
    </div>
</div>

</div>

<div class="col-md-7">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destino</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaViajes as $Viajes){?>
            <tr>
                <td><?php echo $Viajes['ID'];?></td>
                <td><?php echo $Viajes['nombre'];?></td>
                <td><?php echo $Viajes['descripcion'];?></td>
                <td><?php echo $Viajes['imagen'];?></td>


                <td>
               
                <form method="post";>

                <input type="hidden" name="txtID" id="txtID" value="<?php echo $Viajes['ID'];?>"/>

                <input type="submit" name="accion"  value="Seleccionar" class="btn btn-primary"/>

                <input type="submit" name="accion"  value="Borrar" class="btn btn-danger"/>
                
            </form>

                </td>
            </tr>
           <?php }?>
        </tbody>
    </table>
</div>

<?php include("../template/pie.php"); ?>
