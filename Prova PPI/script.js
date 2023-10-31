function showMessage() {
    alert("Obrigado por entrar em contato conosco!");
}

function darkMode() {
    const modo = document.getElementById('modo');
    const submit = document.getElementById('submit');
    const header = document.getElementById('header');
    const footer = document.getElementById('footer');

    header.classList.toggle('dark-mode');
    footer.classList.toggle('dark-mode');
    modo.classList.toggle('dark-mode buttons');
    submit.classList.toggle('dark-mode buttons');

}