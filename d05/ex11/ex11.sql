SELECT upper(fiche_personne.nom) AS 'NOM', fiche_personne.prenom, abonnement.prix
FROM membre
INNER JOIN fiche_personne ON fiche_personne.id_perso = membre.id_fiche_perso
INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo
WHERE abonnement.prix > 42
ORDER BY nom, prenom ASC;