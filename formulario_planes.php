<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/portada-link.jpg" />

    <title>NatureaKits</title>
    <meta property="og:url" content="https://natureakits.com/" />
    <meta property="og:description"
        content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

    <meta name="description"
        content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

    <meta name="keywords"
        content="Naturea kits bienestar natural aceites esenciales salud tranquilidad  crecimiento negocio emprendimiento vida sana trnaquilidad oportunidades " />

    <meta property="og:site_name" content="https://natureakits.com/" />
    <meta property="fb:admins" content="ID de Facebook " />
    <meta property="article:published_time" content="2022-02-03T11:25:00+01:00" />
    <meta property="article:modified_time" content="2022-02-03T11:25:47+01:00" />
    <meta property="og:type" content="website" />
    <meta name="author" content="Ivan Ruiz Rodriguez || Front-end Developer" />
    <meta name="revised" content="03/02/2022" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Naturea Kits">
    <meta itemprop="description"
        content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana.">


    <meta itemprop="image" content="img/portada-link.jpg">

    <!-- Nos sirve para guardar una cookie. Los datos guardados son clave/valor -->
    <meta http-equiv="cookie" content="clave=valor; expires=Wednesday, 03-02-22 11:25:59 GMT;" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/formulario.css">

    <!-- TODO: IMAGEN DE PORTADA -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- FONTAWENSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- GOOGLE ANALITYCS -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-79CRZNBZ5W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-79CRZNBZ5W');
    </script>

</head>

