# Dashboard Templates

- Jim Mackin - SalesAgility
- Version 6

## Purpose
This package allows admin users to define default dashboards for roles and to retroactively apply these dashboards to particular roles. 

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. Note that the Quick Repair and Rebuild will generate database changes. Be sure to run these (at the bottom of the initial Quick Repair and Rebuild run). In addition "Repair Roles" should be ran from the Repair Menu.

## Use
The package will add a new section to the admin screen with two new pages: "Dashboard Templates" and "Apply Dashboard Templates".

### Dashboard Templates
This page lists the currently defined templates and allows saving new ones. Existing templates have the following information displayed:
- Template Name - A descriptive name chosen when creating the template
- Copy dashboard from - The user that this dashboard template was taken from
- Last Modified/Updated - The date/time that this template was either created or updated.

#### Creating a New Template
Click on the "New Template" button, a popup will appear allowing you to choose the template name - it is recommended to use a descriptive name here to aid with applying the templates later. "Copy Dashboard from" allows you to choose the user to take the dashboard from. It is recommended that you set up the dashboard via your homescreen prior to this step.

Clicking save will persist the new template, cancel will close the popup and take no other action.

### Apply Dashboard Templates
This page allows actually setting up how the templates will be used.

A list of the current settings is displayed, if there are any. Each row has the following info:
- Target role - the role that should get this dashboard applied
- Dashboard - The actual dashboard setting to be used
- Apply to all - By default the dashboard templates are only applied to people who are added to the role after the creation of the setting. Clicking this button will retroactively apply this dashboard to all users in that role.
- X - Allows removing defined dashboard settings

Finally there are three buttons at the bottom of the page:
- New Line - Adds a new row to the settings list, this can be edited as above.
- Save - Saves the current settings
- Cancel - Does not save the current settings and returns to the admin page