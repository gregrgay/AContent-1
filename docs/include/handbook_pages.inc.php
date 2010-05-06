<?php
/************************************************************************/
/* Transformable                                                        */
/************************************************************************/
/* Copyright (c) 2009                                                   */
/* Adaptive Technology Resource Centre / University of Toronto          */
/*                                                                      */
/* This program is free software. You can redistribute it and/or        */
/* modify it under the terms of the GNU General Public License          */
/* as published by the Free Software Foundation.                        */
/************************************************************************/

$handbook_pages = array(
               'register.php',
               'login.php',
               'password_reminder.php',
               'user/index.php' =>      array(
                                        'user/user_create_edit.php',
                                        'user/user_password.php',
                                        'user/user_group.php',
                                        'user/user_group_create_edit.php'   
                                        ),
               'language/index.php' =>  array(
                                        'language/language_add_edit.php'
                                        ),
               'translation/index.php' => array(),
               'profile/index.php' =>   array(
                                        'profile/change_password.php',
                                        'profile/change_email.php'
                                        ),
               'updater/index.php' => array('updater/patch_create.php')
);

?>