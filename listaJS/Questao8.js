function calcularFatorial() {
    const nInput = document.getElementById("number");
    const fatorialResult = document.getElementById("fatorial");

    const numero = parseInt(nInput.value);
    if (isNaN(numero)) {
        fatorialResult.textContent = "Por favor, insira um número válido.";
    } else {
        fatorialResult.textContent = `O fatorial de ${numero} é ${calcularFactorial(numero)}.`;
    }
}

function calcularFactorial(numero) {
    if (numero <= 1) {
        return 1;
    } else {
        return numero * calcularFactorial(numero - 1);
    }
}

function calcularFibonacci() {
    const nInput = document.getElementById("number");
    const fibonacciResult = document.getElementById("fibonacci");

    const numero = parseInt(nInput.value);
    if (isNaN(numero)) {
        fibonacciResult.textContent = "Por favor, insira um número válido.";
    } else {
        fibonacciResult.textContent = `A sequência de Fibonacci de ${numero} termos é: ${calcularFibonacciSequencia(numero).join(", ")}`;
    }
}

function calcularFibonacciSequencia(numero) {
    let sequence = [];
    for (let i = 0; i < numero; i++) {
        if (i <= 1) {
            sequence.push(i);
        } else {
            sequence.push(sequence[i - 1] + sequence[i - 2]);
        }
    }
    return sequence;
}
