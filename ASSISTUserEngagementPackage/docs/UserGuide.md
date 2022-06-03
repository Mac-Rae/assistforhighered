# User Engagement Package

- Jim Mackin - SalesAgility
- Version 6

## Purpose
This package adds two features to SuiteCRM -
- A "banner" admin section that allows adding a banner to the top of CRM pages to make announcements, e.t.c.
- An option to manually trigger notifications for users.

## Install
This package should be installed via the module loader section of SuiteCRM. 
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect.

## Use
Installing the package adds a new "User Engagement" section to the admin screen. This has two sections: "Banner" and "Manual User Notifications".

### Banner
This page has two options:
- Enable Banner - Turns the banner on or off. Enabling the banner requires that Banner Contents are provided.
- Banner Contents - The actual contents of the banner. This accepts HTML, an Example Banner can be found in Appendix A.
Clicking save will persist the settings cancel will return to the admin screen without saving.

### Manual User Notifications
This page has three options:
- Notification Title - This is the title of the notification that is sent out. This should be a fairly short description of the notification.
- Notification Description - This is the body of the notification and will usually go into more detail about the notification.
- This is the list of users that will recieve the sent notification. Clicking the arrow will allow selecting a user (or users) and selecting users and clicking the cross will remove users from the list.
Clicking send will send the notifications to the selected user(s). Cancel will return to the admin page without taking any action.

## Appendix A - Example Banner HTML
```
<div style="padding:15px;background-color: #0c2340;color:#ffffff;text-align:center">
    New feature release coming next week. <a style="color:white;" href="#" target="_blank">Read more</a> here.
</div>
```