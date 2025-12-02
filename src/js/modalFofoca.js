const modal = document.getElementById("modalFofoca");
const btnAbrir = document.getElementById("abrirModal");
const btnFechar = document.getElementById("fecharModal");

// funcao p abrir modal
function abrirModal() {
    btnAbrir.addEventListener("click", ()=> {
        modal.style.display = "block";
    })
}

//funcao p fechar modal
function fecharModal() {
    btnFechar.addEventListener("click", ()=> {
        modal.style.display = "none";
    })
}

//fechar modal quando clicar fora 
window.addEventListener("click", (e) => {
    if(e.target === modal) {
        modal.style.display = "none"
    }
})


abrirModal();
fecharModal();