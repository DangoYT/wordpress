var submitted = false; // Define la variable en el ámbito global

document.addEventListener('DOMContentLoaded', function () {
    var miFormulario = document.getElementById('miFormulario');

    if (miFormulario) {
        miFormulario.addEventListener('submit', function () {
            submitted = true;
        });
    }

    var selectableInputs = document.querySelectorAll('.selectable-container input');
    var optionsContainers = document.querySelectorAll('.options');
    var options = document.querySelectorAll('.option');

    selectableInputs.forEach(function (input) {
        input.addEventListener('click', function () {
            var optionsContainer = this.nextElementSibling;
            optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
        });
    });

    options.forEach(function (option) {
        option.addEventListener('click', function () {
            var input = this.closest('.selectable-container').querySelector('input');
            input.value = this.textContent;
            this.parentElement.style.display = 'none';
        });
    });

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.selectable-container')) {
            optionsContainers.forEach(function (container) {
                container.style.display = 'none';
            });
        }
    });

    window.mostrarPopup = function () {
        if (!submitted) return;

        var popup = document.getElementById('popup');
        var closePopup = document.getElementById('closePopup');

        popup.style.display = 'flex';

        closePopup.onclick = function () {
            popup.style.display = 'none';
        }

        window.onclick = function (event) {
            if (event.target == popup) {
                popup.style.display = 'none';
            }
        }

        submitted = false;
    }
});
