
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

        Backbone.csrf =  xhr.getResponseHeader('X-Csrf-Token');

    }

});