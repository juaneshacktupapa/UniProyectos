CREATE DATABASE uniproyectos;
USE uniproyectos;
CREATE TABLE Usuarios (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    TipoDocumento VARCHAR(20),
    NumeroDocumento INT,
    CorreoPersonal VARCHAR(100),
    FechaNacimiento DATE,
    NumeroCelular INT,
    NumeroFijo INT,
    Direccion VARCHAR(255),
    Perfil VARCHAR(50),
    Universidad VARCHAR(100),
    Nombres VARCHAR(50),
    Apellidos VARCHAR(50),
    EstadoCivil VARCHAR(20),
    PaisNacimiento VARCHAR(50),
    CiudadNacimiento VARCHAR(50),
    AceptaTerminos BOOLEAN,
    FechaHoraRegistro TIMESTAMP,
    Sexo CHAR(1),
    CorreoInstitucional VARCHAR(100),
    Grado VARCHAR(50),
    Contrasena VARCHAR(100)
);
CREATE TABLE Empresas (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    TipoDocumento VARCHAR(20),
    NIT INT,
    NumeroCelular INT,
    NumeroFijo INT,
    Direccion VARCHAR(255),
    Nombre VARCHAR(100),
    Pais VARCHAR(50),
    RazonSocial VARCHAR(100),
    AceptaTerminos BOOLEAN,
    TipoEmpresa VARCHAR(50),
    Descripcion TEXT,
    SitioWeb VARCHAR(100),
    NombreRepresentanteLegal VARCHAR(100),
    CorreoRepresentanteLegal VARCHAR(100),
    CargoRepresentanteLegal VARCHAR(50),
    NumeroRepresentanteLegal INT,
    Tamaño VARCHAR(20),
    Area VARCHAR(50),
    FechaHoraRegistro TIMESTAMP,
    Correo VARCHAR(100),
    Contrasena VARCHAR(100)
);
CREATE TABLE Proyecto (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(100),
    Descripcion TEXT,
    Area VARCHAR(50),
    AreaTematica VARCHAR(50),
    FechaInicio DATE,
    FechaFin DATE,
    FechaRegistro TIMESTAMP,
    Estado VARCHAR(20),
    Ubicacion VARCHAR(100),
    Correo VARCHAR(100),
    Telefono VARCHAR(15),
    InformacionAdicional TEXT
);
CREATE TABLE PRO_USU (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Id_Proyecto INT,
    Id_Usuario INT,
    Id_Empresas INT,
    FOREIGN KEY (Id_Proyecto) REFERENCES Proyecto(Id),
    FOREIGN KEY (Id_Usuario) REFERENCES Usuarios(ID),
    FOREIGN KEY (Id_Empresas) REFERENCES Empresas(ID)
);