const userInput = document.getElementById("usuario");
const passwordInput = document.getElementById("password");
const submitBtn = document.getElementById("submit-btn");
const form = document.getElementById("miForm");

function camposCompletos() {
    const usuario = userInput.value.trim();
    const password = passwordInput.value.trim();
    return usuario !== "" && password !== "";
}

function verificarCampos() {
    submitBtn.disabled = !camposCompletos();
}

userInput.addEventListener("input", verificarCampos);
passwordInput.addEventListener("input", verificarCampos);

form.addEventListener("submit", function (event) {
    if (!camposCompletos()) {
        event.preventDefault();
        submitBtn.disabled = true;
    }
});

verificarCampos();
