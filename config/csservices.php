<?php

return [
    'live' => env('CS_ENV',true),
    'merchant_id' => env('API_MERCHANT_ID'),
    'apikey_id' => env('API_KEY_ID'),
    'secret_key' => env('API_SECRET_KEY'),
    'run_env' => env('API_RUN_ENV'),
    'key_alias' => env('API_KEY_ALIAS'),
    'key_pass' => env('API_KEY_PASS'),
    'key_file_name' => env('API_KEY_FILE_NAME'),
    // Payment ---------- //
    'deviceDataCollectionURL'      => 'https://centinelapistag.cardinalcommerce.com/V1/Cruise/Collect',
    'cardinalCollectionFormOrigin' => 'https://centinelapistag.cardinalcommerce.com',
    'cardinalStepUpURL'            => 'https://centinelapistag.cardinalcommerce.com/V2/Cruise/StepUp',
    // ---------- //
    'deviceDataCollectionURL_live'      => 'https://centinelapi.cardinalcommerce.com/V1/Cruise/Collect',
    'cardinalCollectionFormOrigin_live' => 'https://centinelapi.cardinalcommerce.com',
    'cardinalStepUpURL_live'            => 'https://centinelapi.cardinalcommerce.com/V2/Cruise/StepUp'
];

?>
