CREATE DATABASE uniproyectos;
USE uniproyectos;
CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(50),
    apellidos VARCHAR(50),
    correoPersonal VARCHAR(100),
    contrasena VARCHAR(100),
    numeroCelular INT,
    numeroFijo INT,
    tipoDocumento VARCHAR(20),
    numeroDocumento INT,
    fechaNacimiento DATE,
    paisNacimiento VARCHAR(50),
    ciudadNacimiento VARCHAR(50),
    direccion VARCHAR(255),
    estadoCivil VARCHAR(20),
    sexo CHAR(1),
    perfil VARCHAR(50), -- Profesor Estudiante Publico General
    universidad VARCHAR(100),
    correoInstitucional VARCHAR(100),
    grado VARCHAR(50), -- Sin estudios Primaria Secundaria Tencnico Tecnologo Profesional Especialización Maestria Doctorado
    aceptaTerminos BOOLEAN,
    fechaHoraRegistro TIMESTAMP    
);
CREATE TABLE Empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    razonSocial VARCHAR(100),
    correo VARCHAR(100),
    contrasena VARCHAR(100),
    numeroFijo INT,
    numeroCelular INT,
    NIT INT,
    tipoEmpresa VARCHAR(50),
    descripcion TEXT,
    area VARCHAR(50),
    tamaño VARCHAR(20),
    sitioWeb VARCHAR(100),
    pais VARCHAR(50),
    direccion VARCHAR(255),
    nombreRepresentanteLegal VARCHAR(100),
    cargoRepresentanteLegal VARCHAR(50),
    correoRepresentanteLegal VARCHAR(100),
    numeroRepresentanteLegal INT,
    aceptaTerminos BOOLEAN,
    fechaHoraRegistro TIMESTAMP
);
CREATE TABLE Proyecto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    descripcion TEXT,
    area VARCHAR(50),
    areaTematica VARCHAR(50),
    estado VARCHAR(20),
    ubicacion VARCHAR(100),
    correo VARCHAR(100),
    telefono VARCHAR(15),
    fechaInicio DATE,
    fechaFin DATE,
    fechaRegistro TIMESTAMP,
    informacionAdicional TEXT
);
CREATE TABLE PRO_USU (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_Proyecto INT,
    id_Usuario INT,
    id_Empresas INT,
    FOREIGN KEY (id_Proyecto) REFERENCES Proyecto(id),
    FOREIGN KEY (id_Usuario) REFERENCES Usuarios(iD),
    FOREIGN KEY (id_Empresas) REFERENCES Empresas(iD)
);