/*jslint browser: true*/

//Block UI JS
(function (jQuery) {

    'use strict';

    jQuery.fn.blockui = jQuery.fn.blockUI = function () {
        this.addClass('block-ui-target block-ui-block');
        return this;
    };

    jQuery.fn.unblockui = jQuery.fn.unblockUI = function () {
        this.removeClass('block-ui-target block-ui-block');
        return this;
    };

}(window.jQuery));
