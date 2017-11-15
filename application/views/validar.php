<?php
if (isset ($_POST['uname'])and isset($_POST['psw'])){
    include ('database.php');
    $nombreusuario=mysqli_real_escape_string($database,$_POST['uname']);
    $password=mysqli_real_escape_string($database,$_POST['psw']);
    $comprobacionnombre='select * from login where Login= "'.$nombreusuario.'"';
     $comprobacion=$database->query($comprobacionnombre);
     if ($comprobacion->num_rows>0)
     {
        $consultabase=mysqli_query($database,'select Password from login where Login="'.$nombreusuario.'"');
        $comprobarpass=password_verify($password,$pass['Password']);

        if($comprobarPassword){
            $_SESSION['Login']=$nombreusuario;
        }
        else{
            print 'los datos son incorrectos';
        }
        else{
            print 'No se ha encontrado el registro';
        }
     }
}else{
    header ('location: ./');
}
?>