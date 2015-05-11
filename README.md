# frenchmap-osclass
frenchmap-osclass est un plugin destiné à être utilisé sur le CMS OsClass. Il permet d'intégrer une carte de la France découpée en départements (DOM-TOM inclus). Pour ce faire, "frenchmap-osclass" utilise le plugin jQuery Vector Maps (version 2 ou supérieure).

## Utilisation
Après avoir télécharger le plugin, dézippez-le puis coller le dossier "frenchmap-osclass" dans sous "oc-content/plugins).

Installez ensuite le plugin depuis l'interface administrateur d'OsClass (votreurl/oc-admin).

Maintenant il ne reste plus qu'à ajouter la ligne suivante là où vous souhaitez que la carte apparaisse :

...
<?php selector_map(); ?>
...

