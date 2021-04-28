<?php

return [

    'options' => [],

    'endpoint' => env('ALIYUN_SLS_ENDPOINT', ''),

    'access_key' => env('ALIYUN_SLS_ACCESS_KEY', ''),

    'access_secret' => env('ALIYUN_SLS_ACCESS_SECRET', ''),

    'project' => env('ALIYUN_SLS_PROJECT', ''),

    'default_logstore' => env('','test'),


];
