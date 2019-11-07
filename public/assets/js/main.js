//debug
console.log("JS CHARGE");

//SCROLLREVEAL H1
ScrollReveal().reveal('h1', {
    duration: 200,
    distance: '5px',
    origin: 'top',
    delay: 200,
    reset: true
});

//TO TOP & FIXED NAVBAR
window.onscroll = function () { fixedNavbar(), scrollFunction() };
var navbar = document.querySelector(".deux");
var mybutton = document.querySelector("#toTop");
var sticky = navbar.offsetTop;

//TO TOP BUTTON apparition
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        $(mybutton).fadeIn(700);
    } else {
        $(mybutton).fadeOut(700);
    }
}

//TO TOP BUTTON action
mybutton.addEventListener('click', function topFunction() {
    $("html, body").animate({ scrollTop: 0 }, 1000);

});

//FIXED NAVBAR
function fixedNavbar() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        navbar.classList.add("sticky");
        navbar.classList.remove("deux")
    } else {
        navbar.classList.add("deux");
        navbar.classList.remove("sticky");

    }
}

//MENU HAMBURGER
$(document).ready(function () {
    $(".menuNav").hide();
    $(function () {
        $(".menuHamb").on("click", function () {
            $(".menuNav").toggle(200);
        })
        $(".arrow-back").on('click', function () {
            $(".menuNav").toggle(200);
        })
    })
})


//VUEJS
var app = new Vue({
    el: '.app',
    methods: {
        envoyerFormAjax: function (event) {
            // debug
            console.log(event.target);
            // JE VEUX RECUPERER LES INFORMATIONS REMPLIES PAR LE MEMBRE
            var formData = new FormData(event.target);
            // JE REPRENDS L'URL DANS LE HTML
            var urlAction = event.target.getAttribute('action');
            // ET ON ENVOIE LES INFOS VERS LA MEME URL
            fetch(urlAction, {
                method: 'POST',
                body: formData
            })
                .then(function (reponse) {
                    // ON CONVERTIT LE MESSAGE DE REPONSE EN OBJET JSON
                    return reponse.json();
                })
                .then(function (reponseObjetJSON) {
                    if (reponseObjetJSON.confirmation) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.confirmation = reponseObjetJSON.confirmation;
                    }
                    if (reponseObjetJSON.erreur) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.erreur = reponseObjetJSON.erreur;
                    }
                    if (reponseObjetJSON.contacts) {
                        // ON VA STOCKER LA CONFiRMATION DANS UNE VARIABLE VUEJS
                        app.contacts = reponseObjetJSON.contacts;
                    }

                });
        }
    },

    data: {
        // ICI JE RAJOUTE LES VARIABLES GEREES PAR VUEJS
        contactUpdate: null,
        contacts: [],
        confirmation: '',
        erreur: '',
        message: 'Hello Vue !'
    }
});






