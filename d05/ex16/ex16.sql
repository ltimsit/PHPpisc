SELECT count(*) AS 'films'
FROM film
INNER JOIN membre on membre.id_dernier_film = film.id_film
WHERE date_dernier_film BETWEEN 30/10/2006 AND 27/07/2007
OR (EXTRACT(DAY FROM date_dernier_film)=24 AND EXTRACT(MONTH FROM date_dernier_film)=12);