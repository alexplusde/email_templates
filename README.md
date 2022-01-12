# E-Mail-Templates für YForm und PHPMailer in REDAXO

Mit diesem Addon werden aus einem E-Mail-Template-Generator vorgefertigte Bausteine als Fragmente zur Verfügung gestellt, die beliebig miteinander kombiniert werden können und mit den meisten E-Mail-Clients kompatibel sind, sogar responsive. 

## Features

* Kompatibel zu **YForm** E-Mail-Templates: Alle Features und Anpassungsmöglichkeiten von YForm verfügbar
* Einfach: Beispiel kopieren und loslegen
* Sinnvoll: verschiedene Layouts verfügbar - auch responsive
* Flexibel: eigene Layouts auf Basis der mitgelieferten Fragmente möglich
* Bereit für **mehrsprachige** E-Mails: Alle Platzhalter individuell anpassbar
* Auf Basis kommerzieller E-Mail-Template-Anbieter: Der generierte Code ist für die allermeisten E-Mail-Clients optimiert.

> **Steuere eigene Verbesserungen** dem [GitHub-Repository von email_templates](https://github.com/alexplusde/email_templates) bei. Oder **unterstütze dieses Addon:** Mit einer [Spende oder Beauftragung unterstützt du die Weiterentwicklung dieses AddOns](https://github.com/sponsors/alexplusde)

## Installation

Im REDAXO-Installer das Addon `email_templates` herunterladen und installieren. Anschließend erscheint ein neuer Menüpunkt `E-Mail-Templates`.

## Parameter

```php

<?php
    $email = new rex_email_template();

    $bg_color = "#EEEEEE" // Hintergrundfarbe der gesamten E-Mail
    $font_family = "Helvetica, Arial, sans-serif" // Standard-Schriftart

    $preheader_text = "Newletter #6"; // Wird als Teaser E-Mail-Clients angezeigt
    $header_url = "Newletter #6"; // Wird als Teaser E-Mail-Clients angezeigt
    $header_logo_src = "https://example.org/logo"; // Logo / Absender

    $imprint = "<p>Impressum</p>"; // E-Mail-Impressum / Signatur
    $footer_links_ = ['Abmelden', 'https://example.org/unsubscribe'], ['Einstellungen', 'https://example.org/settings']; // Opt. Abmelde- oder Einstellungs-Link

    /* Standard-Einstellungen für die E-Mail */
    $email
        ->setStyles($bg_color, $font_family)
        ->addHeader($preheader_text, $header_url, $header_logo_src);

    /* Beispiel: Einspaltiges Layout mit Bild, Text und Button hinzufügen */
    $email
        ->addImage() // Bild-Element hinzufügen
        ->addText() // Text-Element hinzufügen
        ->addButton() // Button-Element hinzufügen
        ->addToCol() // Inhalt muss einspaltig einer Spalte hinzugefügt werden
        ->addToRow();

    /* Beispiel: Zweispaltiges Layout hinzufügen */
    $email
        ->addText()
        ->addToCol() // Spalte 1 fertig
        ->addText()
        ->addToCol() // Spalte 2 fertig
        ->addToRow('two-col'); // Zwei Spalten je 50% breit
        // ->addToRow('two-col.narrow-wide'); // Alternativ links 33.3% schmal und rechts 66.6% breit
        // ->addToRow('two-col.narrow-wide'); // Alternativ links 66.6% breit und rechts 33.3% schmal


    /* Beispiel: Dreispaltiges Layout hinzufügen */
    $email
        ->addButton()
        ->addToCol() // Spalte 1 fertig
        ->addButton()
        ->addToCol() // Spalte 2 fertig
        ->addButton()
        ->addToCol() // Spalte 3 fertig
        ->addToRow();

    /* Beispiel: Eigene Inhalte hinzufügen */
    $email
        ->addCustom('<div>Mein eigenes HTML</div>')
        ->addToCol()
        ->addToRow();

    $email->
        ->addFooter($imprint, $footer_links);

    $email->getBody();
```

#### Parameter für einen Button `addButton()`

* `size` =  `small`, `medium` oder `large`
* `style` =  `flat`, `ghost`, `shadow`
* `align` = `left`, `center`, `right` oder `full-width`

#### Parameter für Text `addText()`

`$text` = `"<p> Mein Text</p>"`

#### Parameter für ein Bild `addImage()`

???

#### Parameter für `addCol()`

* `col_bg` = RGB-Farbwert, z.B. `#FFFFFF` oder `transparent`

#### Parameter für `addRow()`

`$layout` = `one-col`, `two-col`, `three-col`

?>

## Lizenz

MIT Lizenz

## Autor

**Alexander Walther**  
https://github.com/alexplusde

**Projekt-Lead**  
[Alexander Walther](https://github.com/alxndr-w)

## Credits
