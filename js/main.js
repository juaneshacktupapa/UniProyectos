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