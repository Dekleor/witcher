<!DOCTYPE html>
<html lang="fr">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="html, css, JavaScript">
        <link rel="stylesheet" type="text/css" href="../css/sidebar.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/reste.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css" media="all" />
        <link rel="icon" type="image/png" href="../images/favicon.ico"/>
        <title></title>
    </head>
    <body>

      <?php include "../menu/menu.php"; ?>

      <div class="texte">
        <span class=titre><h2>La relance</h2></span>
            <p>Sur un jet de compétence, si le d10 fait 1 ou 10, il est relancé une fois.
            S’il a fait 10, le résultat du nouveau lancer est ajouté au précédent.
            S’il a fait 1, le résultat du nouveau lancer est soustrait du précédent.
            Cas particulier : le 0 sur le dé relancé vaut 0 (et non 10).
            Cela signifie que la plage de valeur sur le résultat du dé d’un jet de compétence va de -8 à 19.</p>

            <p>Les tables d’échecs critiques changent en conséquence. Seul le dé de relance est pris en compte.
            Des gens particulièrement compétents peuvent amoindrir voire éviter de tels problèmes.
            Compétence à 8 : le dé de relance peut être relancé une fois. Le second résultat est gardé.
            Compétence à 9 : le dé de relance peut être relancé une fois. N’importe lequel des deux résultats est gardé.
            Compétence à 10 : il n’y a pas de dé relancé après un « 1 » sur le dé initial.</p>
        <hr>
        <span class=titre><h2>Changements sur les compétences</h2></span>
          <ul>
              <li>Étiquette fusionne avec Éducation.</li>
              <li>Archerie et Arbalète fusionnent en Armes de Tir.</li>
              <li>Duperie fusionne avec Persuasion.</li>
              <li>Psychologie fusionne avec Charisme.</li>
              <li>Mêlée devient Haches & Massues.</li>
              <li>Bâton/Lance devient Armes d’Hast.</li>
          </ul>
            <p>Bagarre est indépendamment une compétence sous Réflexes ou Corps.
            Le lancer d’arme se fait indépendamment avec Armes de Tir ou Athlétisme.</p>
        <hr>
        <span class=titre><h2>Points de Progression (P.P)</h2></span>
            <p>Il y a 3 réserves de P.P: une pour les caractéristiques, une pour les compétences, une pour les compétences exclusives.</p>
            <p>Monter une caractéristique, une compétence, une compétence exclusive coûte son niveau actuel. Monter une compétence complexe coûte le double de son niveau actuel (sauf pour certaines classes en fonction de la compétence ; voir <a href="E:\Programmes\wamp64\www\Witcher\regle\creation.html">création</a>).</p>
            <p>Chaque séance devrait rapporter entre 2 et 6 par catégorie.</p>
        <hr>
        <span class=titre><h2>Armes spéciales</h2></span>
            <p>Une créature seulement sensible à l’argent ne perd que 1PS si elle est frappée par autre chose qu’une arme
                en argent.<br>
                Une créature seulement sensible à l’acier météorique est Résistante à tout le reste mais prend le maximum de
                dégâts quand elle est frappée par la bonne arme.<br>
                Elles sont dans les deux cas considérés comme Résistantes à la magie.<br></p>
                <p><strong>Attention !</strong> Les armes en argent s’abîment quand elles sont utilisées sur des créatures non-vulnérables et
                perdent 1 dégât chaque tour utilisé de la sorte. De plus, elles ne peuvent être réparées par un artisan que
                dans une forge, qui plus est spécialement équipée pour cela.</p>
      </div>
      <script src="../js/sidemenu.js"></script>
    </body>
</html>