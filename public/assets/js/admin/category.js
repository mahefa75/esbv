document.addEventListener('DOMContentLoaded', function() {
    // Initialisation de toutes les modals Bootstrap
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        new bootstrap.Modal(modal);
    });

    // Gestion de la validation du formulaire
    const form = document.getElementById('newCategoryForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (!form.checkValidity()) {
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    }

    // Gestion de la modal
    const modal = document.getElementById('newCategoryModal');
    if (modal) {
        modal.addEventListener('shown.bs.modal', function () {
            document.getElementById('categoryName').focus();
        });

        modal.addEventListener('hidden.bs.modal', function () {
            if (form) {
                form.reset();
                form.classList.remove('was-validated');
            }
        });
    }

    // Gestion du bouton d'ajout d'attribut
    const addAttributeBtn = document.getElementById('addAttributeBtn');
    if (addAttributeBtn) {
        addAttributeBtn.addEventListener('click', function() {
            // TODO: Ajouter la logique pour les attributs
        });
    }
}); 