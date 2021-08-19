<div style="Margin-left: 20px;Margin-right: 20px;">
    <div class="btn btn--<?= $this->getVar('button_style') ?> fullwidth btn--<?= $this->getVar('button_size') ?>"
        style="Margin-bottom: 20px;text-align: center;">
        <![if !mso]><a
            style="border-radius: 4px;display: block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #ffffff !important;background-color: <?= $this->getVar('button_color') ?>;<?= $this->getVar('tpl_font-family') ?>"
            href="<?= $this->getVar('button_url') ?>"><?= $this->getVar('button_text') ?></a>
        <![endif]>
        <!--[if mso]><p style="line-height:0;margin:0;">&nbsp;</p><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="<?= $this->getVar('button_url') ?>/"
        style="width:560px" arcsize="9%" fillcolor="<?= $this->getVar('button_color') ?>"
        stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,11px,0px,11px">
            <center
                style="font-size:14px;line-height:24px;color:#FFFFFF;<?= $this->getVar('tpl_font-family') ?>font-weight:bold;mso-line-height-rule:exactly;mso-text-raise:4px">
                <?= $this->getVar('button_text') ?>
            </center>
        </v:textbox>
        </v:roundrect>
        <![endif]-->
    </div>
</div>