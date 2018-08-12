<?php

namespace Config;

/**
 * Auth configuration.
 */
class Auth
{
    /**
     * Auth database table.
     *
     * @var string
     */
    const AUTH_DB_TABLE = 'your-auth-table';
    /**
     * Auth database name.
     *
     * @var string
     */
    const AUTH_DB_NAME = 'your-auth-db';
    /**
     * Auth default verification link.
     *
     * @var string
     */
    const VERIFICATION_LINK = '/account/verify/';
    /**
     * Auth default verification link.
     *
     * @var string
     */
    const RESET_PASSWORD_LINK = '/account/reset/password';
    /**
     * is send email over smtp.
     *
     * @var string
     */
    const IS_SMTP = false;
    /**
     * is user need to verify email.
     *
     * @var string
     */
    const IS_VERIFY_EMAIL = false;
    /**
     * sticky password.
     *
     * @var string
     */
    const STICKY_PASSWORD = false;
    /**
     * Defaults auth errors msgs.
     *
     * @var array
     */
    const AUTH_ERRORS = [
        'password_confitm'   => 'Password much be matched',
        'username_not_exist' => 'Sorry, the username does not exists',
        'email_not_exist'    => 'Sorry, the email does not exists',
        'password_match'     => 'Password does not matched',
        'sticky_password'    => 'Password much be greate then 6 much contain lowercase,uppercase and special character',
        'account_verify'     => 'You should verify your account in order to login, another verification is sended to your email addresss',
        'already_login'      => 'Account already loggedin',
        'need_login'         => 'You need login to your account in order to update profile',
        'token'              => 'Invilid request',
    ];
    /**
     * Defaults auth success msgs.
     *
     * @var array
     */
    const SUCCESS = [
        'signin'          => 'Login successfully',
        'signup'          => 'Your account has been created successfully',
        'update'          => 'Your account has been updated',
        'update_password' => 'Your password has been updated',
        'verified'        => 'Your account verified login now to enjoy in our services',
        'reset'           => 'Password reset request has been sended to your email',
    ];
    /**
     * Defaults auth email subjects.
     *
     * @var array
     */
    const AUTH_SUBJECTS = [
        'need_verify' => 'Account verification required',
        'verified'    => 'Account verified',
        'reset'       => 'Password reset request',
    ];
    /**
     * Defaults auth email bodies.
     *
     * @var array
     */
    const AUTH_MAIL_BODIES = [
        'need_verify' => 'Dear :email your account has been created you need verify your account<br><a href=":link">verify my account</a><br>Click above link if you unable to open copy paste below link <br>:link',
        'reset'       => 'Dear :email We recieve password reset request form your account reset your password now<br><a href=":link">reset my password</a><br>Click above link if you unable to open copy paste below link <br>:link',
        'verified'    => 'Dear :email your account verified login now to enjoy in our services',
    ];
}
