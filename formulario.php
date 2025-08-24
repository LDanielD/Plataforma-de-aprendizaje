
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $pais = $_POST['pais'] ?? '';

    $errores = [];

    if (!preg_match("/^[a-zA-Z\s]{3,50}$/", $nombre)) {
        $errores[] = "El nombre es inválido. Debe contener solo letras y espacios, y tener entre 3 y 50 caracteres.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no tiene un formato válido.";
    }

    if (!is_numeric($edad) || $edad < 10 || $edad > 100) {
        $errores[] = "La edad debe ser un número entre 10 y 100.";
    }

    if (!empty($errores)) {
        $_SESSION['errores_formulario'] = $errores;
        header("Location: index.html#lenguaje");
        exit();
    } else {
        $mensaje = "¡Formulario recibido correctamente, $nombre!";
        
        $datos = "Nombre: $nombre, Email: $email, Edad: $edad, País: $pais\n";
        $archivo = 'datos_formulario.txt';

        $file_handle = fopen($archivo, 'a'); 
        if ($file_handle) { 
            fwrite($file_handle, $datos); 
            fclose($file_handle); 
            $mensaje_archivo = "Tus datos se han guardado en el archivo $archivo.";
        } else {
            $mensaje_archivo = "No se pudieron guardar los datos en el archivo. Verifica los permisos.";
        }

        setcookie('usuario_nombre', $nombre, time() + 3600);
        setcookie('usuario_pais', $pais, time() + 3600);

        $_SESSION['mensaje_exito'] = $mensaje . "<br>" . $mensaje_archivo;

        header("Location: index.html");
        exit();
    }
}
?>
