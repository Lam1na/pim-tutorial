# Konsolenbefehle für das Pimcore-Projekt

---

## Docker Befehle

**Pfad:** `/documents/pimcore/pim-tutorial`  
(dort, wo deine `docker-compose.yml` liegt)

| Zweck                        | Befehl (komplett)                                         | Befehl relativ zum Projekt-Root         | Beschreibung                             |
|-----------------------------|-----------------------------------------------------------|----------------------------------------|-----------------------------------------|
| Docker-Container starten     | ```bash cd /documents/pimcore/pim-tutorial && docker-compose up -d``` | `docker-compose up -d`                  | Startet alle Container im Hintergrund  |
| Docker-Container stoppen     | ```bash cd /documents/pimcore/pim-tutorial && docker-compose down``` | `docker-compose down`                   | Stoppt alle Container                   |
| Docker-Container neu starten | ```bash cd /documents/pimcore/pim-tutorial && docker-compose restart``` | `docker-compose restart`                | Restart aller Container                 |
| Docker-Container Logs sehen  | ```bash cd /documents/pimcore/pim-tutorial && docker-compose logs -f``` | `docker-compose logs -f`                | Echtzeit-Logs der Container             |
| Pimcore Cache leeren         | ```bash cd /documents/pimcore/pim-tutorial && docker-compose exec php bin/console cache:clear``` | `docker-compose exec php bin/console cache:clear` | Pimcore Cache in PHP-Container löschen |
| Docker Images aufräumen      | ```bash docker system prune -f```                          | `docker system prune -f`                | Nicht genutzte Docker-Images löschen    |

---

## Git Befehle

**Pfad:** `/documents/pimcore/pim-tutorial` (Projekt-Root mit `.git`)

| Zweck                         | Befehl (komplett)                                         | Befehl relativ zum Projekt-Root         | Beschreibung                         |
|-------------------------------|-----------------------------------------------------------|----------------------------------------|-------------------------------------|
| Status anzeigen                | ```bash cd /documents/pimcore/pim-tutorial && git status``` | `git status`                           | Zeigt den aktuellen Status an        |
| Änderungen hinzufügen          | ```bash cd /documents/pimcore/pim-tutorial && git add .```  | `git add .`                           | Fügt alle Änderungen zum Commit hinzu |
| Commit erstellen              | ```bash cd /documents/pimcore/pim-tutorial && git commit -m "Deine Nachricht"``` | `git commit -m "Deine Nachricht"`      | Erstellt einen Commit mit Nachricht  |
| Änderungen pushen             | ```bash cd /documents/pimcore/pim-tutorial && git push origin main``` | `git push origin main`                 | Push zum `main`-Branch                |
| Push mit Force (vorsichtig!) | ```bash cd /documents/pimcore/pim-tutorial && git push --force origin main``` | `git push --force origin main`         | Erzwingt den Push (Überschreibt remote) |
| Neuen Branch anlegen & wechseln | ```bash cd /documents/pimcore/pim-tutorial && git checkout -b Alpha_0.0.1``` | `git checkout -b Alpha_0.0.1`          | Erstellt und wechselt zu neuem Branch |
| Zu Branch wechseln            | ```bash cd /documents/pimcore/pim-tutorial && git checkout Alpha_0.0.1``` | `git checkout Alpha_0.0.1`             | Wechselt zu existierendem Branch     |
| Branch mergen (z. B. Alpha_0.0.1 in main) | ```bash cd /documents/pimcore/pim-tutorial && git checkout main && git merge Alpha_0.0.1``` | `git checkout main && git merge Alpha_0.0.1` | Merge Branch in main                  |
| Gemergten Branch pushen       | ```bash cd /documents/pimcore/pim-tutorial && git push origin main``` | `git push origin main`                  | Push nach Merge                      |
| Lokale Branches anzeigen      | ```bash cd /documents/pimcore/pim-tutorial && git branch``` | `git branch`                           | Listet alle lokalen Branches         |

---

## SCSS Befehle

**Pfad:** `/documents/pimcore/pim-tutorial` (oder dort, wo dein `package.json` liegt)

| Zweck                      | Befehl (komplett)                                         | Befehl relativ zum Projekt-Root         | Beschreibung                              |
|----------------------------|-----------------------------------------------------------|----------------------------------------|------------------------------------------|
| SCSS kompilieren            | ```bash cd /documents/pimcore/pim-tutorial && npm run scss:build``` | `npm run scss:build`                   | Einmaliges Kompilieren der SCSS-Dateien  |
| SCSS Watch (Überwachung)    | ```bash cd /documents/pimcore/pim-tutorial && npm run scss:watch``` | `npm run scss:watch`                   | Automatisches Kompilieren bei Dateiänderung |

---

**npm-Skripte Beispiel in deiner `package.json`:**

```json
"scripts": {
  "scss:build": "node-sass assets/scss/style.scss assets/css/style.css",
  "scss:watch": "node-sass assets/scss/style.scss assets/css/style.css --watch"
}
