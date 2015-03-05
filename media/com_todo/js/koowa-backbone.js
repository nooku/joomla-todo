/**
 * Created by CAMERON on 4/03/2015.
 */
/**
 * We are overriding the success methods for returned
 * data from the server.
 *
 * Koowa json views return the response with the "model' as an 'item' attribute
 * i.e. resp.item = model
 */

// Cache the original Backbone.sinc method.
Backbone.emulateHTTP = true;
var oldBackbone = _.extend({}, Backbone);

Backbone.sync = function(method, model, options) {

    var defaultData = {format: 'json'};
    var success = options.success;

    /**
     * it seems we need to explicitly set the format for the Koowa server to
     * work.
     *
     *  SVN TEST CODE
     */
    switch (method) {

        case 'create':
        case 'patch' :
        case 'update':
            if (model.hasOwnProperty('attributes'))
                model.set('format', 'json');
            else
                model.format = 'json';
            break;
        case 'read':
            options.data = typeof options.data !== 'undefined' ? _.extend(defaultData, options.data) : defaultData;
            break;
    }

    if (model.hasOwnProperty('attributes')) {
        options.success = function(model, resp, options) {
            if (resp.item) {
                model.set(resp.item);
            }

            if (success)
                success(model, resp, options);
        }
    } else {
        options.success = function(model, resp, options) {
            if (resp.items) {
                model.reset(resp.items);
                resp = resp.items;
            }
            if (success)
                success(model, resp, options);
        }
    }

    return oldBackbone.sync(method, model, options);

};