<body class="bg-planes">
    <main>
        <div class="col-lg-12 text-center my-5  blur shadow p-5 border--dashboard">
            <h2 class="fw-bold color-purple mb-4"> Plan de Bienestar Naturéa</h2>
            <p style="text-align: justify">
                Queremos felicitarte por tomar la decisión de empezar con una salud mas natural, este plan de bienestar
                te
                ayudará a detectar las principales necesidades de tu familia y aprender a usar las herramientas que
                puedes
                tener en tus manos. No intentamos tratar ni curar padecimiento, únicamente deseamos recomendar los
                beneficios de los aceites esenciales en tu vida y mejorar tu bienestar por medio de la prevención
                invitándote a tener hábitos saludables.
            </p>
        </div>


        <div class="container">
            <div class="row">
                <div class="blur shadow p-5 border--dashboard p-4">



                    <form action="registrar.php" class="formulario" id="formulario" method="POST">

                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="nombre" class="formulario__label">Nombre</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre"
                                    placeholder="Nombre completo" require="true">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: Teléfono -->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <label for="telefono" class="formulario__label">Teléfono /WhatsApp</label>
                            <div class="formulario__grupo-input">
                                <input type="tel" class="formulario__input" name="telefono" id="telefono"
                                    placeholder="5591234567">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son
                                14 dígitos.
                            </p>
                        </div>

                        <!-- GENERO -->
                        <div class="formulario__grupo" id="grupo__genero">
                            <label for="sexo" class="formulario__label">Eres</label>
                            <select name="sexo" id="" class="form-select border-none">
                                <option value="hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>

                            </select>
                            <p class="formulario__input-error">La edad solo puede contener numeros y el maximo son
                                2 dígitos.
                            </p>
                            <!-- TODO: Preguntar que se hace con los menores de edad -->
                            <!-- <p class="menor_edad">menor de edad
                            </p> -->
                        </div>

                        <!-- Grupo: Edad -->
                        <div class="formulario__grupo" id="grupo__edad">
                            <label for="edad" class="formulario__label">Edad</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="edad" id="edad" placeholder="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La edad solo puede contener numeros y el maximo son
                                2 dígitos.
                            </p>

                        </div>


                        <!-- Grupo: Peso -->
                        <div class="formulario__grupo" id="grupo__peso">
                            <label for="peso" class="formulario__label">¿Cuál es tu peso?(kg)</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="peso" id="peso" placeholder="0.0kg">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El peso solo puede contener numeros
                            </p>
                            <!-- TODO: Preguntar que se hace con los menores de edad -->
                            <!-- <p class="menor_edad">menor de edad
                            </p> -->
                        </div>



                        <!-- Grupo: Estatura -->
                        <div class="formulario__grupo" id="grupo__estatura">
                            <label for="estatura" class="formulario__label">¿Cuál es tu estatura?</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="estatura" id="estatura"
                                    placeholder="1.68cm">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La estatura solo puede contener numeros
                            </p>
                            <!-- TODO: Preguntar que se hace con los menores de edad -->
                            <!-- <p class="menor_edad">menor de edad
                            </p> -->
                        </div>



                        <!-- Grupo: Correo Electronico -->
                        <div class="formulario__grupo" id="grupo__correo">
                            <label for="correo" class="formulario__label">Correo Electrónico</label>
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo"
                                    placeholder="correo@correo.com" require="true">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos,
                                guiones y
                                guion bajo.</p>
                        </div>


                        <!-- Grupo: id doTERRA -->
                        <div class="formulario__grupo" id="grupo__IDdoterra">
                            <label for="id_doterra" class="formulario__label">¿Cuál es tu ID doTERRA?</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="id_doterra" id="id_doterra"
                                    placeholder="18-99 años">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La edad solo puede contener numeros y el maximo son
                                2 dígitos.
                            </p>
                            <!-- TODO: Preguntar que se hace con los menores de edad -->
                            <!-- <p class="menor_edad">menor de edad
                            </p> -->
                        </div>


                        <!-- Grupo: Edad -->
                        <div class="formulario__grupo" id="grupo__inscripcion">
                            <label for="inscripcion" class="formulario__label">¿Si no estas inscrito en doTERRA quieres
                                que te
                                contacten para el proceso de inscripción?</label>
                            <div class="formulario__grupo-input">
                                <select name="inscripcion" id="inscripcion" class="formulario__input">
                                    <option value="si">Si</option>
                                    <option vlaue="no">No</option>
                                </select>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La edad solo puede contener numeros y el maximo son
                                2 dígitos.
                            </p>
                            <!-- TODO: Preguntar que se hace con los menores de edad -->
                            <!-- <p class="menor_edad">menor de edad
                            </p> -->
                        </div>


                        <!-- Grupo: Estado-->
                        <div class="formulario__grupo">
                            <label for="estado" class="formulario__label">Estado</label>
                            <select name="estado" id="estado" class="formulario__input" require="true">
                                <?php 
                                    include 'conexion.php';
                                    $sql =" SELECT * FROM tb_estado";
                                
                                                                        
                                    $sentencia = $pdo->prepare($sql);
                                    $sentencia->execute();
                                    $resultado = $sentencia->fetchAll();
                                ?>
                                <?php foreach ($resultado as $opciones): ?>

                                <option value="<?php echo $opciones['estado']?>"><?php echo $opciones['estado']?>
                                </option>

                                <?php endforeach ?>

                            </select>
                        </div>



                        <!-- Grupo: Ciudad -->
                        <div class="formulario__grupo" id="grupo__ciudad">
                            <label for="ciudad" class="formulario__label">Ciudad que radicas</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="ciudad" id="ciudad"
                                    placeholder="ciudad">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La ciudad tiene que ser de 4 a 16 carácteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>


                        <!-- Grupo: Nombre de tu líder -->
                        <div class="formulario__grupo" id="grupo__nombre_lider">
                            <label for="nombre_lider" class="formulario__label">¿Cuál es nombre de tu líder?</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre_lider" id="nombre_lider"
                                    placeholder="Nombre de tu líder" require>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 caracteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>



                        <!-- Grupo: Nombre de tu líder -->
                        <div class="col-lg-12 w-100" id="">
                            <label for="sintomas" class="formulario__label">¿Cuáles son algunos de los síntomas o
                                padecimiento que te están afectando actualmente?</label>
                            <div class="col-lg-12 d-flex flex-wrap" id="sintomas">

                                <div class="col-lg-6 col-12 formulario__label ">
                                <div>
            <input type="checkbox" name="padecimiento[]" id="cansancio" value="1">
            <label class="fw-bold mb-3" for="cansancio">Cansancio crónico</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="estres" value="2">
            <label class="fw-bold mb-3" for="estres">Estrés</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="depresion" value="3">
            <label class="fw-bold mb-3" for="depresion">Depresión</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="estreñimineto" value="4">
            <label class="fw-bold mb-3" for="estreñimineto">Estreñimiento</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="insomnio" value="5">
            <label class="fw-bold mb-3" for="insomnio">Insomnio</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="sobre-peso" value="6">
            <label class="fw-bold mb-3" for="sobre-peso">Sobre peso</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="enfermizo" value="7">
            <label class="fw-bold mb-3" for="enfermizo">Ser muy enfermizo</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="acne" value="8">
            <label class="fw-bold mb-3" for="acne">Acné</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="colitis" value="9">
            <label class="fw-bold mb-3" for="colitis">Colitis</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="ansiedad" value="10">
            <label class="fw-bold mb-3" for="ansiedad">Ansiedad</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="indigestion" value="11">
            <label class="fw-bold mb-3" for="indigestion">Indigestión</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="gastritis" value="12">
            <label class="fw-bold mb-3" for="gastritis">Gastritis</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="varices" value="13">
            <label class="fw-bold mb-3" for="varices">Varices</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="alergias" value="14">
            <label class="fw-bold mb-3" for="alergias">Alergias</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="presion-alta" value="15">
            <label class="fw-bold mb-3" for="presion-alta">Presión alta</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="colesterol-alto" value="16">
            <label class="fw-bold mb-3" for="colesterol-alto">Colesterol alto</label>
        </div>
    </div>

    <div class="col-lg-6 col-12 formulario__label ">

        <div>
            <input type="checkbox" name="padecimiento[]" id="acido-urico" value="17">
            <label class="fw-bold mb-3" for="acido-urico">Ácido úrico alto</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="infeccion-orina" value="18">
            <label class="fw-bold mb-3" for="infeccion-orina">Infecciones de orina
                recurrentes</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="adicciones" value="19">
            <label class="fw-bold mb-3" for="adicciones">Adicciones</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="problemas-menstruales" value="20">
            <label class="fw-bold mb-3" for="problemas-menstruales">Problemas
                mestruales</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="dolor-espalda" value="21">
            <label class="fw-bold mb-3" for="dolor-espalda">Dolor de espalda</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="dolor-cuello" value="22">
            <label class="fw-bold mb-3" for="dolor-cuello">Dolor de cuello</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="perdida-memoria" value="23">
            <label class="fw-bold mb-3" for="perdida-memoria">Perdida de memoria</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="piedras-riñones" value="24">
            <label class="fw-bold mb-3" for="piedras-riñones">Piedras en los riñones</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="dolor-articulaciones" value="25">
            <label class="fw-bold mb-3" for="dolor-articulaciones">Dolor de las
                articulaciones</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="obesidad" value="26">
            <label class="fw-bold mb-3" for="obesidad">Obesidad</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="manchas-cara" value="27">
            <label class="fw-bold mb-3" for="manchas-cara">Manchas en la cara</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="problemas-piel" value="28">
            <label class="fw-bold mb-3" for="problemas-piel">Problemas en la piel</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="enfermedades-cronicas" value="29">
            <label class="fw-bold mb-3" for="enfermedades-cronicas">Enfermedades
                crónicas</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="hemorroides" value="30">
            <label class="fw-bold mb-3" for="hemorroides">Hemorroides</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="problemas-hormonales" value="31">
            <label class="fw-bold mb-3" for="problemas-hormonales">Problemas
                hormonales</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="intoleracia-lactosa" value="32">
            <label class="fw-bold mb-3" for="intoleracia-lactosa">Intolerancia a la
                lactosa</label>
        </div>
        <div>
            <input type="checkbox" name="padecimiento[]" id="problemas-azucar" value="33">
            <label class="fw-bold mb-3" for="problemas-azucar">Problemas con el
                azúcar</label>
        </div>

                                </div>
                            </div>

                        </div>

                        <!-- GENERO -->
                        <div class="formulario__grupo" id="grupo__dispuesto">
                            <label for="dispuesto" class="formulario__label">Estás dispuesto a comprometerte para
                                aprender
                                y hacer lo necesario para que el día de hoy puedas empezar con un cambio definitivo en
                                tu vida? </label>
                            <div class="formulario__grupo-input">

                                <select name="dispuesto" id="" class="formulario__input">

                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    <option value="Tal vez">Tal vez</option>

                                </select>
                            </div>
                        </div>


                        <!-- Grupo: Nombre de tu líder -->
                        <div class="formulario__grupo" id="grupo__nombre_dispuesto_texto">
                            <label for="dispuesto_texto" class="formulario__label">Si tu respuesta anterior fue si o talvez, ¿Por qué estarías dispuesto? </label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="dispuesto_texto" id="dispuesto_texto"
                                    placeholder="Respuesta" require>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 caracteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>

                        <!-- Grupo: Nombre de tu líder -->
                        <div class="formulario__grupo" id="grupo__nombre_familiar">
                            <label for="familiar" class="formulario__label">Deseas que algún familiar participen en el
                                plan, ¿ Cuál es su nombre y parentesco? </label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="familiar" id="familiar"
                                    placeholder="Nombre de tu familiar" require>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 caracteres y solo puede
                                contener
                                numeros, letras y guion bajo.</p>
                        </div>


                          <!-- Grupo: Terminos y Condiciones -->
                          <div class="formulario__grupo" id="grupo__terminos">
                            <label class="formulario__label">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                                Acepto los Términos y Condiciones
                            </label>
                            <a href="#">Ver términos y condiciones</a>
                        </div>

                </div>
                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                        correctamente.</p>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class=" formulario__btn btn-lg mt-5">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado
                        exitosamente!</p>
                </div>

                </form>
            </div>
        </div>
        </div>
    </main>

    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>