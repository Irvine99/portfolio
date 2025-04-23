
    function toggleDescription(button) {
        const card = button.closest('[data-card]');
        const description = card.querySelector('[data-description]');
        const content = card.querySelector('[data-content]');

        const isCollapsed = description.classList.contains('line-clamp-4');
        
        // On bascule entre "voir plus" et "voir moins"
        button.textContent = isCollapsed ? 'voir moins' : 'voir plus';

        // Si le texte est tronqué, on enlève la ligne-clamp et on élargit la carte
        if (isCollapsed) {
            description.classList.remove('line-clamp-4');
            description.classList.add('max-h-[1000px]');  // La hauteur max de la description dépliée
            content.style.transition = "max-height 0.5s ease-in-out";  // Ajout d'une transition douce
        } else {
            description.classList.add('line-clamp-4');
            description.classList.remove('max-h-[1000px]');
            content.style.transition = "max-height 0.5s ease-in-out";  // Transition douce pour le repliement
        }
    }

