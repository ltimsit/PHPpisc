INSERT INTO ft_table(login, groupe, date_de_creation)
SELECT nom AS login, date_de_naissance AS date_de_creation, 'other' AS group
FROM fiche_personne
WHERE nom LIKE '%a%' AND LENGTH(nom) < 9
ORDER BY nom ASC
LIMIT 10;