<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */
class ComTodoViewTasksJson extends ComTodoViewTaskJson
{
    /**
     * Get the entity list as an array
     * @return array
     */
    protected function _renderData()
    {

        $data = $this->getModel()->fetch();

        // extract the properties of the entity object
        $output = array_values($data->toArray());
        return $output;
    }
}