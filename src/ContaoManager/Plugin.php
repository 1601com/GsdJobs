<?php

namespace Agentur1601com\GsdJobs\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Agentur1601com\GsdJobs\GsdJobsBundle;
use Contao\CalendarBundle\ContaoCalendarBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(GsdJobsBundle::class)
                ->setLoadAfter([ContaoCalendarBundle::class]),
        ];
    }
}
