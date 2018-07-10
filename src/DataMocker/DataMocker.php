<?php
/**
 * @copyright    Copyright (c) allmyhomes GmbH (http://www.allmyhomes.com)
 *
 * @author       Maximiliano Suster <maximiliano.suster@allmyhomes.com>
 * @author       Andrzej Mikulewicz <andrzej.mikulewicz@allmyhomes.com>
 *
 */

namespace Dingo\Blueprint;


class DataMocker
{
    /**
     * @var string
     */
    public $version;

    /**
     * DataMocker constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $controllerName
     * @return string
     */
    public function generate($controllerName)
    {
        return '';
    }

}
