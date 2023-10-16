let n1 = document.getElementById('input1');
let n2 = document.getElementById('input2');
let resultado = document.getElementById('resultado');


function calcular(){
    
    let input1 = Number(n1.value);
    let input2 = Number(n2.value);

    soma = input1 + input2;

    resultado.innerHTML = soma;
}