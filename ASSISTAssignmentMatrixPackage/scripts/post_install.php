<?php

require_once 'modules/ModuleBuilder/parsers/ParserFactory.php';
function post_install()
{
    $views = ['DetailView','EditView'];
    foreach($views as $view){
        echo "Saving changes to Contacts $view<br>";
        $parser = ParserFactory::getParser($view, 'Contacts');
        if(!array_key_exists("lbl_assist_advisor_panel",$parser->_viewdefs['panels'])){
            $parser->_viewdefs['panels']["lbl_assist_advisor_panel"] = array (
                0 =>
                    array (
                        0 =>
                            array (
                                'name' => 'chandler_user',
                                'label' => 'LBL_CHANDLER_USER',
                            ),
                        1 =>
                            array (
                                'name' => 'estrella_mountain_user',
                                'studio' => true,
                                'label' => 'LBL_ESTRELLA_MOUNTAIN_USER',
                            ),
                    ),
                1 =>
                    array (
                        0 =>
                            array (
                                'name' => 'gateway_user',
                                'studio' => true,
                                'label' => 'LBL_GATEWAY_USER',
                            ),
                        1 =>
                            array (
                                'name' => 'glendale_user',
                                'studio' => true,
                                'label' => 'LBL_GLENDALE_USER',
                            ),
                    ),
                2 =>
                    array (
                        0 =>
                            array (
                                'name' => 'mesa_user',
                                'studio' => true,
                                'label' => 'LBL_MESA_USER',
                            ),
                        1 =>
                            array (
                                'name' => 'paradise_valley_user',
                                'studio' => true,
                                'label' => 'LBL_PARADISE_VALLEY_USER',
                            ),
                    ),
                3 =>
                    array (
                        0 =>
                            array (
                                'name' => 'phoenix_user',
                                'studio' => true,
                                'label' => 'LBL_PHOENIX_USER',
                            ),
                        1 =>
                            array (
                                'name' => 'rio_salado_user',
                                'studio' => true,
                                'label' => 'LBL_RIO_SALADO_USER',
                            ),
                    ),
                4 =>
                    array (
                        0 =>
                            array (
                                'name' => 'scottsdale_user',
                                'studio' => true,
                                'label' => 'LBL_SCOTTSDALE_USER',
                            ),
                        1 =>
                            array (
                                'name' => 'south_mountain_user',
                                'studio' => true,
                                'label' => 'LBL_SOUTH_MOUNTAIN_USER',
                            ),
                    ),
                5 =>
                    array (
                        0 =>
                            array (
                                'name' => 'district_user',
                                'studio' => true,
                                'label' => 'LBL_DISTRICT_USER',
                            ),
                        1 => '',
                    ),
            );
        }
        if(!array_key_exists("LBL_ASSIST_ADVISOR_PANEL",$parser->_viewdefs['templateMeta']['tabDefs'])){
            $parser->_viewdefs['templateMeta']['tabDefs']['LBL_ASSIST_ADVISOR_PANEL'] = array (
                'newTab' => false,
                'panelDefault' => 'expanded',
            );
        }
        $parser->handleSave(false);
    }
    $parser = ParserFactory::getParser(MB_BASICSEARCH, 'Contacts');
    $parser->_viewdefs[] =
    array(
        'name' => 'my_students',
        'label' => 'LBL_MY_STUDENTS_FILTER',
        'type' => 'bool',
    );
    $parser->handleSave(false);

    $data = file_get_contents(get_custom_file_if_exists('modules/Contacts/metadata/SearchFields.php'));
    $data .= "\n\nrequire_once 'custom/include/SugarFields/Fields/ASSISTAssignment/ASSISTSearchFieldPatch.php';";
    file_put_contents('custom/modules/Contacts/metadata/SearchFields.php',$data);

    echo "Please run a Quick Repair and Rebuild to finalise the install.<br>";
}