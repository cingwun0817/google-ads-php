<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.CustomerFeedService' => [
            'GetCustomerFeed' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/customerFeeds/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCustomerFeeds' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}/customerFeeds:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
