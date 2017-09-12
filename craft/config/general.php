<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
	       'extraAllowedFileExtensions' => 'eps',
         'siteUrl' => 'PRODUCTION URL',
         'enableCsrfProtection' => true,
         'omitScriptNameInUrls' => true,
         'cpTrigger' => 'admin',
         'environmentVariables' => array(
           'basePath' => '',
           'baseUrl'  => 'PRODUCTION URL',
        )
	),
	'duraedge.web' => array(
	    'devMode' => true,
      'siteUrl' => 'duraedge.web',
      'environmentVariables' => array(
        'basePath' => '',
        'baseUrl'  => 'duraedge.web',
      )
	)
);
