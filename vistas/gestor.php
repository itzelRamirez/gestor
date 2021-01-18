<?php
     session_start();
     if(isset($_SESSION['usuario'])){
include "header.php"; 
?>
   
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Gestor de archivos</h1>
            <div id="tablaGestorArchivos"></div>
        </div>
    </div>  

<?php include "footer.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestorArchivos').load("gestor/tablagestor.php");
    });
</script>  

<?php
    } else {
	header("location:../index.php");
}
?>