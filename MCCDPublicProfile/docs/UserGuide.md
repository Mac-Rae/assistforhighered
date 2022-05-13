# Public Profile Package

- Jim Mackin - SalesAgility
- Version 16

## Purpose
This package adds the option for users to setup a public profile where non-CRM users can view contact details, working hours and book meetings. 

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. 
Note that the Quick Repair and Rebuild will generate database changes. 
Be sure to run these (at the bottom of the initial Quick Repair and Rebuild run). 
In addition "Repair Roles" should be run from the Repair Menu.

## Use
Once installed a new tab will appear when editing a users profile (for most users this will be their own but admins can edit all users profiles).
This tab has an option at the top to enable/disable the public profile functionality. Just below this option is the current Public URL for this profile.

The rest of the public profile page consists broadly of two columns with each row having options for specific fields.

The "Display" checkbox turns on or off the display of this field or it's associated functionality.

Most fields are simple display fields but some tie into additional logic:

- Business Days - This controls the business hours panel in the public profile, the days that are worked along with the start and end times of a business day can be selected here.
- Meeting days - Similar to the business days but this controls when meetings can be booked. Additionally the length of meetings can be selected. Disabling this option disables booking a meeting via the public profile.
- Live chat snippet - A token used to include the live chat on the public profile
- Out of office - Allows a user to set some dates for an out of office notice.