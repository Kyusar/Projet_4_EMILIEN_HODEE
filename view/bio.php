<!-- Page biographie -->
<?php $title='Qui suis-je ?';
$main_title="Biographie";

ob_start(); ?>
    <style>
        html, body {
            height : initial;
        }
    </style>
    <div class="container" id="main_section">
        <div class="col">
            <h2 class="name_author"><u> Jean Forteroche - Saltimbanque des mots </u></h2>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="front_image" src="public/images/forteroche.jpg" alt="Paysage" name="paysage">
            </div>
            <div class="col-6 text_bio_1">
                <p class="lead">
                        Il est de notoriété publique que Jean Forteroche n'aime guère parler de lui, qui plus est à la troisième personne du singulier.
                        Seulement, dans la mesure où la page que vous parcourez s'intitule sobrement "Biographie", nous serions bien embêtés si je décidais de ne pas honorer le contrat qui vous a précisément amené ici. J'en suis tout à fait capable, n'en doutez pas, cher lecteur avisé. Et je pourrais continuer des heures durant à deviser sur le bien-fondé de ma pudeur, ou encore sur le fameux contrat qui m'oblige à temporairement la souiller.  <br />   
                </p>    
            </div> 
        </div>  
        <div class="row">
            <div class="col col-offest-2 text_bio_2">
                <p class="lead">
                    C'est pour cette raison que je m'adresserai à vous comme je m'adresserais à un vieil ami. On a plus grand chose à cacher à un vieil ami, si ce n'est cette part de mystère qui vous rend irrésistiblement intéressant. Car celui qui aime parler de lui suscitera très vite le désintérêt, et celui qui ne dit rien, l'ennui. Distribuer avec minutie les parcelles de son histoire, c'est bien là tout l'art de l'écrivain. <br />
                    Ainsi, mon vieil ami, il ne vous a pas échappé que je suis écrivain et qu'en qualité d'écrivain, j'écris des livres, dans lesquels je transpose mon goût pour l'absurde et les personnages pittoresques. Certains appelleront cela une signature, d'autres une façon de cacher l'angoisse de la médiocrité. <br />
                    Il est d'usage de citer les créations qui m'ont permis de vivre de ma plume, alors je me permettrais d'évoquer "Double meurtre à Doubleville" (1993), "L'homme qui parlait aux truites" (1997), "Le burn-out de l'épouvantail" (2008) et, plus récemment, "Billet simple pour l'Alaska", un roman dont vous pourrez suivre la progression en direct sur ce blog.<br />
                    Sinon, quand je n'écris pas, j'affectionne le jardinage et l'entretien de mon portager, pour ses vertus apaisantes, et passer du temps avec mes enfants, pour l'exact contraire.
                    <br /><br />
                    Bienvenue à toi, vieil ami, et bonne lecture.
                    <br /><br />
                    Jean Forteroche
                </p>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

