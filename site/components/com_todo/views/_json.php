<?php
/**
 * Created by PhpStorm.
 * User: CAMERON
 * Date: 4/03/2015
 * Time: 4:51 PM
 */

class ComTodoViewJson extends KViewJson
{

    function _initialize(KObjectConfig $config)
    {
        $config->append(array(
           'behaviors' => array('backbone')
        ));
        parent::_initialize($config);

        die($this->getIdentifier());
    }
}