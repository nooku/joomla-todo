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

<?= helper('bootstrap.load'); ?>
<?= helper('behavior.koowa');?>
<?= helper('behavior.modal');?>

<? // Toolbar ?>
<ktml:toolbar type="actionbar" title="false" />

<? foreach ($tasks as $task): ?>
    <? //Import child template from document view ?>
    <?= import('com://site/todo.task.default.html', array(
        'task' => $task,
    )) ?>
<? endforeach ?>