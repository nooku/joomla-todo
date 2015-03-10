<?php
/**
 * Created by PhpStorm.
 * User: CAMERON
 * Date: 5/03/2015
 * Time: 7:05 AM
 */

class ComTodoViewBehaviorBackbone extends KViewBehaviorAbstract
{

    public function _beforeRender($context)
    {
        $view = $this->getMixer();
        // lets get the data from the model.
        $data = $view->getModel()->fetch();
        $result = array();

        // if we are getting a collection, make sure we build an array for backbone
        // Check if the model state is unique instead of $view->isCollection(), it checks the plurality of the view. We don't want that.

        if($view->getModel()->getState()->isUnique())
        {
            // extract the properties of the row object
            $result = $data->getProperties();
        }
        // if a collection, we just want a list so get only the values of the array representation of the RowSet
        // @see https://github.com/nooku/nooku-framework/blob/master/code/libraries/koowa/libraries/database/rowset/abstract.php#L558
        else $result = array_values($data->toArray());

        // set the content of the view.
        $view->setContent($result);

    }

}