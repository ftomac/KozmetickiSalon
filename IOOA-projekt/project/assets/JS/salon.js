var masaza_cijelog_tijela = 7200000 
var masaza_leda = 3600000 
var masaza_lica = 3600000 
var profesionalno_sminkanje = 3600000 
var pedikura = 5400000 
var manikura = 5400000 
var umjetni_nokti = 7200000 
var trajni_lak = 7200000 
var ugradnja_trepavica = 3600000 
var test = 10000 
var adminPass = 2200
var isInUse = true;
var setInterval;
var localStorage;
var window;
var $;
var alert;
var prompt;
var clearInterval;

$("#nastavi").on("click", function() {
    if ($("#name").val() == "" || $('input[name=vrstaPlacanja]:checked').val() == "") {
        alert("neispravan unos!");
    } else {
        var name = $("#name").val();
        localStorage.setItem("nameKey", name);
        var prezime = $("#prezime").val();
        localStorage.setItem("prezimeKey", prezime);
        var vrUsluge = $(".selGumb").val();
        localStorage.setItem("vrUslugeKey", vrUsluge);
        var Datumtermina = $(".selgumb").val();
        localStorage.setItem("DatumterminaKey", Datumtermina);
        var vrPlacanja = $('input[name=vrstaPlacanja]:checked').val()
        localStorage.setItem("vrstaPlacanjaKey", vrPlacanja);
        window.location.href = '../rg/IOOA-projekt/project/rezervacija.html';
    }
})


$(".card").on("click", ".btn-outline-success", function() {
    var toggleCard = $(this).parent().parent();
    var toggleButton = $(this);
    toggleCard.toggleClass("inUse");
    toggleButton.toggleClass("disabled");
   
    
    $(this).parent().parent().find("span:eq(0)").text(localStorage.getItem("nameKey"));
    $(this).parent().parent().find("span:eq(0)").text(localStorage.getItem("prezimeKey"));
    $(this).parent().parent().find("span:eq(1)").text(localStorage.getItem("vrUslugeKey"));
    $(this).parent().parent().find("span:eq(2)").text(localStorage.getItem("DatumterminaKey"));



    var brojac = $(this).parent().parent().find("span:eq(3)");
    var odabrana;
    if (localStorage.getItem("vrUslugeKey") === "Masaza cijelog tijela"){
        odabrana = masaza_cijelog_tijela;
    }else if (localStorage.getItem("vrUslugeKey") === "Profesionalno sminkanje"){
        odabrana = profesionalno_sminkanje;
    }else if (localStorage.getItem("vrUslugeKey") === "Test"){ //dodao za test
        odabrana = test;
    }else if (localStorage.getItem("vrUslugeKey") === "Masaza leda"){ //dodao za test
        odabrana = masaza_leda;
    }else if (localStorage.getItem("vrUslugeKey") === "Masaza lica"){ //dodao za test
        odabrana = masaza_lica;
    }else if (localStorage.getItem("vrUslugeKey") === "Pedikura"){ //dodao za test
        odabrana = pedikura;
    }else if (localStorage.getItem("vrUslugeKey") === "Manikura"){ //dodao za test
        odabrana = manikura;
    }else if (localStorage.getItem("vrUslugeKey") === "Umjetni nokti"){ //dodao za test
        odabrana = umjetni_nokti;
    }else if (localStorage.getItem("vrUslugeKey") === "Trajni lak"){ //dodao za test
        odabrana = trajni_lak;
    }else if (localStorage.getItem("vrUslugeKey") === "Ugradnja trepavica"){ //dodao za test
        odabrana = ugradnja_trepavica;
    }else {

        odabrana = ostalo;
    }

    var x = setInterval(function() {
        odabrana -= 1000;
        var hours = Math.floor((odabrana % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((odabrana % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((odabrana % (1000 * 60)) / 1000);

        brojac.html(hours + "h " + minutes + "m "  + seconds + "s ");

        if (odabrana <= 0) {
            toggleCard.toggleClass("inUse");
            toggleButton.toggleClass("disabled");
            brojac.html("");
            clearInterval(x);
        }
    }, 1000);
})

$(".btn-outline-danger").on("click", function(){
    var password = prompt("Unesite admin lozinku!");
    if(password == adminPass){
        $(this).parent().parent().toggleClass("Makni");
        $(this).parent().parent().toggleClass("tekst");
        $(this).parent().find(".btn-outline-success").toggleClass("disabled");
        if($(this).text() == "Sakri"){
            $(this).text("Odabrano");
        }else{
            $(this).text("Makni")
        }
    }else{
        alert("Netočna admin lozinka!");
    }
});