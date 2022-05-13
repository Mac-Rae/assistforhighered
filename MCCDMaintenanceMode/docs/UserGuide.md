# Maintenance Mode

- Jim Mackin - SalesAgility
- Version 2

## Purpose
This package adds a "Maintenance Mode" to SuiteCRM. This allows admin users to temporarily turn off access to the CRM (for upgrades and the like) and display a message in it's place.

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect.

## Use
The package adds a Maintenance Mode section to the CRM in the admin settings. This page has two options:
- Enable Maintenance Mode - Turns maintenance mode on or off. Enabling the mode requires that Maintenance Mode HTML is provided. Enabling this will prevent non-admin CRM access and log any non-admin users out of the CRM.
- Maintenance Mode HTML - The maintenance mode page. This page will be displayed to non-admin users who try to access the CRM. This accepts HTML.
