<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  LinkedIn API Configuration
| -------------------------------------------------------------------
|
| To get an facebook app details you have to create a Facebook app
| at Facebook developers panel (https://developers.facebook.com)
|
|  linkedin_api_key        string   Your LinkedIn App Client ID.
|  linkedin_api_secret     string   Your LinkedIn App Client Secret.
|  linkedin_redirect_url   string   URL to redirect back to after login. (do not include base URL)
|  linkedin_scope          array    Your required permissions.
*/
$config['linkedin_api_key']       = '81x2xmo42ouyv9';
$config['linkedin_api_secret']    = 'WhPsj6E8OVxRYadK';
$config['linkedin_redirect_url']  = 'http://localhost/academy/student/linkedin_login';
$config['linkedin_scope']         = 'r_basicprofile r_emailaddress';