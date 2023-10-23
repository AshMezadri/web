let note = document.getElementById('note');
var listaNotas = [];
let divLista = document.getElementById('divLista');

function add() {

    let nota = note.value;
    listaNotas.push(nota);
    displayNotas();

}

function displayNotas(){
    let paragrafoNovo;
    divLista.innerHTML = "";

    for (let index = 0; index < listaNotas.length; index++) {

        paragrafoNovo = document.createElement("p");
        paragrafoNovo.innerHTML = listaNotas[index];

        if(index%2==0){
            paragrafoNovo.style.backgroundColor = "#96B6C5";
        }else{
            paragrafoNovo.style.backgroundColor = "#F1F0E8";
            paragrafoNovo.style.color = "rgb(0,0,0)";
        }

        divLista.append(paragrafoNovo);
    }
}