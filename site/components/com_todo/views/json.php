<?php
/**
 * Created by PhpStorm.
 * User: CAMERON
 * Date: 27/03/2015
 * Time: 7:13 AM
 */

class ComTodoViewJson extends KViewJson
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
        $output = array();

        // if we are getting a collection, make sure we build an array for backbone
        // Check if the model state is unique instead of $view->isCollection(), it checks the plurality of the view.
        // We don't want that.

        if($this->getModel()->getState()->isUnique())
        {
            // extract the properties of the row object
            $output = $data->getProperties();
        }
        // if a collection, we just want a list so get only the values of the array representation of the RowSet
        // @see https://github.com/nooku/nooku-framework/blob/master/code/libraries/koowa/libraries/database/rowset/abstract.php#L558
        else $output = array_values($data->toArray());

        return $output;
    }
}