<div id="myModal" style="display:none;position:fixed;top:30%;left:50%;opacity:1;z-index:9999;background:#FFFFFF;border: 2px black solid;
  max-height:calc(100% - 80px);transform:translate(-50%,-50%);box-sizing:border-box;max-width:calc(100% - 80px); width: 1200px;border-radius: 5px">
    
    <div class="panel panel-default tab-panel-2" style="padding: 4px;">
        <div class="panel-heading ">
            <div class="col-xs-10 col-sm-11 col-md-11">
                Advisors
            </div>
        </div>
        <div class="panel-body" id="top-panel-2" data-id="LBL_ASSIST_ADVISOR_PANEL">
            <div class="tab-content">
                <form id="advisorPopupForm" action="index.php?entryPoint=ASSISTMassiveAssign" method="post">
                    <input type="hidden" id="reportid" name="reportid" value="{$reportid}">
                    <div class="row detail-view-row" style="margin-bottom: 3px;">
                        {foreach from=$assigment_fields key=field item=field_label}
                            <div class="col-xs-12 col-sm-6 edit-view-row-item">
                                <div class="col-xs-12 col-sm-4 label" style="margin-top: 15px">{$field_label}:</div>
                                <div class="col-xs-12 col-sm-8 edit-view-field " field="{$field}">
                                    <input type="text" name="{$field}" class="sqsEnabled" tabindex="0" id="{$field}" size="" title="" autocomplete="off">
                                    <input type="hidden" name="{$field}_id" id="{$field}_id">
                                    <span class="id-ff multiple">
                                        <button type="button" tabindex="0" title="Select User" class="button firstChild" value="Select User" onclick="openPopupUsers('{$field}')">
                                            <span class="suitepicon suitepicon-action-select"></span>
                                        </button>
                                        <button type="button" tabindex="0" title="Clear User" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, '{$field}', '{$field}_user_id');" value="Clear User">
                                            <span class="suitepicon suitepicon-action-clear"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        {/foreach}

                    </div>
                    <div class="row detail-view-row" style="margin: 6px;">
                        <button class="button primary" type="submit">{$APP.LBL_SAVE_BUTTON_TITLE}</button>
                        <button class="button primary" type="button" onclick="closeAdvisorModal()">{$APP.LBL_CANCEL_BUTTON_TITLE}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    </div>
        
</div>
