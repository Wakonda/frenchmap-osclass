# frenchmap-osclass
**frenchmap-osclass** est un plugin destiné à être utilisé sur le CMS de petites annonces [OsClass](https://osclass.org/). Il permet d'intégrer une carte de la France découpée en départements (DOM-TOM inclus). Pour ce faire, "frenchmap-osclass" utilise le plugin [jQuery Vector Maps](https://github.com/manifestinteractive/jqvmap) (version 2 ou supérieure).

## Utilisation
Après avoir télécharger le plugin, dézippez-le puis coller le dossier "*frenchmap-osclass*" sous le dossier "oc-content/plugins).

Installez ensuite le plugin depuis l'interface administrateur d'OsClass (votreurl/oc-admin). Pour cela, cliquez sur "Gérer les extensions".

![Alt text](https://raw.githubusercontent.com/Wakonda/frenchmap-osclass/master/screen/step1.jpg "First step")

Dans le tableau qui s'affichera, trouvez la ligne intitulée "France Interactive Map", et cliquez sur le lien "Installer".

![Alt text](https://raw.githubusercontent.com/Wakonda/frenchmap-osclass/master/screen/step2.jpg "Second step")

Maintenant il ne reste plus qu'à ajouter la ligne suivante là où vous souhaitez que la carte apparaisse :

```php
<?php selector_map(); ?>
```

**Remarque :**
Si vous souhaitez, par exemple, l'ajouter sur la page d'accueil, insérez la ligne ci-dessus dans le fichier "header.php"

Le résultat sera le suivant :

![Alt text](https://raw.githubusercontent.com/Wakonda/frenchmap-osclass/master/screen/step3.jpg "Last step")

En cliquant sur un département, vous serez automatiquement redirigé sur la liste des petites annonces présentes dans ce même département !
