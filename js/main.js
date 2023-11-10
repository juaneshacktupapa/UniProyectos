function mostrarCamposRegistro() {
    var tipoRegistro = document.getElementById("tipoRegistro").value;
    var usuarios = document.getElementById("usuarios");
    var empresas = document.getElementById("empresas");

    // Campos para Usuarios
    var camposUsuarios = [
        "nombres", "apellidos", "correoPersonal", "contrasena",
        "numeroCelular", "numeroFijo", "tipoDocumento", "numeroDocumento",
        "fechaNacimiento", "paisNacimiento", "ciudadNacimiento", "direccion",
        "estadoCivil", "sexo", "perfil", "universidad", "correoInstitucional",
        "grado", "aceptaTerminos"
    ];

    // Campos para Empresas
    var camposEmpresas = [
        "nombre", "razonSocial", "correo", "contrasenaE", "numeroFijoE",
        "numeroCelularE", "NIT", "tipoEmpresa", "descripcion", "area",
        "tamaño", "sitioWeb", "pais", "direccionE", "nombreRepresentanteLegal",
        "cargoRepresentanteLegal", "correoRepresentanteLegal",
        "numeroRepresentanteLegal", "aceptaTerminosE"
    ];

    if (tipoRegistro === "usuarios") {
        usuarios.style.display = "block";
        usuarios.style.visibility = "visible";

        empresas.style.display = "none";
        empresas.style.visibility = "hidden";
    } else if (tipoRegistro === "empresas") {
        usuarios.style.display = "none";
        usuarios.style.visibility = "hidden";

        empresas.style.display = "block";
        empresas.style.visibility = "visible";
    }

    if (tipoRegistro === "usuarios") {
        mostrarCampos(camposUsuarios, true);
        mostrarCampos(camposEmpresas, false);
    } else if (tipoRegistro === "empresas") {
        mostrarCampos(camposUsuarios, false);
        mostrarCampos(camposEmpresas, true);
    }
}

function mostrarCampos(campos, mostrar) {
    campos.forEach(function (campo) {
        var elemento = document.getElementById(campo);

        // Manejar el atributo 'required'
        if (mostrar) {
            elemento.setAttribute("required", "required");
        } else {
            elemento.removeAttribute("required");
        }
    });
}

function llenarCampoPais(selectId) {
  // URL de la API "REST Countries" para obtener la lista de países
  const apiUrl = "https://restcountries.com/v3.1/all";

  // Realizar una solicitud GET a la API
  fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
          const select = document.getElementById(selectId);
          
          // Agregar una opción predeterminada
          const defaultOption = document.createElement("option");
          defaultOption.text = "Selecciona un país";
          select.appendChild(defaultOption);
          // Ordenar la lista de países alfabéticamente
          data.sort((a, b) => a.name.common.localeCompare(b.name.common));
          
          // Agregar opciones para el campo de país
          data.forEach(country => {
              const option = document.createElement("option");
              option.value = country.name.common;
              option.text = country.name.common;
              select.appendChild(option);
          });
      })
      .catch(error => console.error("Error al cargar la lista de países:", error));
}

// Llenar el campo de país de nacimiento
llenarCampoPais("paisNacimiento");

// Llenar el campo de país de residencia
llenarCampoPais("pais");