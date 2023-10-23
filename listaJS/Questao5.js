let a = document.getElementById("inputA");
let b = document.getElementById("inputB");
let result = document.getElementById("result");

function somar(){
    result.innerHTML = Number(a.value) + Number(b.value);
}