document.addEventListener("DOMContentLoaded", function() { 
    const form = document.querySelector("form"); 
 
    form.addEventListener("submit", function(event) { 
        const nombre = form.nombre.value.trim(); 
        const email = form.email.value.trim(); 
        const edad = form.edad.value.trim(); 
        const rol = form.rol.value; 
 
        let errores = []; 
 
        if (nombre.length < 3) { 
            errores.push("El nombre debe tener al menos 3 caracteres."); 
        } 
 
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        if (!emailRegex.test(email)) { 
            errores.push("Introduce un email válido."); 
        } 
 
        if (isNaN(edad) || edad < 1 || edad > 120) { 
            errores.push("La edad debe ser un número entre 1 y 120."); 
        } 
 
        if (rol !== "user" && rol !== "admin") { 
            errores.push("Selecciona un rol válido."); 
        } 
 
        if (errores.length > 0) { 
            event.preventDefault(); // Evita que se envíe el formulario 
            alert(errores.join("\n")); 
        } 
        
    }); 
});

function validarLogin() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Complete email y contraseña");
        return false;
    }
    return true;
}
