<?
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

defined('KOOWA') or die;

$show_delete   = $task->canPerform('delete');
$show_edit     = $task->canPerform('edit');
$button_size   = 'btn-small';
?>

<? // Edit and delete buttons ?>
<? if (!($task->isLockable() && $task->isLocked()) && ($show_edit || $show_delete)): ?>
<div class="btn-toolbar koowa_toolbar">
        <div class="btn-group">

        <? // Edit ?>
        <? if ($show_edit): ?>
            <a class="btn <?= $button_size ?>"
               href="<?= route('view=task&id='.$task->id.'&layout=form');?>"
            ><?= translate('Edit'); ?></a>
        <? endif ?>

        <? // Delete ?>
        <? if ($show_delete):
            $data = array(
                'method' => 'post',
                'url'    => (string)route('view=task&id='.$task->id),
                'params' => array(
                    'csrf_token' => object('user')->getSession()->getToken(),
                    '_action'    => 'delete',
                    '_referrer'  => base64_encode((string) object('request')->getUrl())
                )
            );

            if (parameters()->view == 'task')
            {
                if ((string)object('request')->getReferrer()) {
                    $data['params']['_referrer'] = base64_encode((string) object('request')->getReferrer());
                } else {
                    $data['params']['_referrer'] = base64_encode(JURI::base());
                }

            }
        ?>
            <?= helper('behavior.deletable'); ?>
            <a class="btn <?= $button_size ?> btn-danger todo-deletable" href="#" rel="<?= escape(json_encode($data)) ?>">
                <?= translate('Delete') ?>
            </a>
        <? endif ?>
    </div>
</div>
<? endif ?>
