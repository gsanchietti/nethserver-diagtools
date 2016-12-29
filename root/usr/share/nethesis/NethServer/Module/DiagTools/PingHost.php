<?php
namespace NethServer\Module\DiagTools;

use Nethgui\System\PlatformInterface as Validate;

/**
 * Implement gui module for diagnostic tools
 */

class  PingHost extends \Nethgui\Controller\AbstractController
{

    private $report;


    private function getReport()
    {
        return $this->getPlatform()->exec('/usr/bin/sudo /usr/bin/ping -c4 ' . $this->parameters['Host'])->getOutput();
    }

    public function initialize()
    {
        $this->declareParameter('Host', Validate::HOSTADDRESS, array('configuration', 'diagtools', 'pingHost'));
        parent::initialize();
    }

    public function bind(\Nethgui\Controller\RequestInterface $request)
    {
        parent::bind($request);
        $this->report = $this->getReport();
    }

    public function prepareView(\Nethgui\View\ViewInterface $view)
    {
        parent::prepareView($view);
        if (!$this->report) {
            $this->report = $this->getReport();
        }
        $view['report'] = $this->report;
    }
}