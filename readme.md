## Asennus

- PHP-demo (news)
- Lataa tämä koodi .zip-tiedostona githubista, pura paketti  (tai kloonaa ja poista .git kansio)
- Asenna XAMPP
- Käynnistä XAMPP, tee sinne tietokanta jonka nimi on "news" ja vie sinne PhpMyAdminillä tietokanta kansiosta database_dump
- Siirry projektin juureen: cd news_2021
- Siirry kansioon public: cd public
- Käynnistä serveri: php -S localhost:8888
- Avaa selaimessa: localhost:8888

---------------------------------
HUOM!
Jos haluat, että toimii React -> käynnistä server:

php -S 0.0.0.0:3001

Yhdistä react + php:
1. Tee react:ista build ja kopioi public kansioon
2. Lisää buildattu index.html:stä head-osio sekä div, jonka id='root'
3. Nyt toimii myös "php -S localhost:3001"