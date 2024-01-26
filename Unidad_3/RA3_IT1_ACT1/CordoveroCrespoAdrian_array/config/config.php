<?php

#Ejercicio 1.
// Sustituye este comentario por la descripción del array

$horarios = array(
      array(
            "grupo" => "2º DAW A",
            // Sustituye este comentario por la descripción del array
            "horario" => array(
                  // Sustituye este comentario por la descripción del array
                  "DWES" => array(
                        "nombre" => "Desarrollo web en entorno servidor",
                        "profesor" => "José Aguilera",
                        // Sustituye este comentario por la descripción del array
                        "horas" => array(
                              // Sustituye este comentario por la descripción del array                                                 
                              array("Dia" => "Lunes", "Hora" => "1ª"),
                              array("Dia" => "Lunes", "Hora" => "2ª"),
                              array("Dia" => "Martes", "Hora" => "1ª"),
                              array("Dia" => "Martes", "Hora" => "2ª"),
                              array("Dia" => "Miércoles", "Hora" => "1ª"),
                              array("Dia" => "Miércoles", "Hora" => "2ª"),
                              array("Dia" => "Viernes", "Hora" => "3ª"),
                              array("Dia" => "Viernes", "Hora" => "4ª"),
                        )
                  ),
                  "DWC" => array(
                        "nombre" => "Desarrollo Web en entorno cliente",
                        "profesor" => "Lourdes Magarin",
                        "horas" => array(
                              array("Dia" => "Lunes", "Hora" => "3ª"),
                              array("Dia" => "Lunes", "Hora" => "4ª"),
                              array("Dia" => "Martes", "Hora" => "3ª"),
                              array("Dia" => "Martes", "Hora" => "4ª"),
                              array("Dia" => "Jueves", "Hora" => "1ª"),
                              array("Dia" => "Jueves", "Hora" => "2ª"),
                        )
                  ),
                  "HLC" => array(
                        "nombre" => "Horas Libre Configuración",
                        "profesor" => "Adrián Cordovero Crespo",
                        "horas" => array(
                              array("Dia" => "Jueves", "Hora" => "3ª"),
                              array("Dia" => "Jueves", "Hora" => "4ª"),
                              array("Dia" => "Viernes", "Hora" => "6ª"),
                        )
                  ),
                  "EIEM" => array(
                        "nombre" => "Empresas e Iniciativa Emprendedora",
                        "profesor" => "Raquel",
                        "horas" => array(
                              array("Dia" => "Lunes", "Hora" => "5ª"),
                              array("Dia" => "Lunes", "Hora" => "6ª"),
                              array("Dia" => "Miércoles", "Hora" => "5ª"),
                              array("Dia" => "Miércoles", "Hora" => "6ª"),
                        )
                  ),
                  "DAWEB" => array(
                        "nombre" => "Despliegue de Aplicaciones Web",
                        "profesor" => "Carmen Tripiana",
                        "horas" => array(
                              array("Dia" => "Martes", "Hora" => "5ª"),
                              array("Dia" => "Martes", "Hora" => "6ª"),
                              array("Dia" => "Viernes", "Hora" => "5ª"),
                        )
                  ),
                  "DIWEB" => array(
                        "nombre" => "Diseño de Aplicaciones Web",
                        "profesor" => "Jaime Rabasco",
                        "horas" => array(
                              array("Dia" => "Miércoles", "Hora" => "3ª"),
                              array("Dia" => "Miércoles", "Hora" => "4ª"),
                              array("Dia" => "Jueves", "Hora" => "5ª"),
                              array("Dia" => "Jueves", "Hora" => "6ª"),
                              array("Dia" => "Viernes", "Hora" => "1ª"),
                              array("Dia" => "Viernes", "Hora" => "2ª"),
                        )
                  ),
            )
      ),
      array(
            "grupo" => "1º DAW A",
            "horario" => array(
                  // Sustituye este comentario por la descripción del array
                  "Programación" => array(
                        "nombre" => "Programación",
                        "profesor" => "Rafael del Castillo",
                        // Sustituye este comentario por la descripción del array
                        "horas" => array(
                              // Sustituye este comentario por la descripción del array                                                 
                              array("Dia" => "Lunes", "Hora" => "1ª"),
                              array("Dia" => "Lunes", "Hora" => "2ª"),
                              array("Dia" => "Martes", "Hora" => "1ª"),
                              array("Dia" => "Martes", "Hora" => "2ª"),
                              array("Dia" => "Miércoles", "Hora" => "1ª"),
                              array("Dia" => "Miércoles", "Hora" => "2ª"),
                              array("Dia" => "Viernes", "Hora" => "3ª"),
                              array("Dia" => "Viernes", "Hora" => "4ª"),
                        )
                  ),
                  "BD" => array(
                        "nombre" => "Bases de datos",
                        "profesor" => "Amelia Pérez",
                        "horas" => array(
                              array("Dia" => "Lunes", "Hora" => "3ª"),
                              array("Dia" => "Lunes", "Hora" => "4ª"),
                              array("Dia" => "Martes", "Hora" => "3ª"),
                              array("Dia" => "Martes", "Hora" => "4ª"),
                              array("Dia" => "Jueves", "Hora" => "1ª"),
                              array("Dia" => "Jueves", "Hora" => "2ª"),
                        )
                  ),
                  "LLMM" => array(
                        "nombre" => "Lenguajes de Marcas",
                        "profesor" => "Adrián Cordovero Crespo",
                        "horas" => array(
                              array("Dia" => "Jueves", "Hora" => "3ª"),
                              array("Dia" => "Jueves", "Hora" => "4ª"),
                              array("Dia" => "Viernes", "Hora" => "6ª"),
                        )
                  ),
                  "SI" => array(
                        "nombre" => "Sistemas Informáticos",
                        "profesor" => "Raquel",
                        "horas" => array(
                              array("Dia" => "Lunes", "Hora" => "5ª"),
                              array("Dia" => "Lunes", "Hora" => "6ª"),
                              array("Dia" => "Miércoles", "Hora" => "5ª"),
                              array("Dia" => "Miércoles", "Hora" => "6ª"),
                        )
                  ),
                  "ED" => array(
                        "nombre" => "Entornos de Desarrollo",
                        "profesor" => "Carmen Tripiana",
                        "horas" => array(
                              array("Dia" => "Martes", "Hora" => "5ª"),
                              array("Dia" => "Martes", "Hora" => "6ª"),
                              array("Dia" => "Viernes", "Hora" => "5ª"),
                        )
                  ),
                  "FOL" => array(
                        "nombre" => "Formación y Orientación Laboral",
                        "profesor" => "Jaime Rabasco",
                        "horas" => array(
                              array("Dia" => "Miércoles", "Hora" => "3ª"),
                              array("Dia" => "Miércoles", "Hora" => "4ª"),
                              array("Dia" => "Jueves", "Hora" => "5ª"),
                              array("Dia" => "Jueves", "Hora" => "6ª"),
                              array("Dia" => "Viernes", "Hora" => "1ª"),
                              array("Dia" => "Viernes", "Hora" => "2ª"),
                        )
                  ),
            )
      )
);

