<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Api Key
      |--------------------------------------------------------------------------
      |
      | The stethome API key. You can find it or create a new one in the
      | API authentication tab of the application section in the StethoMe dashboard
      | https://dashboard.stethome.me/apps/<YOUR_APP_ID>/auth
     */
    'vendor_token' => env('STETHOME_VENDOR_TOKEN'),
    /*
      |--------------------------------------------------------------------------
      | Request Retries
      |--------------------------------------------------------------------------
      |
      | Specifies the number of retries when receiving a 500 error response.
     */
    'request_retries' => env('STETHOME_REQUEST_RETRIES', 3),
];
