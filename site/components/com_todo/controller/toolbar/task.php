<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

class ComTodoControllerToolbarTask extends ComKoowaControllerToolbarActionbar
{
    protected function _commandNew(KControllerToolbarCommand $command)
    {
        $command->href  = 'view=task&layout=form';
        $command->label = 'Add new task';
    }

    protected function _afterBrowse(KControllerContextInterface $context)
    {
        if($this->getController()->canAdd()) {
            $this->addCommand('new');
        }
    }

    protected function _afterRead(KControllerContextInterface $context)
    {
        $allowed = true;

        if (isset($context->result) && $context->result->isLockable() && $context->result->isLocked()) {
            $allowed = false;
        }

        $this->addCommand('apply', array('allowed' => $allowed));
        $this->addCommand('save', array('allowed' => $allowed));
        $this->addCommand('cancel');

        $controller = $this->getController();
        $name    = strtolower($controller->getIdentifier()->name);
        $unique  = $controller->getModel()->getState()->isUnique();
        $title   = $this->getObject('translator')->translate($unique ? 'Edit {task_type}' : 'Create new {task_type}',
            array('task_type' => $name));

        $this->getCommand('title')->title = $title;
    }
}
