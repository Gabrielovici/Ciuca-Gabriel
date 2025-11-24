// 1. Selectăm elementele de care avem nevoie
const inputActivitate = document.getElementById("inputActivitate");
const btnAdauga = document.getElementById("btnAdauga");
const listaActivitati = document.getElementById("listaActivitati");

// 2. Tablou cu lunile anului în limba română
const luni = [
    "Ianuarie", "Februarie", "Martie", "Aprilie", "Mai", "Iunie",
    "Iulie", "August", "Septembrie", "Octombrie", "Noiembrie", "Decembrie"
];

// 3. La click pe butonul "Adaugă activitate"
btnAdauga.addEventListener("click", function () {
    // 3.1. Citim textul introdus
    const textActivitate = inputActivitate.value.trim(); // .trim() elimină spațiile de la început și sfârșit

    // 3.2. Verificăm dacă NU e gol
    if (textActivitate !== "") {
        // 3.3. Creăm un nou element <li>
        const liNou = document.createElement("li");

        // 3.4. Obținem data curentă
        const acum = new Date();
        const zi = acum.getDate();         // ziua lunii
        const indexLuna = acum.getMonth(); // 0-11
        const an = acum.getFullYear();     // ex: 2025

        const numeLuna = luni[indexLuna];   // transformăm indexul în numele lunii

        // 3.5. Construim textul de forma:
        // Activitate – adăugată la: 16 Noiembrie 2025
        liNou.textContent = textActivitate + " – adăugată la: " + zi + " " + numeLuna + " " + an;

        // 3.6. Adăugăm <li>-ul în <ul id="listaActivitati">
        listaActivitati.appendChild(liNou);

        // 3.7. Golim câmpul de input
        inputActivitate.value = "";
    }
});
