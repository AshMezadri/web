// Função para adicionar números e operadores no campo de entrada
function insertNum(num) {
    const inputField = document.getElementById('input');
    inputField.value += num;
  }
  
  // Função para apagar o último caractere no campo de entrada
  function eraseNum() {
    const inputField = document.getElementById('input');
    inputField.value = inputField.value.slice(0, -1);
  }
  
  // Função para calcular o resultado
  function equalTo() {
    const inputField = document.getElementById('input');
    try {
      inputField.value = eval(inputField.value);
    } catch (error) {
      inputField.value = 'Erro';
    }
  }
  
  // Função para limpar o campo de entrada
  function clearInput() {
    const inputField = document.getElementById('input');
    inputField.value = '';
  }
  
  // Adicione um evento de clique ao botão "C" para limpar o campo de entrada
  document.querySelector('.btn.operacao').addEventListener('click', clearInput);
  
  // Adicione um evento de clique ao botão "⌦" para apagar o último caractere
  document.getElementById('delete').addEventListener('click', eraseNum);
  