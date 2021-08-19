<?php

class email_template
{
    /* Template-Voreinstellungen, gelten auch für einzelne Elemente */
    private $tpl_color = "#FFFFFF";
    private $font_family = "sans-serif";

    /* Newsletter-Inhalte und deren Elemente */
    private $elements = ""; // Beinhaltet Buttons, Text oder Bilder
    private $col= []; // Beinhaltet ein Array von Spalten gefüllt mit Elementen
    private $content = ""; // Beinhaltet den kompletten Inhalt an Rows

    /* Newsletter-Rahmen */
    private $header = "";
    private $footer = "";

    private $body = ""; // Beinhaltet Content umgeben von HTML/CSS, Header und Footer

    private function __construct()
    {
        return $this;
    }

    public function addButton($url = "https://www.example.org", $text = "TEXT FEHLT", $color = "#000000", $style = "flat", $size = "large")
    {
        $fragment = new rex_fragment();
        $fragment->setVar('button_url', $url, false);
        $fragment->setVar('button_text', $text, false);
        $fragment->setVar('button_style', $style, false);
        $fragment->setVar('button_size', $size, false);
        $fragment->setVar('tpl_font-family', $this->font_family, false);
        if ($style == "full-width") {
            $this->elements .=  $fragment->parse('btn.full-width.php');
        }
        $this->elements .= $fragment->parse('btn.php');
        return $this;
    }
    public function addText($url = "https://www.example.org", $text = "TEXT FEHLT", $color = "#000000")
    {
        $fragment = new rex_fragment();
        $fragment->setVar('url', $url, false);
        $fragment->setVar('text', $text, false);
        $fragment->setVar('color', $color, false);
        $fragment->setVar('tpl_font-family', $this->font_family, false);
        $this->elements .= $fragment->parse('text.php');
        return $this;
    }
    public function addImage($src = "https://www.example.org/image.jpg", $alt = "TEXT FEHLT", $href = null)
    {
        $fragment = new rex_fragment();
        $fragment->setVar('image_src', $src, false);
        $fragment->setVar('image_alt', $alt, false);
        $fragment->setVar('image_href', $href, false);
        if ($href) {
            $this->elements .= $fragment->parse('image.anchor.php');
        }
        $this->elements .= $fragment->parse('image.php');
        return $this;
    }
    public function addCustom($content)
    {
        $this->elements .= $content;
        return $this;
    }

    public function addToCol()
    {
        $this->col[] = $this->elements;
        $this->elements = "";
        return $this;
    }


    public function addToRow($layout = "one-col")
    {
        $fragment = new rex_fragment();
        $fragment->setVar('content', $this->col, false);
        $this->content .= $fragment->parse('row.'.$layout.'.php');
        $this->col = [];
        return $this;
    }
    public function setStyles($bg_color = "#EEEEEE", $font_family)
    {
        $this->bg_color = $bg_color;
        $this->font_family = $font_family;
        return $this;
    }




    public function addHeader($preheader_text = null, $header_url = "", $header_image_src = "")
    {
        $fragment = new rex_fragment();

        if ($preheader_text) {
            $fragment->setVar('preheader_text', $preheader_text, false);
        }
        if ($header_url) {
            $fragment->setVar('header_url', $header_url, false);
            $fragment->setVar('header_image_src', $header_image_src, false);
        }

        $this->header = $fragment->parse('tpl.header.php');
    }

    public function addFooter($imprint = null, $options = [])
    {
        $fragment = new rex_fragment();

        if ($imprint) {
            $fragment->setVar('imprint', $imprint, false);
        }
        if ($options) {
            $fragment->setVar('options', $options, false);
        }

        $this->footer = $fragment->parse('tpl.footer.php');
    }

    public function getBody()
    {
        $fragment = new rex_fragment();
        $fragment->setVar('header', $this->header, false);
        $fragment->setVar('content', $this->content, false);
        $fragment->setVar('footer', $this->footer, false);

        $this->body = $fragment->parse('tpl.php');
        return $this->body;
    }
}
