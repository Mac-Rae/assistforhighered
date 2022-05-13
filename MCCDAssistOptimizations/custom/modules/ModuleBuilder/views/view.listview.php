<?php
require_once 'modules/ModuleBuilder/views/view.listview.php';

class CustomViewListView extends ViewListView{
    public function constructSmarty($parser)
    {
        global $mod_strings;
        $smarty = new Sugar_Smarty() ;
        $smarty->assign('translate', true) ;
        $smarty->assign('language', $parser->getLanguage()) ;

        $smarty->assign('view', $this->editLayout) ;
        $smarty->assign('module', "ModuleBuilder") ;
        $smarty->assign('field_defs', $parser->getFieldDefs()) ;
        $smarty->assign('action', 'listViewSave') ;
        $smarty->assign('view_module', $this->editModule) ;
        if (!empty($this->subpanel)) {
            $smarty->assign('subpanel', $this->subpanel) ;
            $smarty->assign('subpanelLabel', $this->subpanelLabel) ;
            if (!$this->fromModuleBuilder) {
                $subList =  SubPanel::getModuleSubpanels($this->editModule);
                $subRef = $subList[strtolower($this->subpanel)];
                $subTitleKey = !empty($subRef) ? $subRef : "LBL_" . strtoupper($this->subpanel) . "_SUBPANEL_TITLE";
                $subTitle    = !empty($subRef) ? translate($subTitleKey, $this->editModule) : UCfirst($this->subpanel);
                $smarty->assign('subpanel_label', $subTitleKey) ;
                $smarty->assign('subpanel_title', $subTitle) ;
            }
        }
        $helpName = $this->subpanel ? 'subPanelEditor' : 'listViewEditor';
        $smarty->assign('helpName', $helpName) ;
        $smarty->assign('helpDefault', 'modify') ;

        $smarty->assign('title', $this->_constructTitle()) ;
        $groups = array( ) ;
        foreach ($parser->columns as $column => $function) {
            // update this so that each field has a properties set
            // properties are name, value, title (optional)
            $groups [ $GLOBALS [ 'mod_strings' ] [ $column ] ] = $parser->$function() ; // call the parser functions to populate the list view columns, by default 'default', 'available' and 'hidden'
        }
        foreach ($groups as $groupKey => $group) {
            foreach ($group as $fieldKey => $field) {
                if (isset($field [ 'width' ])) {
                    if (substr($field [ 'width' ], - 1, 1) == '%') {
                        $groups [ $groupKey ] [ $fieldKey ] [ 'width' ] = substr($field [ 'width' ], 0, strlen($field [ 'width' ]) - 1) ;
                    }
                }
            }
        }

        $smarty->assign('groups', $groups) ;
        $smarty->assign('from_mb', $this->fromModuleBuilder);

        global $image_path;
        $imageSave = SugarThemeRegistry::current()->getImage('studio_save', '', null, null, '.gif', $mod_strings['LBL_BTN_SAVE']) ;

//        $imageHelp = SugarThemeRegistry::current()->getImage('help') ;


        $history = $parser->getHistory() ;

        $histaction = "ModuleBuilder.history.browse(\"{$this->editModule}\", \"{$this->editLayout}\")" ;
        if ($this->subpanel) {
            $histaction = "ModuleBuilder.history.browse(\"{$this->editModule}\", \"{$this->editLayout}\", \"{$this->subpanel}\")" ;
        }

        $restoreAction = "onclick='ModuleBuilder.history.revert(\"{$this->editModule}\", \"{$this->editLayout}\", \"{$history->getLast()}\", \"\")'";
        if ($this->subpanel) {
            $restoreAction = "onclick='ModuleBuilder.history.revert(\"{$this->editModule}\", \"{$this->editLayout}\", \"{$history->getLast()}\", \"{$this->subpanel}\")'";
        }

        $buttons = array( ) ;
        $buttons [] = array( 'id' =>'savebtn', 'name' => 'savebtn' , 'image' => $imageSave , 'text' => (! $this->fromModuleBuilder)?$GLOBALS [ 'mod_strings' ] [ 'LBL_BTN_SAVEPUBLISH' ]: $GLOBALS [ 'mod_strings' ] [ 'LBL_BTN_SAVE' ], 'actionScript' => "onclick='studiotabs.generateGroupForm(\"edittabs\");if (countListFields()==0) ModuleBuilder.layoutValidation.popup() ; else ModuleBuilder.handleSave(\"edittabs\" )'" ) ;
        $buttons [] = array(
            'id' =>'saveForcebtn',
            'name' => 'saveForcebtn' ,
            'image' => $imageSave ,
            'text' => $GLOBALS['mod_strings']['LBL_BTN_SAVEPUBLISH_FORCE'],
            'actionScript' => "onclick='studiotabs.generateGroupForm(\"edittabs\");var form = document.getElementById(\"edittabs\");var input = document.createElement(\"input\");input.type=\"hidden\";input.name= \"forceViewDeploy\";input.value = 1;form.appendChild(input);if (countListFields()==0) ModuleBuilder.layoutValidation.popup() ; else ModuleBuilder.handleSave(\"edittabs\" )'"
        );
        $buttons [] = array( 'id' => 'spacer' , 'width' => '50px' ) ;
        $buttons [] = array( 'id' =>'historyBtn',       'name' => 'historyBtn' , 'text' => translate('LBL_HISTORY') , 'actionScript' => "onclick='$histaction'" ) ;
        $buttons [] = array( 'id' => 'historyDefault' , 'name' => 'historyDefault',  'text' => translate('LBL_RESTORE_DEFAULT') , 'actionScript' => $restoreAction ) ;

        $smarty->assign('buttons', $this->_buildImageButtons($buttons)) ;

        $editImage = SugarThemeRegistry::current()->getImage('edit_inline', '', null, null, '.gif', $mod_strings['LBL_EDIT']) ;

        $smarty->assign('editImage', $editImage) ;
        $deleteImage = SugarThemeRegistry::current()->getImage('delete_inline', '', null, null, '.gif', $mod_strings['LBL_MB_DELETE']) ;

        $smarty->assign('deleteImage', $deleteImage) ;
        $smarty->assign('MOD', $GLOBALS [ 'mod_strings' ]) ;

        if ($this->fromModuleBuilder) {
            $smarty->assign('MB', true) ;
            $smarty->assign('view_package', $_REQUEST [ 'view_package' ]) ;
            $mb = new ModuleBuilder() ;
            $module = & $mb->getPackageModule($_REQUEST [ 'view_package' ], $this->editModule) ;
            $smarty->assign('current_mod_strings', $module->getModStrings());
            if ($this->subpanel) {
                if (isset($_REQUEST [ 'local' ])) {
                    $smarty->assign('local', '1') ;
                }
                $smarty->assign("subpanel", $this->subpanel) ;
            } else {
                $smarty->assign('description', $GLOBALS [ 'mod_strings' ] [ 'LBL_LISTVIEW_DESCRIPTION' ]) ;
            }
        } else {
            if ($this->subpanel) {
                $smarty->assign("subpanel", (string)$this->subpanel) ;
            } else {
                $smarty->assign('description', $GLOBALS [ 'mod_strings' ] [ 'LBL_LISTVIEW_DESCRIPTION' ]) ;
            }
        }

        return $smarty ;
    }
}