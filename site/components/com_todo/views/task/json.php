<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

class ComTodoViewTaskJson extends KViewJson
{
    /**
     * Simplified render action
     * @param $context
     * @return mixed
     */
    function _actionRender($context)
    {
        if(!$this->_content)
        {
            // set the content of the view.
            $this->_content = $this->_renderData();
        }

        return parent::_actionRender($context);
    }

    /**
     *  Get the properties of the entity in an array.
     * @return mixed
     */
    protected function _renderData()
    {
        // get the data
        $data = $this->getModel()->fetch();

        // extract the properties of the entity object
        $output = $data->getProperties();
        return $output;
    }
}
