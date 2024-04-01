<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- BARRA LATERAL -->
    <div class="toolbar">
        <h1 class="nombre-sistem">SGA</h1>
        <div class="scroll-alumnos">
            <p class="items-name">ALUMNOS</p>
            <p class="name-clarito">Mauricio Lucero</p>
        </div>
    </div>
    <!-- CUERPO / Contenido -->
    <!-- esta seccion es donde se ingresarian los datos -->
    <main>
        <div class="menu">
            <button class="min-menu">
                <img src="img/menu.png" alt="">
            </button>
            <button class="buscador-alumnos">
                <img src="img/lupa.png" alt="">
            </button>
            <div class="dropdown-cursos">
                <p class="menu-links">Cursos</p>
            </div>
            <p class="menu-links">Egresados</p>
            <p class="menu-links">Ingresantes</p>
        </div>
        <div class="scroll-informcaion">
            <div class="informacion-alumno">
                <div class="informacion-breve">
                    <div class="nombre-alumno">
                        <p class="nombre-alumn">Mauricio Lucero</p>
                        <div class="links">
                            <a href="curso X">7º4ª</a>
                            <p>•</p>
                            <a href="turnos X">Noche</a>
                        </div>
                    </div>
                </div>
                <div class="datos-alumno">
                    <div class="contenedor-foto-alumno">
                        <p class="texto-oscuro">Foto del Alumno</p>
                        <p class="texto-clarito">Cambiar foto del alumno aqui</p>
                        <div class="input-file-container">
                            <img src="img/simple-user-default-icon-free-png.webp" alt="" class="foto-alumno">
                            <input type="file" name="foto" id="foto" accept="image/png, image/jpeg">
                            <label for="foto" class="label-subir-foto">Subir foto</label>
                            <p>Fotos permitidas .JPEG o .PNG</p>
                        </div>
                    </div>
                    <div class="nombre-apellido-dni">
                        <p class="texto-oscuro">Nombre y Apellido</p>
                        <form method="post" action="-----">
                            <p class="items-name">Nombre</p>
                            <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                placeholder="Introduce tu nombre">
                            <p class="items-name">Apellido</p>
                            <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                placeholder="Introduce tu Apellido">
                            <p class="items-name">DNI</p>
                            <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                placeholder="Introduce tu DNI">
                        </form>
                    </div>
                    <div class="mucha-mas-informacion-ayuda-me-quedo-sin-nombres-para-las-clases">
                        <p class="texto-oscuro">Mas informacion</p>
                        <div class="contendor-columnas">
                            <div class="columna1">
                                <form method="post" action="-----">
                                    <p class="items-name">Fecha de Nacimiento</p>
                                    <input type="date" id="fecha_nacimiento" name="nombre">
                                    <p class="items-name">Provincia de Nacimiento</p>
                                    <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                        placeholder="Introduce la provincia de tu nacimiento">
                                    <p class="items-name">Sexo</p>
                                </form>
                                <div class="container-input-radio">
                                    <div class="contiene-input">
                                        <input type="radio" name="sexo" value="-----"> Masculino
                                    </div>
                                    <div class="contiene-input">
                                        <input type="radio" name="sexo" value="-----"> Femenino
                                    </div>
                                    <div class="contiene-input">
                                        <input type="radio" name="sexo" value="-----"> No especifico
                                    </div>
                                </div>
                            </div>
                            <div class="columna2">
                                <form method="post" action="-----">
                                    <p class="items-name">Pais de Nacimiento</p>
                                    <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                        placeholder="Introduce el pais de tu nacimiento">
                                    <p class="items-name">Domicilio Legal</p>
                                    <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                        placeholder="Introduce la direccion de tu domicilio">
                                    <p class="items-name">Correo electronico</p>
                                    <input type="text" name="Elegi El nombre para una variable" autocomplete="off"
                                        placeholder="Introduce tu Correo Electronico">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--------------------------------- -->
</body>
</html>