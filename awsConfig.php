<?php

return array(
    // Bootstrap the configuration file with AWS specific features
    'includes' => array('_aws'),
    'services' => array(
        // All AWS clients extend from 'default_settings'. Here we are
        // overriding 'default_settings' with our default credentials and
        // providing a default region setting.
        'default_settings' => array(
            'params' => array(
                 'key'    => 'AKIAJZ5TBXXHM7DK5JZA',
                'secret' => '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',
                'region' => 'ap-southeast-1'
            )
        )
    )
);