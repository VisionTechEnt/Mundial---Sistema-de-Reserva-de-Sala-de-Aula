document.addEventListener('DOMContentLoaded', function() {
    var popupTrigger = document.querySelectorAll('.popup-trigger');
    var popupContainer = document.querySelector('.popup-container');
    var salvarBtn = document.getElementById('salvar');
    var inputTexto = document.getElementById('texto-suspensa');

    popupTrigger.forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            inputTexto.value = trigger.textContent.trim();
            popupContainer.style.display = 'block';
        });
    });

    salvarBtn.addEventListener('click', function() {
        var conteudo = inputTexto.value;
        var cell = document.querySelector('.popup-trigger:focus');
        cell.textContent = conteudo;
        popupContainer.style.display = 'none';
    });
});
