<script>
    function toggleAccordion(index) {
        const content = document.getElementById(`content-${index}`);
        const icon = document.getElementById(`icon-${index}`);

        // Cerrar todos los otros acordeones
        const allContents = document.querySelectorAll('[id^="content-"]');
        const allIcons = document.querySelectorAll('[id^="icon-"]');

        allContents.forEach((item, idx) => {
            if (item !== content) {
                item.style.maxHeight = null; // Cerrar otros acordeones
                item.classList.remove('opacity-100');
                item.classList.add('opacity-0');
                item.classList.add('max-h-0'); // Asegurarse de que la altura máxima sea 0
                allIcons[idx].style.transform = "rotate(0deg)"; // Resetear iconos
            }
        });

        // Cambiar la altura máxima del contenido actual
        if (content.style.maxHeight) {
            content.style.maxHeight = null; // Cerrar el acordeón
            icon.style.transform = "rotate(0deg)";
            content.classList.remove('opacity-100');
            content.classList.add('opacity-0');
            setTimeout(() => {
                content.classList.add('max-h-0'); // Asegurarse de que la altura máxima sea 0
            }, 300); // Esperar a que la animación termine
        } else {
            content.classList.remove('max-h-0'); // Remover la clase de altura máxima 0
            content.style.maxHeight = content.scrollHeight + "px"; // Establecer maxHeight al scrollHeight
            icon.style.transform = "rotate(180deg)";
            content.classList.remove('opacity-0');
            content.classList.add('opacity-100');
        }
    }
</script>
