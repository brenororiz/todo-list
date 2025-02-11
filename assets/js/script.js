// assets/js/script.js

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const taskInput = document.querySelector('input[name="task"]');
    const deleteButtons = document.querySelectorAll('.delete-btn');

    // Validar o formulário em tempo real
    taskInput.addEventListener('input', () => {
        if (taskInput.value.trim() === '') {
            form.querySelector('button').disabled = true;
        } else {
            form.querySelector('button').disabled = false;
        }
    });

    // Confirmar exclusão de tarefa
    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const confirmDelete = confirm('Tem certeza que deseja excluir esta tarefa?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});