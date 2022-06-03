# List Enhancements Package

- Jim Mackin - SalesAgility
- Version 6

## Purpose
This package adds conditional colouring to various views in the CRM.

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect.

## Use
Once installed a new section will appear in the admin settings. "Customise field display Colors".

This page uses an interface similar to workflow. Familiarising yourself with the workflow interface will help here. https://docs.suitecrm.com/user/advanced-modules/workflow/
This page allows setting up the conditional colouring in various parts of the CRM. Upon opening the page you will be presented with a list of the current settings, if any exist, these have the following information:
- Name - A descriptive name for the setting. Used to aid recognition of the rules
- Module - The module that this rule targets
- The field that this rule targets
- Enable - Whether this rule is enabled or not
- ListView - Whether this rule should trigger on the list view or not
- DetailView - Whether this rule should trigger on the detail view or not
- Subpanel - Whether this rule should trigger on subpanels or not
- Dashlets - Whether this rule should trigger on dashlets or not
- BG Color - The background colour to use for matching fields 
- Text Color - The text colour to use for matching fields
- Link Color - The link colour to use for matching fields
- Operator - The comparison operator to be used when comparing the field
- Type - The type of value to compare against
- Value - The actual value to compare this field against 
- Delete - Provides the option to delete this rule

There are three other buttons on this page - Save, Cancel and "+".
"+" Will add a new rule to the page. Clicking save will persist the rules, cancel will return to the admin screen without saving.