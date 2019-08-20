<?php

namespace Dynamic\Foxy\Integrations\Extension;

use Dynamic\Foxy\Model\Setting;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Core\Extension;

class FoxyIntegrationsExtension extends Extension
{
    /**
     * @param $FoxyData
     * @throws \SilverStripe\ORM\ValidationException
     */
    public function addIntegrations(&$encryptedData)
    {
        $config = Setting::current_foxy_setting();

        if (!$config->Integrations()->exists()) {
            Injector::inst()->get(LoggerInterface::class)->debug("No integrations at this time.");
        }

        foreach ($config->Integrations() as $integration) {
            // relay Datafeed to each Integration via guzzle
            $client = new Client();
            $response = $client->request('POST', $integration->URL, [
                'form_params' => ['FoxyData' => $encryptedData],
            ]);

            if ($response->getBody() != 'foxy') {
                echo '<p>' . $integration->Title . ' failed</p>';
            }

            Injector::inst()->get(LoggerInterface::class)
                ->debug($integration->Title . " responded " . $response->getBody());
        }
    }
}
