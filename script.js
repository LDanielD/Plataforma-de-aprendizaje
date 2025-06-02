document.addEventListener('DOMContentLoaded', function() {
    const cartasVocabularioDiv = document.getElementById('cartas-vocabulario');
    const mostrarRespuestaBtn = document.getElementById('mostrar-respuesta');
    const siguienteCartaBtn = document.getElementById('siguiente-carta');

    const vocabulario = [
        { japones: 'おはようございます', español: 'Buenos días (formal)' },
        { japones: 'こんにちは', español: 'Hola / Buenas tardes' },
        { japones: 'こんばんは', español: 'Buenas noches' },
        { japones: 'ありがとう', español: 'Gracias' },
        { japones: 'すみません', español: 'Disculpe / Lo siento' },
        { japones: 'はい', español: 'Sí' },
        { japones: 'いいえ', español: 'No' },
        { japones: 'お名前は？', español: '¿Cuál es tu nombre?' },
        { japones: '私は [nombre] です', español: 'Yo soy [nombre]' },
        { japones: 'はじめまして', español: 'Encantado de conocerte' }
        // Agrega más vocabulario aquí
    ];

    let indiceCartaActual = 0;
    let cartaActual;

    function mostrarCarta() {
        if (vocabulario.length === 0) {
            cartasVocabularioDiv.innerHTML = '<p>¡No hay vocabulario disponible!</p>';
            return;
        }

        const cartaData = vocabulario[indiceCartaActual];
        cartasVocabularioDiv.innerHTML = `
            <div class="carta">
                <div class="pregunta">${cartaData.japones}</div>
                <div class="respuesta">${cartaData.español}</div>
            </div>
        `;
        cartaActual = document.querySelector('.carta');
        const respuestaDiv = cartaActual.querySelector('.respuesta');
        respuestaDiv.style.display = 'none'; // Oculta la respuesta al mostrar una nueva carta
    }

    function mostrarOcultarRespuesta() {
        if (cartaActual) {
            const respuestaDiv = cartaActual.querySelector('.respuesta');
            respuestaDiv.style.display = respuestaDiv.style.display === 'none' ? 'block' : 'none';
        }
    }

    function siguienteCarta() {
        indiceCartaActual = (indiceCartaActual + 1) % vocabulario.length;
        mostrarCarta();
    }

    mostrarRespuestaBtn.addEventListener('click', mostrarOcultarRespuesta);
    siguienteCartaBtn.addEventListener('click', siguienteCarta);

    // Mostrar la primera carta al cargar la página
    mostrarCarta();
});