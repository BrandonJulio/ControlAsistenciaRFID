const formularioUI = document.querySelector('#formulario');
const listaMateriasUI = document.getElementById('ListaMaterias');

const listaMateriasUI2 = document.getElementById('ListaMaterias2');
//let personas = [];
let arrayMaterias = [];



function CalcularDefinitiva1(Quiz1, Taller1, ParcialPractico1, ParcialTeorico1, PorcentajeQuiz1, PorcentajeTaller1, PorcentajeParcialPractico1, PorcentajeParcialTeorico1) {
    var definitiva = 0;
    var porcentajetotal = 0;
    porcentajetotal = parseInt(PorcentajeQuiz1) + parseInt(PorcentajeTaller1) + parseInt(PorcentajeParcialPractico1) + parseInt(PorcentajeParcialTeorico1);
           console.log(porcentajetotal);

    if (porcentajetotal != 100) {
        alert('VERIFIQUE PORCENTAJES DEL PRIMER CORTE');
    } else {
        PorcentajeQuiz1 = PorcentajeQuiz1 / 100;
        PorcentajeTaller1 = PorcentajeTaller1 / 100;
        PorcentajeParcialPractico1 = PorcentajeParcialPractico1 / 100;
        PorcentajeParcialTeorico1 = PorcentajeParcialTeorico1 / 100;
        definitiva = ((Quiz1 * PorcentajeQuiz1) + (Taller1 * PorcentajeTaller1) + (ParcialPractico1 * PorcentajeParcialPractico1) + (ParcialTeorico1 * PorcentajeParcialTeorico1))
        document.getElementById("definitiva").value = definitiva;
        var ponderado1 = 0;
        ponderado1 = 0.30 * definitiva;
        document.getElementById("ponderado1").value = ponderado1;

        console.log(definitiva);

        return definitiva;
    }


}

function CalcularDefinitiva2(Quiz2, Taller2, ParcialPractico2, ParcialTeorico2, PorcentajeQuiz2, PorcentajeTaller2, PorcentajeParcialPractico2, PorcentajeParcialTeorico2) {
    var definitiva = 0;
    var porcentajetotal = 0;
    porcentajetotal = parseInt(PorcentajeQuiz2) + parseInt(PorcentajeTaller2) + parseInt(PorcentajeParcialPractico2) + parseInt(PorcentajeParcialTeorico2);
    porcentajetotal = parseInt(PorcentajeQuiz2) + parseInt(PorcentajeTaller2) + parseInt(PorcentajeParcialPractico2) + parseInt(PorcentajeParcialTeorico2);
    if (porcentajetotal != 100) {
        alert('VERIFIQUE PORCENTAJES DEL SEGUNDO CORTE');
    } else {
        PorcentajeQuiz2 = PorcentajeQuiz2 / 100;
        PorcentajeTaller2 = PorcentajeTaller2 / 100;
        PorcentajeParcialPractico2 = PorcentajeParcialPractico2 / 100;
        PorcentajeParcialTeorico2 = PorcentajeParcialTeorico2 / 100;
        definitiva = ((Quiz2 * PorcentajeQuiz2) + (Taller2 * PorcentajeTaller2) + (ParcialPractico2 * PorcentajeParcialPractico2) + (ParcialTeorico2 * PorcentajeParcialTeorico2))
        document.getElementById("definitiva2").value = definitiva;

        var ponderado2 = 0;
        ponderado2 = 0.30 * definitiva;
        document.getElementById("ponderado2").value = ponderado2;

        console.log(ponderado2);


        return definitiva;
    }


}

