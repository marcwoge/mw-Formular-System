# FormularSystem MediaWiki Extension

## Beschreibung
Die `FormularSystem`-Erweiterung ermöglicht das Einbetten von Formularen aus dem Formular-System direkt in MediaWiki-Seiten.

## Installation

1. Lade die Erweiterung in dein `extensions`-Verzeichnis von MediaWiki:
```
git clone https://github.com/deinbenutzername/mw-Formular-System.git
```
2. Füge die Erweiterung in deiner `LocalSettings.php` hinzu:
```php
wfLoadExtension('FormularSystem');
$wgFormularSystemURL = "https://www.deinserver.de/Formular-System"; 
$wgFormularSystemIgnoreSSLCertificate = true; // Setze dies auf true, um SSL-Zertifikatsfehler zu ignorieren
 
```

Verwendung
Um ein Formular einzubetten, füge den folgenden Code in eine MediaWiki-Seite ein:

```
<formular-system form="Formularname"></formular-system>
```


### 4. LICENSE
Die Software unterliegt der MIT Lizenz





# mw-Formular-System
 Mediawiki extension for formular-system
 Die Erweiterung ist flexibel und ermöglicht es, Formulare aus dem System einfach durch die Angabe des Formularnamens in Wiki-Seiten einzubetten.
 Das Einbinden erfolgt durch einen iFrame. 

 # LocalSettings.php

In der `LocalSettings.php` folgenden Parameter einfügen: 

```
$wgFormularSystemURL = "https://www.deinserver.de/Formular-System"; 
wfLoadExtension('Formular-System');
```

# Verwendung
```
<formular-portal>Formularname</formular-portal>
```
