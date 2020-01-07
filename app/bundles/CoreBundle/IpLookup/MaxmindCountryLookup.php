<?php

/*
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle\IpLookup;

class MaxmindCountryLookup extends AbstractMaxmindLookup
{
    /**
     * @return string
     */
    protected function getName(): string
    {
        return 'maxmind_country';
    }
}
