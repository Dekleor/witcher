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
        <p>Tous les persos sont Témériens (+1 Charisme ; Patrie, p.25)</p>
        <p>Les PJ ont ensuite 2 options</p>
        <ol>
          <li>Aléatoire : ils tirent tout aléatoirement à partir de "famille" (p.25).</li>
          <li>Mon Choix : ils choisissent les résultats de chaque tirage</li>
        </ol>
        <p>L'option choisie détermine le nombre de points de caractéristiques à répartir :</p>
        <ol>
          <li>Aléatoire : 60 points.</li>
          <li>Mon Choix : 48 points.</li>
        </ol>
        <p>Le reste de la création suit le cours (presque) normal.</p>
        <p>Quelques exeptions toutefois :</p>
        <ul>
          <li>Le bâton des mages et prêtres est remplacé dans leur choix de matériel par un Focus (1). </li>
          <li>Les compétences acquises bénéficient de 16 points à répartir (au lieu de Int.+Réf.)</li>
          <li>Les compétences complexes ne le sont que pour des classes non-initiées, ainsi :</li>
          <div class=newComp>
            <li>Connaissance des monstres est normale pour les sorceleurs</li>
            <li>Langue est normale pour les marchands et bardes</li>
            <li>Tactique est normale pour les nobles et hommes d’armes</li>
            <li>Alchimie est normale pour les artisans, mages, sorceleurs</li>
            <li>Artisanat est normale pour les artisans</li>
            <li>Fabrication de pièges est normale pour les criminels et sorceleurs</li>
            <li>Toutes celles sous Volonté sont normales pour les mages, prêtres, sorceleurs</li>
          </div>
        </ul>
        <hr>
        <span class=titre><h2>Adaptation des races/Classes</h2></span>
          <p>Humain : à la fin de la phase de création, peut annuler l’un des jets sur une table et à la place en choisir le résultat (si cela entraîne un changement dans les tables suivantes, les jets sont à refaire). Cela remplace le trait "Digne de confiance"</p>
          <p>Sorceleur : plutôt qu’un malus de 4 en Empathie, le sorceleur considère cette caractéristique comme étant "complexe" (comme les compétences). Elle lui coûte donc 2 fois plus cher.</p>
          <p><strong>Précision :</strong> tous les bonus de races n'affectent pas les futurs coûts en P.P.<br>
          Exemple : un elfe a 4 en Arme de Tir, +2 par son bonus racial. Monter sa compétence lui coûte 4 et non 6.</p>
        <hr>
        <span class=titre><h2>Compétences en remplaçant d’autres parmi les classes</h2><span class=titre>
            <p>Barde : Éducation à la place d’Étiquette, Stylisme à la place de Duperie, Jeu à la place de Psychologie.<br>
              Criminel : Persuasion à la place de Duperie.<br>
              Docteur : Éducation à la place d’Étiquette, Persuasion à la place de Psychologie.<br>
              Mage : Déduction à la place d’Étiquette, Langue à la place d’Arme d’Hast, Charisme à la place de Psychologie.<br>
              Marchand : Vigilance à la place de de Psychologie.<br>
              Prêtre : Éducation à la place de Psychologie.<br>
              Noble : Charisme à la place de Psychologie, Tactique à la place d’Étiquette, Séduction à la place de Duperie.</p>
        <hr>
        <span class=titre><h2>Adaptation des écoles de sorceleur</h2></span>
            <span class=titre><h3>Ecole du Loup</h3></span>
              <p>Le Loup est un expert de la frappe puissante qu’il peut faire avec n’importe quelle arme de corps-à-corps, pour laquelle il ajoute deux fois (au lieu d’une) son Corps aux dégâts et ne divise pas le d10 pour déterminer à quel point il abîme le matériel adverse.<br>
              De plus le Loup est entraîné à toujours demeurer extrêmement mobile : il peut se désengager au choix sans faire de jet ou s’il fait un jet et remporte l’opposition, infliger des dégâts comme pour une attaque normale.<br>
              Une fois désengagé, il se déplace de sa vitesse de course.</p>
            <span class=titre><h3>Ecole du Chat</h3></span>
              <p>Le Chat est immunisé à toute tentative à son encontre d’utiliser les compétences Charisme, Intimidation, et Séduction.<br>
              Par ailleurs il inflige automatiquement le statut saignement lorsqu’il inflige des dégâts à ses adversaires et qu’il utilise une arme tranchante ou perforante.<br>
              Ses seuils pour faire des critiques et déterminer leur gravité sont réduits de 2.</p>
            <span class=titre><h3>Ecole du Griffon</h3></span>
              <p>Le Griffon commence avec une Vigueur égale à 5.<br>
              Son médaillon est considéré comme étant un Focus (3) qu’il peut améliorer au cours de sa carrière.<br>
              Il commence avec les versions de base et avancées des signes quel que soit son sa base d’incantation.</p>
            <span class=titre><h3>Ecole de la Vipère</h3></span>
              <p>La Vipère si elle se bat avec deux armes à une main ne souffre jamais de malus lié au fait d’affronter plusieurs adversaires (mêmes contre ceux qui tirent) et ses frappes éclair ciblent tous ses adversaires au corps-à-corps.<br>
              Lorsqu’elle ne porte qu’une arme (à une ou deux mains), elle bénéficie quand même de l’effet bénéfique du port de deux armes (et sans la contrepartie), soit désigner 3 adversaires</p>
            <span class=titre><h3>Ecole de l'Ours</h3></span>
              <p>L’Ours ne subit pas le VE des armures qu’il porte.<br>
              L’Ours divise par deux les chances de Saignement ou malus d’Étourdissement subis.<br>
              L’Ours décale de 2 crans vers le bas les scores de sa Table Physique (p.48).</p>
      </div>
      <script src="../js/sidemenu.js"></script>
    </body>
</html>