<?php
/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */

class ComTodoTemplateHelperBehavior extends ComKoowaTemplateHelperBehavior
{
    /**
     * Makes links delete actions
     *
     * Used in frontend delete buttons
     *
     * @param array $config
     * @return string
     */
    public function deletable($config = array())
    {
        $config = new KObjectConfigJson($config);
        $config->append(array(
            'selector' => '.todo-deletable',
            'confirm_message' => $this->getObject('translator')->translate('You will not be able to bring this task back if you delete it. Would you like to continue?'),
        ));

        $html = $this->koowa();

        $signature = md5(serialize(array($config->selector,$config->confirm_message)));
        if (!isset(self::$_loaded[$signature])) {
            $html .= "
            <script>
            kQuery(function($) {
                $('{$config->selector}').on('click', function(event){
                    event.preventDefault();

                    var target = $(event.target);

                    if (!target.hasClass('disabled') && confirm('{$config->confirm_message}')) {
                        new Koowa.Form($.parseJSON(target.prop('rel'))).submit();
                    }
                });
            });
            </script>
            ";

            self::$_loaded[$signature] = true;
        }

        return $html;
    }
}
