document.addEventListener('DOMContentLoaded', function() {
    const cartasVocabularioDiv = document.getElementById('cartas-vocabulario');
    const mostrarRespuestaBtn = document.getElementById('mostrar-respuesta');
    const siguienteCartaBtn = document.getElementById('siguiente-carta');

    const vocabulario = [
        { japones: 'おはようございます', español: 'Buenos días (formal)' },
        { japones: 'こんにちは', español: 'Hola / Buenas tardes' },
        { japones: 'こんばんは', español: 'Buenas noches' },
        { japones: 'おやすみなさい', español: 'Buenas noches (al ir a dormir)' },
        { japones: 'ありがとう', español: 'Gracias' },
        { japones: 'ありがとうございます', español: 'Muchas gracias (formal)' },
        { japones: 'どういたしまして', español: 'De nada' },
        { japones: 'すみません', español: 'Disculpe / Lo siento / Permiso' },
        { japones: 'ごめんなさい', español: 'Lo siento (más enfático)' },
        { japones: 'はい', español: 'Sí' },
        { japones: 'いいえ', español: 'No' },
        { japones: 'お願いします', español: 'Por favor (al pedir algo)' },
        { japones: 'ください', español: 'Por favor (al pedir un objeto)' },
        { japones: 'いただきます', español: '¡Buen provecho! / Agradecimiento antes de comer' },
        { japones: 'ごちそうさまでした', español: 'Gracias por la comida (después de comer)' },
        { japones: 'お名前は？', español: '¿Cuál es tu nombre?' },
        { japones: '私は [nombre] です', español: 'Yo soy [nombre]' },
        { japones: 'はじめまして', español: 'Encantado de conocerte' },
        { japones: 'どうぞよろしく', español: 'Mucho gusto (frase que sigue a "はじめまして")' },
        { japones: 'さようなら', español: 'Adiós' },
        { japones: 'またね', español: 'Nos vemos / Hasta luego (informal)' },
        { japones: 'お元気ですか？', español: '¿Cómo estás?' },
        { japones: '元気です', español: 'Estoy bien' },
        { japones: 'これは何ですか？', español: '¿Qué es esto?' },
        { japones: 'どこですか？', español: '¿Dónde está?' },
        { japones: 'いくらですか？', español: '¿Cuánto cuesta?' },
        { japones: '日本語', español: 'Idioma japonés' },
        { japones: '英語', español: 'Idioma inglés' },
        { japones: 'はい、そうです', español: 'Sí, así es' },
        { japones: '違います', español: 'No, no es así / incorrecto' }
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

    mostrarCarta();
});