function CalcularDefinitiva3(Quiz3, Taller3, ParcialPractico3, ParcialTeorico3, PorcentajeQuiz3, PorcentajeTaller3, PorcentajeParcialPractico3, PorcentajeParcialTeorico3) {
    var definitiva = 0;
    var porcentajetotal = 0;

    porcentajetotal = parseInt(PorcentajeQuiz3) + parseInt(PorcentajeTaller3) + parseInt(PorcentajeParcialPractico3) + parseInt(PorcentajeParcialTeorico3);
    if (porcentajetotal != 100) {
        alert('VERIFIQUE PORCENTAJES DEL TERCER CORTE');
    } else {
        PorcentajeQuiz3 = PorcentajeQuiz3 / 100;
        PorcentajeTaller3 = PorcentajeTaller3 / 100;
        PorcentajeParcialPractico3 = PorcentajeParcialPractico3 / 100;
        PorcentajeParcialTeorico3 = PorcentajeParcialTeorico3 / 100;
        definitiva = ((Quiz3 * PorcentajeQuiz3) + (Taller3 * PorcentajeTaller3) + (ParcialPractico3 * PorcentajeParcialPractico3) + (ParcialTeorico3 * PorcentajeParcialTeorico3))
        document.getElementById("definitiva3").value = definitiva;
        var ponderado3 = 0;
        ponderado3 = 0.40 * definitiva;
        document.getElementById("ponderado3").value = ponderado3;

        return definitiva;
    }


}

function CalcularSemestreMateria(ponderado1, ponderado2, ponderado3) {
    var definitivamateria=0;
    definitivamateria = parseFloat(ponderado1) + parseFloat(ponderado2) + parseFloat(ponderado3);

    return definitivamateria;
}
function ArmarJSON4() {

    var ponderado1 = document.getElementById("ponderado1").value;
    var ponderado2 = document.getElementById("ponderado2").value;
    var ponderado3 = document.getElementById("ponderado3").value;
    var definitivamateria=CalcularSemestreMateria(ponderado1, ponderado2, ponderado3);
    console.log(definitivamateria);

    var materia = {
        "ponderado1":ponderado1,
        "ponderado2":ponderado2,
        "ponderado3":ponderado3,
        "definitivamateria":definitivamateria
        
    }
    return materia;

}
/*
function guardarMateriaTotal(materia) {
    let materia1 = [];
    var materia = ArmarJSON4();

    if (localStorage.getItem('BdDefinitiva') != null) {

        materia1 = JSON.parse(localStorage.getItem('BdDefinitiva'));
    }
    materia1.push(materia);
    localStorage.setItem('BdDefinitiva', JSON.stringify(materia1));
}*/
function guardarMateriaTotal(nota) {
    let corte1 = [];
    var nota = ArmarJSON4();

    if (localStorage.getItem('BDLocalFinal') != null) {

        corte1 = JSON.parse(localStorage.getItem('BDLocalFinal'));
    }
    corte1.push(nota);
    localStorage.setItem('BDLocalFinal', JSON.stringify(corte1));
}

function ArmarJSON3() {

    /* Sacar los Valores de HTML accediendo al DOM. */
    var quiz3 = document.getElementById("quiz3").value
    var taller3 = document.getElementById("taller3").value;
    var parcialpractico3 = document.getElementById("parcialpractico3").value;
    var parcialteorico3 = document.getElementById("parcialteorico3").value;

    var porcentajequiz3 = document.getElementById("porcentajequiz3").value;
    var porcentajetaller3 = document.getElementById("porcentajetaller3").value;
    var porcentajeparcialpractico3 = document.getElementById("porcentajeparcialpractico3").value;
    var porcentajeparcialteorico3 = document.getElementById("porcentajeparcialteorico3").value;

    var CodigoMateria = document.getElementById("CodigoMateria").value;
    var IdEstudiante = document.getElementById("IdEstudiante").value;
    var NombreEstudiante = document.getElementById("NombreEstudiante").value;
    var NombreMateria = document.getElementById("NombreMateria").value;

    var ponderado3 = document.getElementById("ponderado3").value;


    var definitiva = CalcularDefinitiva3(quiz3, taller3, parcialpractico3, parcialteorico3, porcentajequiz3, porcentajetaller3, porcentajeparcialpractico3, porcentajeparcialteorico3);/* Calcular la definitiva*/
    var defi = document.getElementById("definitiva3").value;


    /* Armar un JSON con las notas*/
    var nota3 = {
        "quiz3": quiz3,
        "taller3": taller3,
        "parcialpractico3": parcialpractico3,
        "parcialteorico3": parcialteorico3,
        "defi": defi,
        "porcentajequiz3": porcentajequiz3,
        "porcentajetaller3": porcentajetaller3,
        "porcentajeparcialpractico3": porcentajeparcialpractico3,
        "porcentajeparcialteorico3": porcentajeparcialteorico3,
        "CodigoMateria": CodigoMateria,

        "IdEstudiante": IdEstudiante,
        "NombreEstudiante": NombreEstudiante,
        "NombreMateria": NombreMateria,
        "ponderado": ponderado3


    }
    return nota3;
}


