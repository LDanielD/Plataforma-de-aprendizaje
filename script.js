document.addEventListener('DOMContentLoaded', function() {
    const ankiContainer = document.getElementById('anki-container');
    const mostrarCartaBtn = document.getElementById('mostrar-carta');


    let indiceCartaActual = 0;
    let mostrarJapones = true;

    function mostrarCarta() {
        if (vocabulario.length === 0) {
            ankiContainer.textContent = '¡No hay vocabulario disponible!';
            return;
        }

        const carta = vocabulario[indiceCartaActual];
        ankiContainer.textContent = mostrarJapones ? carta.japones : carta.español;
    }

    mostrarCartaBtn.addEventListener('click', function() {
        mostrarJapones = !mostrarJapones;
        mostrarCarta();
        mostrarCartaBtn.textContent = mostrarJapones ? 'Mostrar Traducción' : 'Mostrar Japonés';
    });

    // Mostrar la primera carta al cargar la página
    mostrarCarta();

    // Función para pasar a la siguiente carta después de mostrar la traducción
    ankiContainer.addEventListener('click', function() {
        if (!mostrarJapones) {
            indiceCartaActual = (indiceCartaActual + 1) % vocabulario.length;
            mostrarJapones = true;
            mostrarCarta();
            mostrarCartaBtn.textContent = 'Mostrar Traducción';
        }
    });
});
