# E-Mail-Templates für YForm und PHPMailer in REDAXO

MIt diesem Addon werden aus einem E-Mail-Template-Generator vorgefertigte Bausteine als Fragmente zur Verfügung gestellt, die beliebig miteinander kombiniert werden können und mit den meisten E-Mail-Clients kompatibel sind, sogar responsive. 

**Kostenlos für nicht-kommerzielle Projekte (CC BY-NC-SA 4.0). Bitte bei Fragen zur Lizenz und Nutzung qanda@alexplus.de anfragen.**

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

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Dieses Werk ist lizenziert unter einer <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Namensnennung - Nicht-kommerziell - Weitergabe unter gleichen Bedingungen 4.0 International Lizenz</a>, siehe [LICENSE.md](https://github.com/alexplusde/qanda/blob/master/LICENSE.md)  

> Es besteht keinerlei Gewährleistung für das Programm, soweit dies gesetzlich zulässig ist. Sofern nicht anderweitig schriftlich bestätigt, stellen die Urheberrechtsinhaber und/oder Dritte das Programm so zur Verfügung, „wie es ist“, ohne irgendeine Gewährleistung, weder ausdrücklich noch implizit, einschließlich – aber nicht begrenzt auf – die implizite Gewährleistung der Marktreife oder der Verwendbarkeit für einen bestimmten Zweck. Das volle Risiko bezüglich Qualität und Leistungsfähigkeit des Programms liegt bei Ihnen. Sollte sich das Programm als fehlerhaft herausstellen, liegen die Kosten für notwendigen Service, Reparatur oder Korrektur bei Ihnen.
>
> In keinem Fall, außer wenn durch geltendes Recht gefordert oder schriftlich zugesichert, ist irgendein Urheberrechtsinhaber oder irgendein Dritter, der das Programm wie oben erlaubt modifiziert oder übertragen hat, Ihnen gegenüber für irgendwelche Schäden haftbar, einschließlich jeglicher allgemeiner oder spezieller Schäden, Schäden durch Seiteneffekte (Nebenwirkungen) oder Folgeschäden, die aus der Benutzung des Programms oder der Unbenutzbarkeit des Programms folgen (einschließlich – aber nicht beschränkt auf – Datenverluste, fehlerhafte Verarbeitung von Daten, Verluste, die von Ihnen oder anderen getragen werden müssen, oder dem Unvermögen des Programms, mit irgendeinem anderen Programm zusammenzuarbeiten), selbst wenn ein Urheberrechtsinhaber oder Dritter über die Möglichkeit solcher Schäden unterrichtet worden war.

## Autor

**Alexander Walther**  
https://github.com/alexplusde

**Projekt-Lead**  
[Alexander Walther](https://github.com/alxndr-w)

## Credits
