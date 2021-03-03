<?php 
//poo es un paradigma de programacion
// mundo real -> aplicaciones (clases) (prototipos)
//                            clasica    basada en prototypes
//el paradigma moderno mas usado en el mundo
// imperativo -> declarativo -> objetos (clases)
// for whiles  -> foreach   -> no es evolucion


//programacion reactiva
// programacion funcional (game changer)


// mantegan el proyecto pequeño
// dividiendo en sub proyectos eviten caer en un estilo monolitico
// domain driven development
// Contabilidad - Facturacion - HR ( Pagos - Cobranzas)
// La mayoria de frameworks famosos (Laravel, CakePhp, etc ) son basados en POO con clases



//  Conceptos Basicos
// 1. Clase es una plantilla, molde, usada para crear objetos que comparten una misma forma,
// estado e identidad.

// Monitor (Clase)
// Personas (Clase) -> Propiedades o Atributos -> ( color de ojos, color de piel, estado civil)
// propiedades constantes o estaticas -> Numero Ojos (2) -> 1 boca etc... 
// Comportamientos caminar, correr, dormir
// Podrian tener o estar atados a un estado como dormido, caminando


// Monitor 4K -> resolucion 4k 


// Empleado -> empresa etc
// nombre
// apellido
// - pedirVacaciones


// Ejecutivo, Gerente, Ingeniero de software -> sueldo etc

// diseño orientado a objetos


//2. Objeto
// es una entidad que tiene metodos o mensajes a los cuales responde (comportamientos)
//atributos con valores concretos (estado) y propiedades (identidad)
//creada a partir de un molde (clase)

// Dany:Empleado  
//  - idEmp: 11111111
//  - nombre:Dany
//  - apellido: Bautista
//  - sueldo: 1000
// - pedirVacaciones
// - actualizarSueldo ()
// - actualizarNombre
// - agregarFamiliar (persona) ->  []



// 3. Metodo : es la rutina/algoritmo/codigo asociado 
// a un objeto que indica su capacidad de hacer una tarea
// function caminar/correr/dormir
function dormir ($horas) {
///////////

}


// 4. Evento y Mensaje
// Un evento es un suceso en el sistema mientras qun 
// mensaje es el comunicado del suceso dirigida al objeto


// Carro 
// -> Acelerador 
// -> Motor

// metodo acelerar es una interaccion entre el Acelerador y el Motor
// El usario acelera (evento), la presion en el acelerador es el mensaje
// y el motor es el receptor de ese mensaje.

// Abstraccion (Alexandra)
// Encapsulamiento (David Avila)
// Modularidad (Willyam)
// Ocultacion (David Amaya)
// Polimorfismo (Mauricio)
// Herencia (Richard)
// Recoleccion de basura (Leandro)