function ArmarJSON2() {

    /* Sacar los Valores de HTML accediendo al DOM. */
    var quiz2 = document.getElementById("quiz2").value
    var taller2 = document.getElementById("taller2").value;
    var parcialpractico2 = document.getElementById("parcialpractico2").value;
    var parcialteorico2 = document.getElementById("parcialteorico2").value;

    var porcentajequiz2 = document.getElementById("porcentajequiz2").value;
    var porcentajetaller2 = document.getElementById("porcentajetaller2").value;
    var porcentajeparcialpractico2 = document.getElementById("porcentajeparcialpractico2").value;
    var porcentajeparcialteorico2 = document.getElementById("porcentajeparcialteorico2").value;

    var CodigoMateria = document.getElementById("CodigoMateria").value;
    var IdEstudiante = document.getElementById("IdEstudiante").value;
    var NombreEstudiante = document.getElementById("NombreEstudiante").value;
    var NombreMateria = document.getElementById("NombreMateria").value;
    var ponderado2 = document.getElementById("ponderado2").value;


    var definitiva = CalcularDefinitiva2(quiz2, taller2, parcialpractico2, parcialteorico2, porcentajequiz2, porcentajetaller2, porcentajeparcialpractico2, porcentajeparcialteorico2);/* Calcular la definitiva*/
    var defi = document.getElementById("definitiva2").value;

    /* Armar un JSON con las notas*/
    var nota2 = {
        "quiz2": quiz2,
        "taller2": taller2,
        "parcialpractico2": parcialpractico2,
        "parcialteorico2": parcialteorico2,
        "defi": defi,
        "porcentajequiz2": porcentajequiz2,
        "porcentajetaller2": porcentajetaller2,
        "porcentajeparcialpractico2": porcentajeparcialpractico2,
        "porcentajeparcialteorico2": porcentajeparcialteorico2,
        "CodigoMateria": CodigoMateria,

        "IdEstudiante": IdEstudiante,
        "NombreEstudiante": NombreEstudiante,
        "NombreMateria": NombreMateria,
        "ponderado2": ponderado2

    }
    return nota2;
}

function ArmarJSON() {

    /* Sacar los Valores de HTML accediendo al DOM. */
    var quiz1 = document.getElementById("quiz1").value
    var taller1 = document.getElementById("taller1").value;
    var parcialpractico1 = document.getElementById("parcialpractico1").value;
    var parcialteorico1 = document.getElementById("parcialteorico1").value;

    var porcentajequiz1 = document.getElementById("porcentajequiz1").value;
    var porcentajetaller1 = document.getElementById("porcentajetaller1").value;
    var porcentajeparcialpractico1 = document.getElementById("porcentajeparcialpractico1").value;
    var porcentajeparcialteorico1 = document.getElementById("porcentajeparcialteorico1").value;

    var CodigoMateria = document.getElementById("CodigoMateria").value;
    var IdEstudiante = document.getElementById("IdEstudiante").value;
    var NombreEstudiante = document.getElementById("NombreEstudiante").value;
    var NombreMateria = document.getElementById("NombreMateria").value;

    var ponderado1 = document.getElementById("ponderado1").value;

    var definitiva = CalcularDefinitiva1(quiz1, taller1, parcialpractico1, parcialteorico1, porcentajequiz1, porcentajetaller1, porcentajeparcialpractico1, porcentajeparcialteorico1);

    var defi = document.getElementById("definitiva").value;

    /* Armar un JSON con las notas*/
    var nota = {
        "quiz1": quiz1,
        "taller1": taller1,
        "parcialpractico1": parcialpractico1,
        "parcialteorico1": parcialteorico1,
        "defi": defi,
        "porcentajequiz1": porcentajequiz1,
        "porcentajetaller1": porcentajetaller1,
        "porcentajeparcialpractico1": porcentajeparcialpractico1,
        "porcentajeparcialteorico1": porcentajeparcialteorico1,
        "CodigoMateria": CodigoMateria,

        "IdEstudiante": IdEstudiante,
        "NombreEstudiante": NombreEstudiante,
        "NombreMateria": NombreMateria,
        "ponderado1": ponderado1
    }
    return nota;
}
function CalcularNota1(nota) {
    let notas = [];/* array de notas este servira para hacer una copia de los datos del LocalStorage*/
    var cortenota = ArmarJSON();

}

