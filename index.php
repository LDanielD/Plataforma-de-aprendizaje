<?php
session_start();
$nombre_usuario = $_COOKIE['usuario_nombre'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende Japonés (y HTML y CSS)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Aprende Japonés (y HTML y CSS)</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="seccion">
            <h2>Bienvenido a Aprende Japonés</h2>
            <?php if ($nombre_usuario) : ?>
                <p>Bienvenido de nuevo, <?php echo htmlspecialchars($nombre_usuario); ?>. Nos alegra verte otra vez.</p>
            <?php endif; ?>
            <p>Este sitio web está diseñado para guiarte...</p>
        </section>

        <section id="lenguaje" class="seccion">
            <h2>Lenguaje de Marcas (HTML5)</h2>
            <?php
            // Mostrar mensajes de éxito o error del formulario
            if (isset($_SESSION['mensaje_exito'])) {
                echo "<div class='mensaje_exito'>{$_SESSION['mensaje_exito']}</div>";
                unset($_SESSION['mensaje_exito']); // Limpiar la variable de sesión
            }
            if (isset($_SESSION['errores_formulario'])) {
                echo "<div class='mensaje_error'><h4>Errores en el formulario:</h4><ul>";
                foreach ($_SESSION['errores_formulario'] as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul></div>";
                unset($_SESSION['errores_formulario']); // Limpiar la variable de sesión
            }
            ?>
        </section>

        </main>
    
    </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende Japonés (y HTML y CSS)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Aprende Japonés (y HTML y CSS)</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#introduccion">Introducción</a></li>
                <li><a href="#escritura">Escritura Japonesa</a></li>
                <li><a href="#cultura">Cultura Japonesa</a></li>
                <li><a href="#vocabulario">Vocabulario Básico</a></li>
                <li><a href="#arquitectura">Arquitectura de Servicios</a></li>
                <li><a href="#lenguaje">Lenguaje de Marcas</a></li>
                <li><a href="#css3">CSS3</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="seccion">
            <h2>Bienvenido a Aprende Japonés</h2>
            <p>Este sitio web está diseñado para guiarte en el aprendizaje del idioma japonés. 
               Aquí encontrarás desde una introducción al idioma hasta aspectos culturales, 
               vocabulario básico y ejemplos prácticos. Además, podrás aprender sobre temas 
               de desarrollo web como la arquitectura de servicios, HTML5 y CSS3.</p>
        </section>

        <section id="introduccion" class="seccion">
            <h2>Introducción al Idioma Japonés</h2>
            <p>Bienvenidos a esta página web de aprendizaje japonés. El japonés es un gran idioma hablado por más de 128 millones de personas, principalmente en Japón. Su rica historia y cultura lo convierten en un idioma apasionante para aprender.</p>
            <p>En esta página podrás observar los conceptos básicos, empezando por la escritura hasta la cultura. Algo que hace al japonés particularmente interesante es que utiliza tres sistemas de escritura, el Hiragana, el Katakana y los Kanjis. En esta página aprenderemos cada uno de ellos.</p>
        </section>

        <section id="escritura" class="seccion">
            <h2>Escritura Japonesa: Hiragana, Katakana y Kanji</h2>
            <div class="escritura-explicacion">
                <h3>Hiragana (ひらがな)</h3>
                <p>El hiragana es un sistema de escritura silábico utilizado para escribir palabras japonesas nativas, partículas gramaticales y desinencias verbales y adjetivales. Cada carácter representa una sílaba.</p>
                <p>Por ejemplo: こんにちは (konnichiwa - hola) o お願いします (onegaishimasu - por favor)</p>

                <table border="1">
                    <caption>Tabla de Hiragana</caption>
                    <thead>
                        <tr><th></th><th>a</th><th>i</th><th>u</th><th>e</th><th>o</th></tr>
                    </thead>
                    <tbody>
                        <tr><th>k</th><td>か (ka)</td><td>き (ki)</td><td>く (ku)</td><td>け (ke)</td><td>こ (ko)</td></tr>
                        <tr><th>s</th><td>さ (sa)</td><td>し (shi)</td><td>す (su)</td><td>せ (se)</td><td>そ (so)</td></tr>
                        <tr><th>t</th><td>た (ta)</td><td>ち (chi)</td><td>つ (tsu)</td><td>て (te)</td><td>と (to)</td></tr>
                        <tr><th>n</th><td>な (na)</td><td>に (ni)</td><td>ぬ (nu)</td><td>ね (ne)</td><td>の (no)</td></tr>
                        <tr><th>h</th><td>は (ha)</td><td>ひ (hi)</td><td>ふ (fu)</td><td>へ (he)</td><td>ほ (ho)</td></tr>
                        <tr><th>m</th><td>ま (ma)</td><td>み (mi)</td><td>む (mu)</td><td>め (me)</td><td>も (mo)</td></tr>
                        <tr><th>y</th><td>や (ya)</td><td></td><td>ゆ (yu)</td><td></td><td>よ (yo)</td></tr>
                        <tr><th>r</th><td>ら (ra)</td><td>り (ri)</td><td>る (ru)</td><td>れ (re)</td><td>ろ (ro)</td></tr>
                        <tr><th>w</th><td>わ (wa)</td><td></td><td></td><td></td><td>を (wo)</td></tr>
                        <tr><th>n</th><td colspan="5">ん (n)</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="escritura-explicacion">
                <h3>Katakana (カタカナ)</h3>
                <p>El katakana también es un sistema de escritura silábico, utilizado para escribir palabras de origen extranjero (préstamos lingüísticos), onomatopeyas y para dar énfasis.</p>
                <p>Ejemplo: コーヒー (koohii - café) o アイスクリーム (aisukuriimu - helado)</p>

                <table border="1">
                    <caption>Tabla de Katakana</caption>
                    <thead>
                        <tr><th></th><th>a</th><th>i</th><th>u</th><th>e</th><th>o</th></tr>
                    </thead>
                    <tbody>
                        <tr><th>k</th><td>カ (ka)</td><td>キ (ki)</td><td>ク (ku)</td><td>ケ (ke)</td><td>コ (ko)</td></tr>
                        <tr><th>s</th><td>サ (sa)</td><td>シ (shi)</td><td>ス (su)</td><td>セ (se)</td><td>ソ (so)</td></tr>
                        <tr><th>t</th><td>タ (ta)</td><td>チ (chi)</td><td>ツ (tsu)</td><td>テ (te)</td><td>ト (to)</td></tr>
                        <tr><th>n</th><td>ナ (na)</td><td>ニ (ni)</td><td>ヌ (nu)</td><td>ネ (ne)</td><td>ノ (no)</td></tr>
                        <tr><th>h</th><td>ハ (ha)</td><td>ヒ (hi)</td><td>フ (fu)</td><td>ヘ (he)</td><td>ホ (ho)</td></tr>
                        <tr><th>m</th><td>マ (ma)</td><td>ミ (mi)</td><td>ム (mu)</td><td>メ (me)</td><td>モ (mo)</td></tr>
                        <tr><th>y</th><td>ヤ (ya)</td><td></td><td>ユ (yu)</td><td></td><td>ヨ (yo)</td></tr>
                        <tr><th>r</th><td>ラ (ra)</td><td>リ (ri)</td><td>ル (ru)</td><td>レ (re)</td><td>ロ (ro)</td></tr>
                        <tr><th>w</th><td>ワ (wa)</td><td></td><td></td><td></td><td>ヲ (wo)</td></tr>
                        <tr><th>n</th><td colspan="5">ン (n)</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="escritura-explicacion">
                <h3>Kanji (漢字)</h3>
                <p>Los kanji son caracteres chinos adoptados por el idioma japonés. Cada kanji tiene uno o varios significados y pronunciaciones. Aprender kanji es crucial para leer y escribir japonés avanzado.</p>
                <p>Ejemplo: 日本 (nihon - Japón) o 木 (ki - árbol)</p>
            </div>
        </section>

        <section id="cultura" class="seccion">
            <h2>Cultura Japonesa</h2>
            <p>Vamos a adentrarnos más en la cultura japonesa para entender el idioma. La cultura japonesa es rica y diversa, con una larga historia y tradiciones únicas. Aquí exploraremos algunos aspectos importantes:</p>
            <ul>
                <li><strong>Etiqueta y Modales:</strong> La importancia de la cortesía, el respeto y la formalidad en las interacciones sociales.</li>
                <li><strong>Ceremonia del Té (茶道 - Sadō):</strong> Un ritual tradicional que enfatiza la armonía, el respeto, la pureza y la tranquilidad.</li>
                <li><strong>Festivales (祭り - Matsuri):</strong> Celebraciones locales con desfiles, comida y actividades tradicionales.</li>
                <li><strong>Arte y Estética:</strong> El concepto de "wabi-sabi" (belleza en la imperfección y la transitoriedad), el arte del ikebana (arreglo floral) y la caligrafía (書道 - Shodō).</li>
                <li><strong>Artes Marciales (武道 - Budō):</strong> Disciplinas como el karate, judo y kendo, que enfatizan la disciplina física y mental.</li>
            </ul>
            <p>Hay muchas más cosas por descubrir sobre la fascinante cultura japonesa</p>
        </section>

        <section id="vocabulario" class="seccion">
            <h2>Vocabulario básico</h2>
            <div id="cartas-vocabulario"></div>
            <button id="mostrar-respuesta">Mostrar Respuesta</button>
            <button id="siguiente-carta">Siguiente Carta</button>
        </section>
        
        <section id="arquitectura" class="seccion">
            <h2>Arquitectura de servicios</h2>
            <p>La arquitectura de servicios ha evolucionado desde páginas estáticas hasta aplicaciones web dinámicas basadas en la comunicación cliente-servidor.</p>
            <p>En esta imagen ejemplo, el cliente (navegador web) solicita recursos al servidor, que procesa la petición y devuelve una respuesta.</p>
            <img src="Cliente-Servidor.png" alt="Esquema Cliente-Servidor" width="400">
        </section>

        <section id="lenguaje" class="seccion">
            <h2>Lenguaje de Marcas (HTML5)</h2>
            <p>HTML5 es el estándar actual para la creación de páginas web. Ejemplos de etiquetas básicas son las siguientes:</p>
            <ul>
                <li><code>&lt;header&gt;</code>: Encabezado de la página</li>
                <li><code>&lt;section&gt;</code>: Sección de contenido</li>
                <li><code>&lt;article&gt;</code>: Artículo independiente</li>
                <li><code>&lt;form&gt;</code>: Formulario para recopilar datos</li>
                <li><code>&lt;video&gt;</code>: Incrustar videos</li>
            </ul>

            <h3>Ejemplo de Formulario en HTML5:</h3>
            <form action="procesar_formulario.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"><br><br>
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" placeholder="ejemplo_correo@correo.com"><br><br>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="10" max="100"><br><br>
                <label for="color">Elige tu color favorito:</label>
                <input type="color" id="color" name="color"><br><br>
                <label for="pais">País:</label>
                <select id="pais" name="pais">
                    <option>México</option>
                    <option>Japón</option>
                </select><br><br>
                <button type="submit">Enviar</button>
            </form>
            
        </section>

        <section id="css3" class="seccion">
            <h2>Ejemplos de CSS3</h2>
            <p>CSS3 permite aplicar estilos avanzados y animaciones a los elementos HTML.</p>
            
            <div class="caja-css">Una caja con bordes redondeados y sombra</div>

            <h3>Ejemplo de Animación con CSS3:</h3>
            <div class="bola"></div>

            <pre>
.caja-css {
    background-color: lightblue;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 2px 2px 8px gray;
}

.bola {
    width: 50px;
    height: 50px;
    background-color: blue;
    border-radius: 50%;
    position: relative;
    animation: mover 3s infinite alternate;
}

@keyframes mover {
    from { left: 0; }
    to { left: 200px; }
}
            </pre>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Aprende Japonés (y HTML y CSS)</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>


