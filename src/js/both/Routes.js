
Ext.define('Tualo.routes.SMS', {
    statics: {
        load: async function() {
            return [
                {
                    name: 'sms/send',
                    path: '#sms/send'
                }
            ]
        }
    }, 
    url: 'sms/send',
    handler: {
        action: function () {
            
            Ext.getApplication().addView('Tualo.SMS.Viewport');
        },
        before: function (action) {
            action.resume();
        }
    }
});