function CalcularNota2(nota2) {
    let notas = [];/* array de notas este servira para hacer una copia de los datos del LocalStorage*/
    var cortenota = ArmarJSON2();


}

function CalcularNota3(nota3) {
    let notas = [];/* array de notas este servira para hacer una copia de los datos del LocalStorage*/
    var cortenota = ArmarJSON3();


}

function CalcularNota4(materia) {
    let notas = [];/* array de notas este servira para hacer una copia de los datos del LocalStorage*/
    var cortenota = ArmarJSON4();


}

function guardarCorte(nota) {
    let corte1 = [];
    var nota = ArmarJSON();

    if (localStorage.getItem('BDLocal') != null) {

        corte1 = JSON.parse(localStorage.getItem('BDLocal'));
    }
    corte1.push(nota);
    localStorage.setItem('BDLocal', JSON.stringify(corte1));
    PintarDB();
}


function guardarCorte2(nota2) {
    let corte2 = [];
    var nota2 = ArmarJSON2();

    if (localStorage.getItem('BDLocal2') != null) {

        corte2 = JSON.parse(localStorage.getItem('BDLocal2'));
    }
    corte2.push(nota2);
    localStorage.setItem('BDLocal2', JSON.stringify(corte2));
    PintarDB2();
}


function guardarCorte3(nota3) {
    let corte3 = [];
    var nota3 = ArmarJSON3();

    if (localStorage.getItem('BDLocal3') != null) {

        corte3 = JSON.parse(localStorage.getItem('BDLocal3'));
    }
    corte3.push(nota3);
    localStorage.setItem('BDLocal3', JSON.stringify(corte3));
}


const PintarDB = () => {
    listaMateriasUI.innerHTML = '';
    cortes1 = JSON.parse(localStorage.getItem('BDLocal'));
    if (cortes1 === null) {
        cortes1 = [];
    } else {
        cortes1.forEach(element => {

            listaMateriasUI.innerHTML += `<div class="alert alert-success" role="alert">
                <span class="material-icons"> assignment
                </span> <b>Definitiva:</b> ${element.defi} - <b> Nombre de materia:</b>  ${element.NombreMateria} - <b> Nota QUIZ:</b>  ${element.quiz1}<span class="float-right"><span class="material-icons">done</span><span class="material-icons">delete_forever</span></span></div>`

        });
    }
}

const PintarDB2 = () => {
    listaMateriasUI2.innerHTML = '';
    cortes2 = JSON.parse(localStorage.getItem('BDLocal2'));
    if (cortes2 === null) {
        cortes2 = [];
    } else {
        cortes2.forEach(element => {

            listaMateriasUI2.innerHTML += `<div class="alert alert-success" role="alert">
                <span class="material-icons"> assignment
                </span> <b>Definitiva:</b> ${element.defi} - <b> Nombre de PERRO:</b>  ${element.NombreMateria} - <b> Nota QUIZ:</b>  ${element.quiz2}<span class="float-right"><span class="material-icons">done</span><span class="material-icons">delete_forever</span></span></div>`

        });
    }
}


const EliminarDB = (CodigoMateria) => {
    let indexArray
    personas.forEach((element, index) => {
        if (element.CodigoMateria === CodigoMateria) {
            indexArray = index;
        }
    });
    personas.splice(indexArray, 1);
    guardarCorte();
}

formularioUI.addEventListener('submit', (e) => {
    e.preventDefault();
    /*guardarCorte2();
    guardarCorte();
    guardarCorte3();*/
    guardarMateriaTotal();
    formularioUI.reset();
});

document.addEventListener('DOMContentLoaded', PintarDB2);

listaMateriasUI.addEventListener('click', (e) => {
    e.preventDefault();

    if (e.target.innerHTML === 'done' || e.target.innerHTML === 'delete_forever') {
        let texto = e.path[2].childNodes[3].innerHTML;
        if (e.target.innerHTML === 'done') {
            EditarDB(texto);
        }

        if (e.target.innerHTML === 'delete_forever') {
            EliminarDB(texto);
        }
    }
});

