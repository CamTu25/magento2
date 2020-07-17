/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            owlCarousel:            'Magetop_Helloworld/js/owl.carousel',
        }
    },
    config: {
        mixins: {
            'Magento_Theme/js/view/breadcrumbs': {
                'Magento_Catalog/js/product/breadcrumbs': true
            }
        }
    }
};
