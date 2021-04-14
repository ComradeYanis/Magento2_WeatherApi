define([
    'jquery',
    'mage/url',
    'uiComponent',
    'ko',
], function (
    $,
    urlBuilder,
    Component,
    ko
) {
    'use strict';
    return Component.extend({

        defaults: {
            template: 'ComradeYanis_WeatherApi/weather-data',
            interval: 10,
            info: ko.observable({})
        },

        initialize: function (config) {
            this._super();
            this.updateInfo();
            setInterval(this.updateInfo.bind(this), this.interval * 100000);
        },

        updateInfo: function() {
            var self = this;
            $.ajax({
                url: urlBuilder.build('rest/V1/weather/api'),
                contentType: 'application/json',
                global: true,
                type: 'GET',
                showLoader: false,
                cache: false,
                success: function (response) {
                    self.info(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        },

    });
});
