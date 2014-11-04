<?
/**
 * @package    Tada
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */
defined('KOOWA') or die; ?>

<? // Status field ?>
<div class="tada_grid">
    <div class="control-group tada_grid__item one-whole">
        <label class="control-label"><?= translate('Status'); ?></label>
        <div class="controls radio btn-group">
            <?= helper('select.booleanlist', array(
                'name' => 'enabled',
                'selected' => $item->enabled,
                'true' => translate('Published'),
                'false' => translate('Unpublished')
            )); ?>
        </div>
    </div>
</div>