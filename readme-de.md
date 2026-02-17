# Include 0.9.1

Inhalt von geteilten Seiten einbinden. Entwickelt von steffen Schultz.

<p align="center"><img src="screenshot.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-include/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/readme-de.md).

## Wie man geteilte Seiteninhalte einbindet

Erstelle eine `[include]`-Abkürzung. 

Das folgende obligatorische Argument ist verfügbar:

`Slug` = URL-Slug der einzubindenden Seite  

## Beispiele

Hier ist eine Beispielseite `content/shared/profile-datenstrom.md`: 

```
---
Title: profile-datenstrom
---
## Über Datenstrom

Datenstrom ist ein Technologiehersteller aus Schweden. [Mehr erfahren](https://datenstrom.se). 
```

Beispiel-Blogseite mit Autorenprofil:

```
---
Title: Blog-Beispielseite
Published: 2020-04-07
Author: Datenstrom
Layout: blog
Tag: Beispiel
---
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[include profile-datenstrom]
```

Hast du Fragen? [Hilfe finden](https://datenstrom.se/de/yellow/help/).
