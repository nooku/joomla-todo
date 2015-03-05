<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

return array(
    'identifiers' => array(
        'com://site/todo.controller.item' => array('behaviors' => array('com:activities.controller.behavior.loggable')),
        'com://site/todo.view.items.json' => array('behaviors' => array('backbone')),
        'com://site/todo.view.item.json' => array('behaviors' => array('backbone'))
    ),
    'aliases'    => array(
        'com://site/todo.database.table.items'          => 'com://admin/todo.database.table.items',
        'com://site/todo.model.items'                   => 'com://admin/todo.model.items'
    )
);
