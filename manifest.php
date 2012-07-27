<?php
$manifest = array(
    'acceptable_sugar_versions' => array(
		'6.4.3',
		'6.4.4',
		'6.4.5',
		'6.5.0',
		'6.5.1',
		'6.5.2',
	),
    'acceptable_sugar_flavors' => array(),
    'readme' => '',
    'key' => 'PSI',
    'author' => 'Profiling Solutions',
    'description' => 'Extends the SugarCRM Session Length to 8 hours',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Session Length Extension',
    'published_date' => '2012-07-27 08:23:25',
    'type' => 'module',
	// versioning based on SugarCRM Version Major and Minor versions <underscore><underscore> Module Version
    'version' => '1.0beta1',
);
$installdefs = array(
    'id' => 'SessionLengthExtension',
    'copy' =>
    array(
		// the Logic Hook's class
        array(
            'from' => '<basepath>/PSI_Session_Length_Adjustment.php',
            'to' => 'custom/PSI_Session_Length_Adjustment.php',
        ),
		// the logic hook definition
		array(
		    'from' => '<basepath>/PSI_Session_Length_Adjustment_hook.php',
			'to' => 'custom/Extension/application/Ext/LogicHooks/PSI_Session_Length_Adjustment_hook.php',
		),
    ),
);