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
    protected function _afterBrowse(KControllerContextInterface $context)
    {
        parent::_afterBrowse($context);

        $controller = $this->getController();

        $this->addSeparator();
        $this->addPublish(array('allowed' => $controller->canEdit()));
        $this->addUnpublish(array('allowed' => $controller->canEdit()));

        if($controller->canBrowse()) {
            $this->addSeparator()->addExport();
        }

        if ($controller->canAdmin()) {
            $this->addSeparator()->addOptions();
        }

    }

    protected function _commandExport(KControllerToolbarCommand $command)
    {
        if (version_compare(JVERSION, '3.0', '>=')) {
            $command->icon = 'icon-download';
        }

        $command->attribs->download = $this->getObject('translator')->translate('tasks');
        $command->attribs->href     = $this->getController()->getView()->getRoute('format=csv', false, false);
    }

}
