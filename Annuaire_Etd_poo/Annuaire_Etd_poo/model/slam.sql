SELECT nom_marque FROM marque ORDER BY nom_marque asc ;

SELECT ref_art, libelle_art, description_art, prix_art FROM article, rayon WHERE article.code_rayon = rayon.code_rayon AND libelle_rayon like "sports aquatique" AND prix_art >= 20 ;

SELECT nom_client, prenom_client FROM client WHERE mail_client IS NOT NULL ;

SELECT nom_client, prenom_client FROM client WHERE mail_client IS NULL ;

SELECT * FROM article WHERE libelle_art LIKE "%natation%" ;

SELECT * FROM client WHERE date_inscription BETWEEN "01/01/2017" AND "31/12/2017" ;

SELECT COUNT(ref_art) as "nombre d'article" FROM article ;

SELECT SUM(qte_stock) as "nombre de stock" FROM stock ;

SELECT libelle_art, prix_art FROM article GROUP BY prix_art asc ;

SELECT code_rayon, COUNT(ref_art) FROM article GROUP BY code_rayon ;

SELECT code_rayon, COUNT(ref_art) FROM article GROUP BY code_rayon HAVING COUNT(ref_art)>=10 ;

SELECT * FROM article WHERE code_genre in ("F", "H") AND code_rayon IN ("FTT", "RUN") ;

SELECT code_genre, SUM(qte_stock) FROM stock, article WHERE article.ref_art = stock.ref_art GROUP BY code_genre;

CREATE TABLE stock_sav as SELECT * FROM stock ;