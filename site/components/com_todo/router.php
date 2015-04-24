<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

defined('_JEXEC') or die;

/**
 * Builds a URL from a query object
 *
 * @param array $query query object
 *
 * @return array
 */
function TodoBuildRoute(&$query)
{
    $segments = array();

    if(!isset($query['Itemid']))
    {
        $component = JComponentHelper::getComponent('com_todo');

        $attributes = array('component_id');
        $values     = array($component->id);


        $items = JApplication::getInstance('site')->getMenu()->getItems($attributes, $values);

        if(count($items)) {
            $query['Itemid'] = $items[0]->id;
        }

     
    }

    if(isset($query['view']))
    {
        $segments[] = $query['view'];
        unset( $query['view'] );
    }

    if(isset($query['id']))
    {
        $segments[] = $query['id'];
        unset( $query['id'] );
    }

    return $segments;
}

/**
 * Parse the segments into query string
 *
 * @param array $segments
 *
 * @return array
 */
function TodoParseRoute($segments)
{
    $vars = array();

    $vars['view'] = $segments[0];

    if(isset($segments[1])) {
        $vars['id'] = $segments[1];
        $vars['view'] = KStringInflector::singularize($segments[0]);
    }

    $menu = JFactory::getApplication()->getMenu()->getActive();
    if (isset($menu->query['layout'])) {
        $vars['layout'] = $menu->query['layout'];
    }

    return $vars;
}
