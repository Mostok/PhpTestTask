<?php
return array(
    'tasks/create' => 'TasksController@create',
    'tasks/store' => 'TasksController@store',
    'tasks' => 'TasksController@list',

    'login' => 'LoginController@login',
    'logout' => 'LoginController@logout',
    'authorization' => 'LoginController@authorization',


    'admin/task/edit/([0-9]+)' => 'AdminController@taskEdit@$1',
    'admin/task/update/([0-9]+)' => 'AdminController@taskUpdate@$1',
    'admin/task/performed/([0-9]+)' => 'AdminController@taskPerformed@$1',
    'admin' => 'AdminController@tasks',

    '' => 'TasksController@main',
);
