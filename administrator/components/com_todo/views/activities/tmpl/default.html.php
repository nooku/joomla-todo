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

<?= helper('bootstrap.load', array('javascript' => true)); ?>
<?= helper('behavior.koowa'); ?>

<ktml:style src="media://koowa/com_koowa/css/admin.css" />

<ktml:module position="submenu">
    <ktml:toolbar type="menubar">
</ktml:module>

<ktml:module position="toolbar">
    <ktml:toolbar type="actionbar" title="COM_TODO_SUBMENU_ACTIVITIES" icon="task icon-stack">
</ktml:module>

<div class="todo-container">
    <div class="todo_admin_list_grid">
        <form action="" method="get" class="-koowa-grid">
            <div class="todo_table_container">
                <table class="table table-striped footable">
                    <thead>
                    <tr>
                        <th style="text-align: center;" width="1">
                            <?= helper('grid.checkall')?>
                        </th>
                        <th class="todo_table__message_field">
                            <?= translate('Message'); ?>
                        </th>
                        <th width="30%" data-hide="phone,phablet">
                            <?= helper('grid.sort', array('column' => 'created_on', 'title' => 'Time')); ?>
                        </th>
                    </tr>
                    </thead>
                    <? if (count($activities)): ?>
                        <tfoot>
                        <tr>
                            <td colspan="9">
                                <?= helper('paginator.pagination') ?>
                            </td>
                        </tr>
                        </tfoot>
                    <? endif; ?>
                    <tbody>
                    <? foreach ($activities as $activity): ?>
                        <tr>
                            <td style="text-align: center;">
                                <?= helper('grid.checkbox', array('entity' => $activity)) ?>
                            </td>
                            <td class="todo_table__message_field">
                                <?= helper('com:activities.activity.activity', array('entity' => $activity)) ?>
                            </td>
                            <td>
                                <?= helper('date.humanize', array('date' => $activity->created_on)); ?>
                            </td>
                        </tr>
                    <? endforeach; ?>

                    <? if (!count($activities)) : ?>
                        <tr>
                            <td colspan="9" align="center" style="text-align: center;">
                                <?= translate('No activities found.') ?>
                            </td>
                        </tr>
                    <? endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
