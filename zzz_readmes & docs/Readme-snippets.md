# Pimcore Projekt: Footer-Snippet Integration

## Überblick

Dieses Projekt demonstriert die Integration eines Footer-Snippets in Pimcore mit einem Symfony-Controller. Ziel ist es, den Footer modular und flexibel zu gestalten, sodass er im Backend sowie im Frontend korrekt gerendert wird.

---

## Projektstruktur

- `templates/snippets/footer.html.twig`  
  Twig-Datei für das Footer-Snippet, das modular eingebunden wird.

- `templates/includes/footer.html.twig`  
  Bisherige Footer-Datei, die Styles und Markup enthält.

- `templates/content/footer.html.twig`  
  Content-View, die ggf. dynamische Daten vom Controller bekommt.

- `src/Controller/ContentController.php`  
  Symfony Controller mit einer `footerAction()`, die das Footer-Template rendert.

---

## Nutzung

### Snippet im Backend anlegen

- Snippet mit Schlüssel `/snippets/footer` im Pimcore Backend anlegen.
- Unter Controller-Einstellungen im Snippet `App\Controller\ContentController::footerAction` eintragen.

### Template Einbindung

- Im Haupttemplate oder Content-View das Snippet per Twig `include` einbinden:  
  ```twig
  {% include 'snippets/footer.html.twig' %}

Alternativ kannst du pimcore_inc('/snippets/footer') verwenden, um das Snippet aus dem Pimcore-Dokumentenbaum zu laden.

Tipps & Hinweise
Vermeide Zirkelreferenzen: Wenn dein Snippet pimcore_inc('/_includes/footer') lädt, sollte das Snippet selbst nicht nochmal dasselbe Snippet laden.

Verwende editmode-Abfragen, um Backend-spezifische CSS/JS oder Wrapper nur im Backend zu laden.

Lösche regelmäßig den Cache mit:

docker exec -it pim-tutorial-php-1 bin/console cache:clear
oder über das Pimcore Backend.

Docker-Container
pim-tutorial-php-1 ist der PHP-Container, z.B. für Cache-Commands.

pim-tutorial-nginx-1 für Webserver.

Nutze docker ps um Containerstatus zu prüfen.

Kontakt
Für Fragen, Anregungen oder Probleme einfach melden!

README zuletzt aktualisiert am {{ "now"|date("Y-m-d") }}