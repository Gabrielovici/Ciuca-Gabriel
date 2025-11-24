const divDetalii = document.getElementById("detalii");
const btnDetalii = document.getElementById("btnDetalii");
const spanData = document.getElementById("dataProdus");


const luni = [
    "Ianuarie", "Februarie", "Martie", "Aprilie", "Mai", "Iunie",
    "Iulie", "August", "Septembrie", "Octombrie", "Noiembrie", "Decembrie"
];

divDetalii.classList.add("ascuns");

const acum = new Date();
const zi = acum.getDate();
const indexLuna = acum.getMonth();
const an = acum.getFullYear();

const numeLuna = luni[indexLuna];

const dataFormata = zi + " " + numeLuna + " " + an;

spanData.textContent = dataFormata;

btnDetalii.addEventListener("click", function () {
    divDetalii.classList.toggle("ascuns");

    if (divDetalii.classList.contains("ascuns")) {
        btnDetalii.textContent = "Afișează detalii";
    } else {
        btnDetalii.textContent = "Ascunde detalii";
    }
});
