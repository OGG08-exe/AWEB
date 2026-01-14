
function validarFormulario() {
    let email = document.getElementById("email")?.value.trim();
    let password = document.getElementById("password")?.value;

    if (email === "" || password === "") {
        alert("Email y contraseña obligatorios");
        return false;
    }
    return true;
}

function confirmarBorrado() {
    return confirm("¿Seguro que quieres borrar este usuario?");
}

function confirmarLogout() {
    return confirm("¿Quieres cerrar sesión?");
}

function togglePassword(id) {
    let input = document.getElementById(id);
    input.type = (input.type === "password") ? "text" : "password";
}

