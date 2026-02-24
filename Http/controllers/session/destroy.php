<?php

use Core\Authenticator;

//log user out and redirect
(new Authenticator)->logout();
redirect('/');