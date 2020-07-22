/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * @deprecated since version 2.2.0
 */
/* eslint-disable strict */
define([], function () {
    return {
        /**
         * Post base url.
         */
        getBaseUrl: function () {
            return this.values.baseUrl;
        },

        /**
         * Post form key.
         */
        getFormKey: function () {
            return this.values.formKey;
        }
    };
});
