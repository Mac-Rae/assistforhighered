# Audit Package

- Jim Mackin - SalesAgility
- Version 2

## Purpose
This package adds additional auditing capabilities to SuiteCRM. The following events will trigger audit records:
- User Login
- User Logout
- Record Create
- Record Update
- Record Delete

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. Note that the Quick Repair and Rebuild will generate database changes. Be sure to run these (at the bottom of the initial Quick Repair and Rebuild run). In addition "Repair Roles" should be ran from the Repair Menu.

## Use
Once installed the CRM will automatically create the Audit records. These are stored in the Audit module and can be viewed, reported on, e.t.c. in the same way as any other module.

The key information in an Audit record is:
- User - The User responsible for the change or action.
- Record - The affected record
- Change Log - Shows the change log of the affected record 
- Module - The module that the event happened on - for User login and logouts this will be the Users module. 
- Action - The action that was logged, i.e. "Login", "Logout", "Create" e.t.c.
- IP Address - The IP Address of the request (as seen by the server - this may not actually be the IP of the original request).
- Date Created - The date and time that the event happened. 

