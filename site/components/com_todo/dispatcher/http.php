<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

class ComTodoDispatcherHttp extends ComKoowaDispatcherHttp
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'controller' => 'task',
        ));

        parent::_initialize($config);
    }

    public function getRequest()
    {
        $request = parent::getRequest();

        $query = $request->query;

        // Can't use executable behavior here as it calls getController which in turn calls this method
        if ($this->getObject('user')->authorise('core.manage', 'com_todo') !== true)
        {
            $query->enabled = 1;
        }
        else
        {
            // force 0+1 so the state is set with the right values - see Nooku #174
            $query->enabled = array(0,1);
        }

        // Force tmpl=koowa for form layouts
        if ($query->layout === 'form') {
            $query->tmpl = 'koowa';
        }

        return $request;

    }
}
