<?php
/**
 * WsdlToClass
 *
 * PHP Version 7.1
 *
 * @copyright 2015-2018 Danny van der Sluijs <danny.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */

declare(strict_types=1);

namespace WsdlToClass\Wsdl;

use WsdlToClass\Generator\IStructureGenerator;

/**
 * A Response is a specific form of a Struct
 */
class Response extends Struct
{
    /**
     * Create a response from a Struct
     * @param \WsdlToClass\Wsdl\Struct $struct
     * @return Response
     */
    public static function createFromStruct(Struct $struct): Response
    {
        return new static($struct->getName(), $struct->getProperties());
    }
}
