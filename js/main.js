function mostrarCamposRegistro() {
    var tipoRegistro = document.getElementById("tipoRegistro").value;
    var usuarios = document.getElementById("usuarios");
    var empresas = document.getElementById("empresas");
        
    if (tipoRegistro === "usuarios") {
        usuarios.style.display = "block";
        empresas.style.display = "none";
    } else if (tipoRegistro === "empresas") {
        usuarios.style.display = "none";
        empresas.style.display = "block";
    }
}