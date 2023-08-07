<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<style>
h1{
    font-size: 60px;
    color: white;
}
.rotating-text {
    color: white;
    font-size: 24px;
    animation: rotateText 2s linear infinite;
    transform-origin: center center; /* Punto de origen de la rotación */
}

@keyframes rotateText {
    from {
        transform: rotateX(0deg);
    }
    to {
        transform: rotateX(360deg);
    }
}
</style>
<body style="background-image: url(vistas/pierre.jpg)">
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion">
                <a href="includes/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre(); ?> </h1>
        <p class="rotating-text"> Eres buen pive</p>
       
    </section>
    
</body>
</html>