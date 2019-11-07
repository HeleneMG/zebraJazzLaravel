## RECHERCHE SUR UN MOT DANS UN TEXTE

    ON UTILISE L'OIPERATEUR DE SQL LIKE
    QUI PERMET DE RECHERCHER UN MOT DANS UN TEXTE
    https://sql.sh/cours/where/like

    * on cherche les annonces dont le contenu contient le mot bon

    SELECT * FROM `annonces` WHERE contenu LIKE '%bon%'

    * AVEC HTML

    <form>
        <input name="motRecherche">
        <button>chercher</button>
    </form>


    * EN PHP

    // JE RECUPERE L'INFO DU FORMULAIRE
    $motRecherche = $_REQUEST["motRecherche"] ?? "";
    // ET JE M'EN SERS POUR CONSTRUIRE LA REQUETE SQL PREPAREE
    // (POUR EVITER LES INJECTIONS SQL)

    // ON RAJOUTE LES % AUTOUR DU MOT RECHERCHE
    $tabAssoColonneValeur = [
        "motRecherche" => "%$motRecherche%"
    ];

    $requetePreparee =
    <<<CODESQL    
        SELECT * FROM `annonces` WHERE contenu LIKE :motRecherche
    CODESQL;

    envoyerRequeteSQL($requetePreparee, $tabAssoColonneValeur);
    