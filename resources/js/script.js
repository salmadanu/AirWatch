// BUTTON CLICKED
const colorButtons = document.querySelectorAll('.btn__secondary');

colorButtons.forEach(button => {
    button.addEventListener('click', () => {
        button.classList.toggle('clicked');
    });
});
