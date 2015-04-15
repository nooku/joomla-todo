<?
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

defined('KOOWA') or die; ?>

<? // No tasks message ?>
<? if ($total == 0): ?>
    <p class="alert alert-info">
        <?= translate('You do not have any tasks yet.'); ?>
    </p>
<? else: ?>

<div class="koowa mod_todo mod_todo--tasks">
    <ul>
    <? foreach ($tasks as $task): ?>
        <li class="module_task">

            <p class="koowa_header">
                <? // Header title ?>
                <span class="koowa_header__task">
                    <a href="<?= route('option=com_todo&view=task&id='.$task->id); ?>"
                       class="koowa_header__title_link"
                       data-title="<?= escape($task->title); ?>"
                       data-id="<?= $task->id; ?>">
                        <?= escape($task->title);?></a>

                </span>
            </p>


            <p class="module_task__info">

                <? // Created ?>
                <? if ($module->params->show_created): ?>
                <span class="module_task__date">
                    <?= helper('date.format', array('date' => $task->created_on)); ?>
                </span>
                <? endif; ?>
            </p>
        </li>
    <? endforeach; ?>
    </ul>
</div>

<? endif; ?>