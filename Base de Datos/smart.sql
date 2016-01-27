
CREATE  TABLE Curso(
	id_curso int not null,
	nombre varchar(50) default null,
	nombre_curso varchar(50) default null,
	descripcion varchar(50) default null,
	estado varchar(10) default null,
	primary key(id_curso)
);

CREATE  TABLE Profesor_Curso(
	id_profesor int not null,
	id_curso int not null,
	primary key(id_profesor)
);

CREATE  TABLE Profesor(			
	id_profesor int not null,
	nombre varchar(50) default null,
	apellido varchar(50) default null,
	edad int default null,
	cedula numeric default null,
	genero int default null,
	cargo varchar(10) default null,
	email varchar(50) default null,
	primary key(id_profesor)
);

CREATE  TABLE Profesor_Estudiante(
	id_profesor int not null,
	id_estudiante int not null,
	primary key(id_profesor)
);

CREATE  TABLE Estudiante(		
	id_estudiante int not null,
	nombre varchar(50) default null,
	apellido varchar(50) default null,
	edad int default null,
	cedula numeric default null,
	genero int default null,
	email varchar(50) default null,
	primary key(id_estudiante)
);

CREATE  TABLE Direccion(
	id_direccion int not null,
	direccion_principal varchar(50) default null,
	direccion_secundaria varchar(50) default null,
	direccion_transversal varchar(50) default null,
	primary key(id_direccion)
);

CREATE  TABLE Telefono(			
	id_telefono int not null,
	codigo_pais varchar(10) default null,
	codigo_ciudad varchar(10) default null,
	numero_telefono numeric default null,
	tipo_telefono varchar(50) default null,
	primary key(id_telefono)
);

CREATE  TABLE Profesor_Materia(
	id_profesor int not null,
	id_materia int not null,
	primary key(id_profesor)
);

CREATE  TABLE Materia(
	id_materia int not null,
	nombre varchar(50) default null,
	descripcion varchar(50) default null,
	estado varchar(10) default null,
	primary key(id_materia)
);

CREATE  TABLE Calendario(
	id_calendario int not null,
	nombre varchar(50) default null,
	dia date default null,
	mes date default null,
	hora date default null,
	anio date default null,
	primary key(id_calendario)
);

CREATE  TABLE Actividad(
	id_actividad int not null,
	nombre varchar(50) default null,
	descripcion varchar(50) default null,
	estado varchar(10) default null,
	primary key(id_actividad)
);

CREATE  TABLE Nota(
	id_nota int not null,
	anio date default null,
	nota1 int default null,
	nota2 int default null,
	nota3 int default null,
	nota4 int default null,
	promedio int default null,
	recuperacion int default null,
	primary key(id_nota)
);
