# Contact Center Package

- Jim Mackin - SalesAgility
- Version 6

## Purpose
This package adds the base for the future contact center plugin. It adds a new Contact Center module which can be linked to users and provides an SSO login banner on pages for users with a matching contact center.

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. Note that the Quick Repair and Rebuild will generate database changes. Be sure to run these (at the bottom of the initial Quick Repair and Rebuild run). In addition "Repair Roles" should be ran from the Repair Menu.

Security Group restrictions aren't necessary - the module is setup to be only accessible to admins.

## Use
A new admin section for the contact center settings is now accessible, opening this up shows the List View for the contact center module which can be used like any other module.

Users can be added to a contact center via the subpanel. Note that this is a one to many relationship, if a user is added to a second contact center they will no longer be related to the first one.