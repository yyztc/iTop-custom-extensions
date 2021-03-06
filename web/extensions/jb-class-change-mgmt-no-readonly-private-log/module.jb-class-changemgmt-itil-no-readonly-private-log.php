<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'jb-class-changemgmt-itil-no-readonly-private-log/2.5.180804',
	array(
		// Identification
		//
		'label' => 'Class: NormalChange and RoutineChange (ITIL) - don\'t make private log Read-Only',
		'category' => 'business',

		// Setup
		//
		// Compatible with this version. Maybe higher.
		'dependencies' => array( 
			'itop-change-mgmt-itil/2.5.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.jb-class-changemgmt-itil-no-readonly-private-log.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
