<?php

return  [
    'title:home'     => 'Zest Framework',
    'framework:home' => 'Zest',
    'app:home'       => 'Start building your app',

    /* DO NOT DELETE THESE DEFAULTS */
    //Validations
    'string:validation'         => 'The :field much be type of string like, mango',
    'required:validation'       => 'The :field is required',
    'int:validation'            => 'The :field must be int like, 20, 200',
    'float:validation'          => 'The :field field must be of type float e.g. 20.0',
    'email:validation'          => 'Email address is not valid',
    'ip:validation'             => 'Ip address is not valid',
    'ipv6:validation'           => 'The value must be a valid IPv6 address',
    'alpha:validation'          => 'The :field value must only contain characters of the alphabet',
    'subnet:validation'         => 'The value must be a valid IPv4 subnet',
    'validate:validation'       => 'Json is invilide',
    'unique:validation'         => 'The :field value already exists, try another',

    //Pagination
    'first:page:pagination' => 'First',
    'last:page:pagination'  => 'Last',
    'prev:page:pagination'  => 'Prev',
    'next:page:pagination'  => 'Next',

    //Auth
    /* ERRORS */
    'auth:error:password:confirm'    => 'Password much be matched',
    'auth:error:username:not:exists' => 'Sorry, the username does not exists',
    'auth:error:email:not:exists'    => 'Sorry, the email does not exists',
    'auth:error:password:sticky'     => 'Password much be greate then 6 much contain lowercase,uppercase and special character',
    'auth:error:need:verification'   => 'You should verify your account in order to login, another verification is sended to your email addresss',
    'auth:error:already:login'       => 'Account already loggedin',
    'auth:error:login:required'      => 'You need login to your account in order to do that action',
    'auth:error:token'               => 'Invilid request',
    /* SUCCESS */
    'auth:success:signin'          => 'Login successfully',
    'auth:success:signup'          => 'Your account has been created successfully',
    'auth:success:update'          => 'Your account has been updated',
    'auth:success:update_password' => 'Your password has been updated',
    'auth:success:verified'        => 'Your account verified login now to enjoy in our services',
    'auth:success:reset'           => 'Password reset request has been sended to your email',
    /* Email subjects */
    'auth:subject:need:verify' => 'Account verification required',
    'auth:subject:verified'    => 'Account verified',
    'auth:subject:reset'       => 'Password reset request',
    /* Email Bodies */
    'auth:body:need:verify' => 'Dear :email your account has been created you need verify your account<br><a href=":link">verify my account</a><br>Click above link if you unable to open copy paste below link <br>:link',
    'auth:body:reset'       => 'Dear :email We recieve password reset request form your account reset your password now<br><a href=":link">reset my password</a><br>Click above link if you unable to open copy paste below link <br>:link',
    'auth:body:verified'    => 'Dear :email your account verified login now to enjoy in our services',

    //Default FILES Messages
    'z:files:error:extension'      => 'The file extension .%s not supported',
    'z:files:error:exceed:limit'   => 'The file size %sbytes exceed the maximum limit',
    'z:files:error:somethingwrong' => 'Something went wrong',
    'z:files:error:invilid:file'   => 'The uploaded file is not valid file',
    'z:files:success'              => 'File uploaded successfully',
    'z:files:error:mine:type'      => 'The file mineType \'%s\' not supported',

    //Formats Class language strings
    'z:format:just:now'    => 'Just now',
    'z:format:ago'         => 'ago',
    'z:format:secs'        => '%d secs',
    'z:format:min'         => 'mint',
    'z:format:mints'       => '%d mints',
    'z:format:hour'        => 'hour',
    'z:format:hours'       => '%d hours',
    'z:format:day'         => 'day',
    'z:format:days'        => '%d days',
    'z:format:week'        => 'week',
    'z:format:weeks'       => '%d weeks',
    'z:format:month'       => 'month',
    'z:format:months'      => '%d months',
    'z:format:year'        => 'year',
    'z:format:years'       => '%d years',
];
