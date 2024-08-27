# FormularSystem MediaWiki Extension

## Beschreibung
Die `FormularSystem`-Erweiterung ermöglicht das Einbetten von Formularen aus dem Formular-System direkt in MediaWiki-Seiten.

## Installation

1. Lade die Erweiterung in dein `extensions`-Verzeichnis von MediaWiki:
git clone https://github.com/deinbenutzername/mw-Formular-System.git

2. Füge die Erweiterung in deiner `LocalSettings.php` hinzu:
```php
wfLoadExtension('FormularSystem');
$wgFormularSystemURL = "https://www.deinserver.de/Formular-System"; 

Verwendung
Um ein Formular einzubetten, füge den folgenden Code in eine MediaWiki-Seite ein:

<formular-system form="Besucherunterweisung"></formular-system>



### 4. `LICENSE`
Eine Lizenzdatei, die die rechtlichen Bedingungen für die Nutzung und Verteilung deiner Erweiterung festlegt. GPL-2.0-or-later ist eine übliche Wahl.

**Inhalt von LICENSE:**

txt
This extension is licensed under the MIT.



# mw-Formular-System
 Mediawiki extension for formular-system
 Die Erweiterung ist flexibel und ermöglicht es, Formulare aus dem System einfach durch die Angabe des Formularnamens in Wiki-Seiten einzubetten.
 Das Einbinden erfolgt durch einen iFrame. 

 # LocalSettings.php

In der LocalSettings.php folgenden Parameter einfügen: 

$wgFormularSystemURL = "https://www.deinserver.de/Formular-System"; 
wfLoadExtension('Formular-System');

# Verwendung
<formular-portal>Formularname</formular-portal>


