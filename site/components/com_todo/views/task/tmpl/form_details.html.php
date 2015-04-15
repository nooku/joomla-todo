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

<? // Title field ?>
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