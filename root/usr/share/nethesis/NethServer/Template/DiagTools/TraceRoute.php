<?php
/* @var $view Nethgui\Renderer\Xhtml */
echo $view->header()->setAttribute('template', $T('DiagToolsTraceRoute_header'));

echo $view->textInput('Host')->setAttribute('placeholder', 'nethserver.org');

echo $view->buttonList()
    ->insert($view->button('TraceRoute', $view::BUTTON_SUBMIT));
//    ->insert($view->button('Help', $view::BUTTON_HELP));

echo "<pre class='DiagTools_TraceRoute'>";
echo $view->textLabel('report');
echo "</pre>";


$view->includeCss('
    pre.DiagTools_TraceRoute {
        border: 2px solid #aaa;
        padding: 10px;
        width: 750px;
    }
');
