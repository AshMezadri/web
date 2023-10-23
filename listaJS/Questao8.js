function calculateFatorial() {
    const numberInput = document.getElementById("number");
    const fatorialResult = document.getElementById("fatorial-result");

    const number = parseInt(numberInput.value);
    if (isNaN(number)) {
        fatorialResult.textContent = "Por favor, insira um número válido.";
    } else {
        fatorialResult.textContent = `O fatorial de ${number} é ${calculateFactorial(number)}.`;
    }
}

function calculateFactorial(number) {
    if (number <= 1) {
        return 1;
    } else {
        return number * calculateFactorial(number - 1);
    }
}

function calculateFibonacci() {
    const numberInput = document.getElementById("number");
    const fibonacciResult = document.getElementById("fibonacci-result");

    const number = parseInt(numberInput.value);
    if (isNaN(number)) {
        fibonacciResult.textContent = "Por favor, insira um número válido.";
    } else {
        fibonacciResult.textContent = `A sequência de Fibonacci de ${number} termos é: ${calculateFibonacciSequence(number).join(", ")}`;
    }
}

function calculateFibonacciSequence(number) {
    let sequence = [];
    for (let i = 0; i < number; i++) {
        if (i <= 1) {
            sequence.push(i);
        } else {
            sequence.push(sequence[i - 1] + sequence[i - 2]);
        }
    }
    return sequence;
}
