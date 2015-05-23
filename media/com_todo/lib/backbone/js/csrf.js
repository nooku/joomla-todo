/**
 * Todo - a Joomla example extension built with Nooku Framework.
 *
 * @package     Todo
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/joomla-todo for the canonical source repository
 */
Backbone.$.ajaxSetup({
    // make sure we send our csrf token
    beforeSend: function(xhr, settings) {
        if(settings.data != undefined) {
            // settings.data is a string, need the object
            var data = Backbone.$.parseJSON(settings.data);
            data.csrf_token = Backbone.csrf;
            // turn it back into a string.
            settings.data = JSON.stringify(data);
        }
    },
    // set the csrf for the Backbone namespace
    complete: function(xhr, message) {
        // for successful requests
        if(xhr.status == '200') {
            Backbone.csrf =  xhr.getResponseHeader('X-Csrf-Token');
        }
    }
});

