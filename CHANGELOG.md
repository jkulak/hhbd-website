
## Changelog

## 0.67
 * Add possibility to edit youtube video url for a song (Issue #4)
 * Fix bug where users' last login date was not saved to database (Issue #22)
 * Add saving users login count to database

## v0.66 (2011-05-02)
 * Small fixes in logging debug data

## v0.65 (2011-05-02)
 * Fixed bug which cause almost half of queries not to be cached
 * Fixed logging data (emergency on Exception + debug for saving data to memcached)

## v0.64 (2011-04-22)
 * Set up resource loggers, loggin data in file and emergency using e-mail

## v0.63 (2011-04-21)
 * (added) Deploy.sh script is now part of a repository in `_dev/deploy.sh`
 * (fix) Small fix concerning exception logging

## v0.62 (2011-04-21)
 * (fixes) Bunch of small bugfixes concerning logging exceptions

## v0.61 (2011-04-21)
 * Small fixes

## v0.60 (2011-04-21)
 * (fixed) Turned-off exception display on production and added exception logging to /tmp/logs/YYYY-MM-DD-hhbd.txt file

## v0.59 (2011-04-10)
 * (bug #20) Added new description for main site
 * (bug #19) Fixed typo in website's meta title
 * (added) Displaying news images in news detail view

## v0.58 (2011-02-06)
 * (fixed) Adding/editing lyrics by logged-in, and not logged-in users
 * (fixed) Handling XHR and regular add/edit song lyrics requests
 * (fixed) User is automatically logged-in after successful registration

## v0.56 (2011-02-03)
 * (added) Facebook App ID added to metadata

## v0.55 (2011-02-03)
 * [fixed] Compressed CSS files
 * [fixed] Compressed js files

## v0.54 (2011-02-03)
 * [added] Dodana funkcjonalność dodawania tekstów do piosenek przez adminów /Issue #5/
 * [changed] SEO: dodane data premiery i przeniesiona nazwa wytwórni w meta description /Issue #7/
 * [added] SEO: sitemap index pod adresem /sitemap-index.xml
 * [added] SEO: albums sitemap under /sitemap-albums.xml
 * [added] SEO: artists sitemap at /sitemap-artists.xml
 * [added] SEO: news sitemap at /sitemap-news.xml
 * [added] SEO: songs sitemap at /sitemap-songs.xml (url without artist name)
 * [added] SEO: labels sitemap at /sitemap-labels.xml
 * [added] Logged-in users can add/edit lyrics (with and without js)

## v0.53 (2011-01-19)
 * [changed] SEO - opis i keywordsy albumu poprawione
 * [changed] Changlog utrzymywany jest w katalogu projektu, w doc/changelog
 * [added] Użytkownik zalogowany jako admin ma możliwość edycji tekstu piosenki z jej odsłony

## v0.52 (2011-01-17)
 * [new] dodana możliwość publikowania komentarzy bez przeładowania strony - przy włączony JavaScript w przeglądarce, dla wszystkich typów danych, które do tej pory można komentować

## v0.51 (2011-01-16)
 * [new] dodane zakładanie kont i logowanie
 * [new] dodana możliwość komentaowania jako zalogowany użytkownik
 * [new] dodana prosta odsłona profilu, z informacjami, co tam będzie w przyszłości
 * [changed] poprawione tytułu i opisy utworów i wykonawców (dla SEO)
 * [changed] zmieniony adres utworów - przed tytuł doszła jeszcze nazwa wykonawcy
 * [changed] changelog przeniesiony do wiki projektu (wcześniej wysyłany mailowo)
 * [fixed] pliki stylów są skompresowane, żeby mniej zajmowały - strona będzie działać minimalnie szybciej

## v0.49
 * dodane zliczanie odsłon dla wykonawców, albumów, artykułów, wytwórni i utworów (w związku z tym aktualizowane na żywo rankingi najpopularniejszych)
 * poprawione kilka błędów

## v0.48
 * dodane komentarze do wykonawców, albumów, artykułów, wytwórni i utworów

## v0.45
 * pierwsza gotowa wersja strony głównej
 * lista artykułów na stronie głównej, które prowadzą do prostej odsłony artykułu
 * drobne poprawki graficzne

## v0.33
 * http://hhbd.megiteam.pl/Abradab-p28.html - zrobione przekierowania ze starej adresacji (dla albumów, wykonawców, wytwórni utworów i newsów - jak będę już)
 * opis generowany automatycznie dla wykonawców i albumów pokazuje się zawsze, a jeżeli wykonawca/album ma swój własny opis, to automatyczny jest ukryty i można go pokazać po kliknięciu w link
 * ustawienia "pokaż szczegóły" tracklisty i "pokaż opis standardwy" dla wykonawców i albumów są zapisywane w cookies, także jak raz  ustawisz, tak masz na kolejnych albumach
 * usunięcie podkreślenia linków, po najechaniu na nie
 * usunięcie cienia spod napisu w stopce

== ## v0.32 ==
 * na odsłonie wyników, pokazuję szczegółowe informacje o tym, ile jeszcze wyników znalazło
 * ostylowane prawe bloczki na odsłonach wyszukiwania
 * gotowa stopka
 * opis albumu jest pokazywany domyślnie, a wygenerowany jest ukrywany, z możliwością pokazania po kliknięciu w link, jeżeli nie ma opisu albumu, to domyślnie pokazywany jest wygenerowany
