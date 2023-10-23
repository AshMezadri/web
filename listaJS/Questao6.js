function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function gerarPaleta() {
    const quantidade = 3;
    const colorCodes = [];

    for (let i = 1; i <= quantidade; i++) {
        const color = getRandomColor();
        document.getElementById(`color${i}`).style.backgroundColor = color;
        colorCodes.push(color);
    }

    const colorCodesElement = document.getElementById("color-codes");
    colorCodesElement.textContent =  colorCodes.join(" - ");
}

document.addEventListener("keydown", function(event) {
    if (event.keyCode === 32) {
        gerarPaleta();
    }
});

document.getElementById("button").addEventListener("click", gerarPaleta);
