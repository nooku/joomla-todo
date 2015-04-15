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

<?= helper('behavior.validator'); ?>

<ktml:style src="media://koowa/com_koowa/css/admin.css" />

<ktml:module position="toolbar">
    <ktml:toolbar type="actionbar" icon="task-add icon-pencil-2">
</ktml:module>

<div class="todo_form_layout">
    <form action="" method="post" class="-koowa-form">
        <div class="todo_container">
            <div class="todo_grid">
                <div class="todo_grid__task two-thirds">
                    <fieldset>

                        <legend><?= translate('Details') ?></legend>

                        <div class="todo_grid">
                            <div class="control-group todo_grid__task two-thirds">
                                <label class="control-label" for="todo_form_title"><?= translate('Title') ?></label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input required class="input-group-form-control" id="todo_form_title" type="text" name="title" maxlength="255"
                                               value="<?= escape($task->title); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group todo_grid__task one-third">
                                <label class="control-label" for="todo_form_alias"><?= translate('Alias') ?></label>
                                <div class="controls">
                                    <input id="todo_form_alias" type="text" class="input-block-level" name="slug" maxlength="255"
                                           value="<?= escape($task->slug) ?>" />
                                </div>
                            </div>
                        </div>

                        <legend><?= translate('Description') ?></legend>

                        <div class="todo_grid description_container">
                            <div class="control-group todo_grid__task one-whole">
                                <div class="controls">
                                    <?= helper('editor.display', array(
                                        'name' => 'description',
                                        'value' => $task->description,
                                        'id'   => 'description',
                                        'width' => '100%',
                                        'height' => '341',
                                        'cols' => '100',
                                        'rows' => '20',
                                        'buttons' => array('pagebreak')
                                    )); ?>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div class="todo_grid__task one-third">
                    <fieldset>

                        <legend><?= translate('Publishing') ?></legend>

                        <div class="todo_grid">
                            <div class="control-group todo_grid__task one-whole">
                                <label class="control-label"><?= translate('Status'); ?></label>
                                <div class="controls radio btn-group">
                                    <?= helper('select.booleanlist', array(
                                        'name' => 'enabled',
                                        'selected' => $task->enabled,
                                        'true' => translate('Published'),
                                        'false' => translate('Unpublished')
                                    )); ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

    </form>
</div>