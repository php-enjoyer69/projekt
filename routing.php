<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('MainView',     'MainViewCtrl');

Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');

Utils::addRoute('registerShow',  'RegisterCtrl');
Utils::addRoute('register',      'RegisterCtrl');

Utils::addRoute('MovieList',    'MovieListCtrl');
Utils::addRoute('PersonList',   'PersonListCtrl');

Utils::addRoute('MovieTab',     'MovieTabCtrl',	['admin']);
Utils::addRoute('PersonTab',    'PersonTabCtrl',	['admin']);

Utils::addRoute('MovieNew',     'MovieEditCtrl',	['admin']);
Utils::addRoute('MovieEdit',    'MovieEditCtrl',	['admin']);
Utils::addRoute('MovieSave',    'MovieEditCtrl',	['admin']);
Utils::addRoute('MovieDelete',  'MovieEditCtrl',	['admin']);

Utils::addRoute('PersonNew',     'PersonEditCtrl',	['admin']);
Utils::addRoute('PersonEdit',    'PersonEditCtrl',	['admin']);
Utils::addRoute('PersonSave',    'PersonEditCtrl',	['admin']);
Utils::addRoute('PersonDelete',  'PersonEditCtrl',	['admin']);