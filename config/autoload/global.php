<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
 'service_manager' => array(
 		'factories' => array(
 			'Zend\Db\Adapter\Adapter'
 			=> 'Zend\Db\Adapter\AdapterServiceFactory'
 		),

 ),
		
 'db' => array(
 		'driver' =>'mysqli',
 		'driver_options ' => array(
 			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \ UTF8\''
 		),
 		'options' => array('buffer_results' => true),
 		'username' => 'root',
 		'password' => '1234',
 		'host' => '127.0.0.1',
 		'schema' => 'annie',
 	),
		'di' => array(),
		
);
