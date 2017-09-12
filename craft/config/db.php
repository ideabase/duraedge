<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/config/defaults/db.php
 */

 return array(
   '*' => array(
     'server' => 'duraedge.web',
     'database' => 'duraedge_craft',
     'tablePrefix' => 'craft',
     'user' => 'PUT USER NAME HERE',
     'password' => 'PUT PASSWORD HERE',
   ),

   'duraedge.web' => array(
     'user' => 'root',
     'password' => 'root',
   ),

	 /* Don't commit the production user name and password - change on server instead */
   'PRODUCTIONURL.com' => array(
     'user' => 'PUT USER NAME HERE',
     'password' => 'PUT PASSWORD HERE',
   )
 );
