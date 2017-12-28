<?php
/**
 * WsdlToClass
 *
 * PHP Version 7.0
 *
 * @copyright 2015-2017 Danny van der Sluijs <danny.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */

namespace WsdlToClass\Wsdl;

use IteratorAggregate;
use Countable;

/**
 * The response collection is used to group all the responses in a single object
 */
class ResponseCollection extends ArrayCollection implements IteratorAggregate, Countable
{
    /**
     * ResponseCollection constructor.
     * @param Response[] ...$responses
     */
    public function __construct(Response ...$responses)
    {
        foreach ($responses as $response) {
            $this->add($response);
        }
    }

    /**
     * @param Response $response
     */
    public function add(Response $response)
    {
        $this->addItem($response->getName(), $response);
    }
}