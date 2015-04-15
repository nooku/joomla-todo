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

<ktml:style src="media://koowa/com_koowa/css/site.css" />

<?= helper('bootstrap.load'); ?>
<?= helper('behavior.koowa'); ?>
<?= helper('behavior.keepalive'); ?>
<?= helper('behavior.validator'); ?>

<? // Toolbar ?>
<div class="koowa_toolbar">
    <ktml:toolbar type="actionbar">
</div>

<? // Form ?>
<div class="koowa_form">

    <div class="todo_form_layout">
        <form action="<?= route('id='. $task->id) ?>" method="post" class="-koowa-form">

            <div class="todo_container">
                <div class="todo_grid">
                    <div class="todo_grid__task two-thirds">

                        <? // Details fieldset ?>
                        <fieldset>
                            <legend><?= translate('Details') ?></legend>

                            <?= import('com://site/todo.task.form_details.html') ?>

                        </fieldset>

                        <? // Description fieldset ?>
                        <fieldset>
                            <legend><?= translate('Description') ?></legend>

                            <?= import('com://site/todo.task.form_description.html') ?>

                        </fieldset>
                    </div>

                    <div class="todo_grid__task one-third">
                        <? // Publishing fieldset ?>
                        <fieldset>
                            <legend><?= translate('Publishing') ?></legend>

                            <?= import('com://site/todo.task.form_publishing.html') ?>

                        </fieldset>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>