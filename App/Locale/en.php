<?php

return  [
    'title:home'     => 'Zest Framework',
    'framework:home' => 'Zest',
    'app:home'       => 'Start building your app',

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

];
