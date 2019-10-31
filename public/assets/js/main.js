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
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
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

//Modale LogIn
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
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
                    if (reponseObjetJSON.annonces) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.annonces = reponseObjetJSON.annonces;
                    }
                });
        }
    },
    data: {
        // ICI JE RAJOUTE LES VARIABLES GEREES PAR VUEJS
        annonceUpdate: null,
        annonces: [],
        confirmation: '',
        message: 'Hello Vue !'
    }
});






