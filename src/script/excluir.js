document.querySelector("form").addEventListener("submit", (event) => {
    event.preventDefault();
    window.alert("Dados excluídos com sucesso!");
    window.history.back();
});
