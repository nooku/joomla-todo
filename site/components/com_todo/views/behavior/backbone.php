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

        $data = $view->getModel()->fetch();

        $result = array();

        // if we are getting a collection, make sure we build an array for backbone
        if($view->isCollection())
        {
            foreach($data as $entity) {
                $result[] = $entity->toArray();
            }
        }
        else $result = $data->toArray();

        // set the content of the view.
        $view->setContent($result);

    }
}