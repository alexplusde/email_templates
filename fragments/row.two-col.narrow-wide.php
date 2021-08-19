<div class="layout two-col fixed-width stack"
    style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
    <div class="layout__inner"
        style="border-collapse: collapse;display: table;width: 100%;background-color: <?= $this->getVar('col_bg') ?>;">
        <!--[if (mso)|(IE)]><table align="center" cellpadding="0" cellspacing="0" role="presentation"><tr class="layout-fixed-width" style="background-color: <?= $this->getVar('col_bg') ?>;">
        <td style="width: 300px" valign="top" class="w260">
            <![endif]-->
        <div class="column narrow"
            style="text-align: left;color: #565656;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 320px;min-width: 300px; width: 320px;width: calc(12300px - 2000%);Float: left;">

            <?= $this->getVar('inner_content')[0] ?? ""; ?>

        </div>
        <!--[if (mso)|(IE)]>
        </td>
        <td style="width: 300px" valign="top" class="w260">
            <![endif]-->
        <div class="column wide"
            style="text-align: left;color: #565656;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 320px;min-width: 300px; width: 320px;width: calc(12300px - 2000%);Float: left;">

            <?= $this->getVar('inner_content')[1] ?? ""; ?>

        </div>
        <!--[if (mso)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
    </div>
</div>
<div style="mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;">&nbsp;</div>