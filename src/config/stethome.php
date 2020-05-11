<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Vendor Token
      |--------------------------------------------------------------------------
      |
      | The Stethome Vendor Token.
     */
    'vendor_token' => env('STETHOME_VENDOR_TOKEN'),
    /*
      |--------------------------------------------------------------------------
      | Base Uri
      |--------------------------------------------------------------------------
      |
      | The Stethome Base Uri.
     */
    'base_uri' => env('STETHOME_BASE_URI', 'https://cert2.middleware.stethome.com/v1'),
    /*
      |--------------------------------------------------------------------------
      | Request Retries
      |--------------------------------------------------------------------------
      |
      | Specifies the number of retries when receiving a 500 error response.
     */
    'request_retries' => env('STETHOME_REQUEST_RETRIES', 3),
];
