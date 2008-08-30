<?php
require_once ("../../../includes/buildServer-common.php");

$options = array (
	"BaseBuilderBranch" => "RC2_34",
	
	"BranchAndJDK" => array (
		"emft.eclipse.org=------------,------------",
		"0.7.0=HEAD,/opt/sun-java2-5.0",
		#"0.7.1=R0_7_maintenance,/opt/sun-java2-5.0",
		
		"build.eclipse.org=------------,------------",
		"0.7.0=HEAD,/opt/public/common/ibm-java2-ppc-50"
		#"0.7.1=R0_7_maintenance,/opt/public/common/ibm-java2-ppc-50"
	),
	
	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "lucas.bigeardel@gmail.com", // prefil email contact box with comma-sep'd list
	
	"Users" => array("lbigearde","lbigearde",null) /* build user, eclipse cvs user, IES cvs user */
);

?>