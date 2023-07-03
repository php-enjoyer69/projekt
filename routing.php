<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('MainView'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

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

Utils::addRoute('MovieTab',     'MovieTabCtrl');
Utils::addRoute('PersonTab',    'PersonTabCtrl');

Utils::addRoute('movieNew',     'MovieEditCtrl');
Utils::addRoute('MovieEdit',    'MovieEditCtrl');
Utils::addRoute('movieSave',    'MovieEditCtrl');
Utils::addRoute('movieDelete',  'MovieEditCtrl');

Utils::addRoute('PersonNew',     'PersonEditCtrl');
Utils::addRoute('PersonEdit',    'PersonEditCtrl');
Utils::addRoute('PersonSave',    'PersonEditCtrl');
Utils::addRoute('PersonDelete',  'PersonEditCtrl');