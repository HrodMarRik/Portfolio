// Récupération de tous les boutons de classe "dropbtn"
var dropdownButtons = document.querySelectorAll('.dropbtn');

// Pour chaque bouton, ajoutez un écouteur d'événements pour gérer le clic
dropdownButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Obtenez le menu déroulant correspondant (le prochain élément sibling)
        var dropdownContent = this.nextElementSibling;

        // Si le menu déroulant est visible, masquez-le, sinon, affichez-le
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    });
});