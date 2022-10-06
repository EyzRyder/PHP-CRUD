const tbody = document.querySelector("tbody");
const modal = document.getElementById("modalCadastro");
const btn = document.getElementById("inserir");
const span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "grid";
  }
  
span.onclick = function() {
    modal.style.display = "none";
  }

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}

const listarUsers = async () => {
    const dados = await fetch("/listar.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

async function apagarUsuarioDados(id) {

  var confirmar = confirm("Tem certeza que deseja excluir o registro selecionado?");

  if (confirmar == true) {
    const dados = await fetch('apagar.php?id=' + id);
  }

}

listarUsers();



