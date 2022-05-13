# Field Level Access Package

- Jim Mackin - SalesAgility
- Version 13

## Purpose
This package adds the ability to restrict access to specific fields for roles.

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. 

## Use
Once installed this package creates an admin section called "Field Level Access" this page allows selecting a CRM Module and Role and changing which fields are accessible for that role on that module.

For each field there are 5 options, similar to the options used in Security Groups for the module access:
- Not Set - No explicit permission. Will allow access but will defer to other explicit permissions if the user is in more than one role. 
- All - This user can access this field on all records
- Group - This user can access this field for records which they are in the same group as
- Owner - This user can access this field for records which they are the owner of (i.e. they are the assigned to user)
- None - No access to this field on any record
