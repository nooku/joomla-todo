<?php
/**
 * Created by PhpStorm.
 * User: CAMERON
 * Date: 23/04/2015
 * Time: 7:04 AM
 */

class ComTodoViewTaskJson extends KViewJson
{

    function _actionRender($context)
    {
        if(!$this->_content)
        {
            // set the content of the view.
            $this->_content = $this->_renderData();
        }

        return parent::_actionRender($context);
    }

    function _renderData()
    {

        $data = $this->getModel()->fetch();

        // extract the properties of the entity object
        $output = $data->getProperties();
        return $output;
    }
}