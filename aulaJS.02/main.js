let note = document.getElementById('note');
var listaNotas = [];
let divLista = document.getElementById('divLista');

function add() {

    let nota = note.value;
    listaNotas.push(nota);
    displayNotas();

}

function deletar(){

    numeros.splice(index, 1);

}

function displayNotas(){
    let paragrafoNovo,divNova,buttonNovo;
    divLista.innerHTML = "";

    for (let index = 0; index < listaNotas.length; index++) {

        divNova = document.createElement("div");
        buttonNovo = document.createElement("button");
        buttonNovo = deletar();
        paragrafoNovo = document.createElement("p");
        paragrafoNovo.innerHTML = listaNotas[index];

        divNova.appendChild(paragrafoNovo);
        divNova.appendChild(buttonNovo);


        document.getElementById("divLista").appendChild(divNova);
    }
}

