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
        <p>La magie est mal adaptée à l’explosivité d’un combat.
          Ainsi elle est toujours la dernière chose à arriver dans un round, après la résolution des potentiels de
          combat, à l’exception des signes (voir <a href="../regles/combat.html">règles de combat</a>). Elle empêche d’ailleurs le praticien d’avoir lui-même
          un potentiel de combat (là encore, à l’exception des signes).<br>
          Lorsqu’un sort est lancé, il peut être amélioré en dépensant des points d’Endurance supplémentaires.
          Cela permet soit d’en augmenter les effets soit d’en ajouter.
          On peut lancer un sort dont le coût est supérieur à son score d’Endurance. Chaque point en-dessous
          de 0 en Endurance inflige alors 5 PV (en plus des PV infligés dans le cadre des règles de Vigueur).
          Seuls les sorts et invocations peuvent être augmentés de la sorte (exceptions précisées ci-dessous).
          On ne peut pas améliorer une valeur si elle dépend d’un coût variable</p>
          <p>Les barèmes sont :</p>
          <ul>
            <li>1 point :</li>
              <div class=newComp>
                <li>Maximisation d’1 dé d’Effet par point dépensé.</li>
                <li>Maximisation d’1 dé de Durée par point dépensé.</li>
                <li>Ajout de la portée initiale à la portée totale par point dépensé.</li>
                <li>Ajout de la durée initiale à la durée totale par point dépensé.</li>
              </div>
            <li>2 point :</li>
              <div class=newComp>
                <li>Ajout du trait « ablation » (utilisable avec les signes).</li>
                <li>Ajout du trait « perforation » (utilisable avec les signes).</li>
              </div>
            <li>4 point :</li>
              <div class=newComp>
                <li>Ajout du trait « perforation améliorée » (utilisable avec les signes).</li>
                <li>Lancer le sort en restant capable d’utiliser la compétence Esquive comme potentiel de combat jusqu’au
                  lancement du sort ou de l’invocation (à déclarer en début de round).</li>
              </div>
            <li>8 point :</li>
              <div class=newComp>
                <li>Ajout d’une valeur chiffrée initiale en Effet à elle-même par point dépensé (ex. les dégâts).</li>
              </div>
            <li>16 point :</li>
              <div class=newComp>
                <li>Suppression de la Défense.</li>
              </div>
          </ul>
          <p>Un sort peut être préparé un nombre de rounds égal à la Volonté du lanceur pour en réduire le coût
            (et donc potentiellement lancer des sorts plus puissants).
            Le « coût total » est ce que le sort coûterait en points d’Endurance sans réduction.
            Le « coût final » est ce qui est finalement dépensé quand le sort est lancé.<br>
            Chaque round passé d’incantation permet de réduire de 2 le coût final en Endurance du sort au
            moment où il est lancé.
            Le coût total en Endurance et comment les améliorations vont être utilisées doivent être déclarées
            dès le début de l’incantation.
            Le coût final en Endurance est dépensé au moment où le sort est effectivement lancé.
            Si l’incantation est interrompue le sort est lancé et l’Endurance est dépensée avec les réductions
            applicables sur le coût final au round où le sort est lancé.<br>
            Prendre des dégâts interrompt obligatoirement l’incantation.</p>
            <p>Les règles de Vigueur s’appliquent sur chaque lancer. Dans le cadre des sorts incantés sur plusieurs
            rounds, la Vigueur est comparée au coût final (et non total).<br>
            Les compétences exclusives de classe « Exercice de la magie » et « Initié des dieux » fournissent
            chaque jour (après un repos raisonnable) la moitié de leur valeur (arrondi inférieur) en points à dépenser pour
            réduire le coût d’un sort, invocation, signe, rituel, envoûtement (utilisable en une ou plusieurs fois).<br>
            Les lanceurs de sorts connaissent tous leurs sorts, invocations, signes, rituels, envoûtements (auxquels
            ils ont accès en fonction de leur classe). C’est pour ça qu’ils sont allés à l’école. ^^</p>
        <hr>
        <span class=titre><h2>Les Focus</h2></span>
            <p>Les mages et prêtres s’aident souvent de focus pour faciliter le lancement de leurs sorts ou invocations.
              Ces objets prennent généralement la forme d’un bâton (souvent simple et en bois chez les druides,
              orné et métallique chez les prêtres), d’un bijou (souvent un tour de cou élégant chez les sorcières, un lourd
              collier très ostentatoire chez les magiciens).<br>
              Créer un focus demande des mois de travail et coûte cher en matériel et composants.
              Ainsi, chaque point de trait « focus » coûte 200 couronnes rédaniennes et 1 mois de travail à temps
              plein.
              Chaque point de trait « focus supérieur » coûte 100 couronnes rédaniennes et 2 mois de travail à
              temps plein.
              Un focus est améliorable. Chaque point additionnel coûte le même prix que ci-dessus.
            </p>
        <hr>
        <span class=titre><h2>Sorts de Confort</h2></span>
          <p>Il existe une large variété de sorts qui rendent juste le quotidien des mages plus simples. Ce sont des
          sorts cosmétiques, pratiques. Ils ne portent jamais à conséquence (et ne fournissent donc aucun bonus/malus
          à quiconque). Il n’est pas nécessaire d’en faire la liste ni le compte des utilisations. Ils ne coûtent rien.</p>
      </div>
      <script src="../js/sidemenu.js"></script>
    </body>
</html>