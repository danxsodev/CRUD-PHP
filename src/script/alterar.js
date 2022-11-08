document.querySelector("form").addEventListener("submit", (event) => {
    event.preventDefault();
    window.alert("Dados alterados com sucesso!");
    window.history.back();
});


