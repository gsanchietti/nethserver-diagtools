<?php
/* @var $view Nethgui\Renderer\Xhtml */
echo $view->header()->setAttribute('template', $T('DiagToolsIpRoute_header'));

echo $view->buttonList()
    ->insert($view->button('Run', $view::BUTTON_SUBMIT))
//    ->insert($view->button('Help', $view::BUTTON_HELP));

echo "<pre class='DiagTools_IpRoute'>";
echo $view->textLabel('report');
echo "</pre>";


$view->includeCss('
    pre.DiagTools_IpRoute {
        border: 2px solid #aaa;
        padding: 10px;
    }
');