#Ejercicio 2.


#array de idiomas
// Sustituye este comentario por la descripción del array
$idiomas = array("Español", "Inglés", "Francés", "Aleman", "Italiano", "Portugués");

#array con el cuestionario.
// Sustituye este comentario por la descripción del array
$preguntas = array(
      array(
            "pregunta" => "The room where secretaries work is called an .....",
            "Tipo" => "text",
            "Respuesta" => array("office"),
            "Acierto" => 1,
            "Fallo" => 0
      ),
      array(
            "pregunta" => "To go to the top of the building you can take the .....",
            "Tipo" => "text",
            "Respuesta" => array("lift", "elevator"),
            "Acierto" => 1,
            "Fallo" => 0
      ),
      array(
            "pregunta" => "I ..... tennis every Sunday morning.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("playing", "play", "am playing", "am play"),
            "Respuesta" => "play",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Don't make so much noise. Noriko ..... to study for her ESL test!",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("try", "tries", "tried", "is trying"),
            "Respuesta" => "is trying",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Jun-Sik ..... his teeth before breakfast every morning.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("will cleaned", "is cleaning", "cleans", "clean"),
            "Respuesta" => "cleans",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Sorry, she can't come to the phone. She ..... a bath!",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("is having", "having", "have", "has"),
            "Respuesta" => "is having",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "	..... many times every winter in Frankfurt.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("It snows", "snowed", "It is snowing", "It is snow"),
            "Respuesta" => "It snows",
            "Acierto" => 1,
            "Fallo" => -0.25
      )
);
