SELECT titre, resum
FROM film
WHERE titre LIKE '%42%' OR resum LIKE '%42%'
ORDER by duree_min ASC;