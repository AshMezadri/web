let input1 = document.getElementById('input1');
let input2 = document.getElementById('input2');
let resultado = document.getElementById('resultado');

function pares() {

    let n1 = Number(input1.value);
    let n2 = Number(input2.value);

    for (let i = n1; i <= n2; i++) {
        if (i % 2 == 0) {

            resultado.innerHTML += " " + i;
        }
    }
    
}