# Webhooks Package

- Jim Mackin - SalesAgility
- Version 4

## Purpose
This package extends the Workflow functionality of SuiteCRM to add the ability to notify external webhooks when events happen in the CRM.


## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect.

## Use
The package adds an extra Workflow action to the core Workflow module. This action allows specifying a URl, method, headers and parameters for the webcall that will be made. The fields available are:
- URL - This is the destination URL that the call should be made to. Please include protocol and port(if needed). Examples:
  - http://localhost/example.php
  - https://127.0.0.1:8080/path/to/webhook
- Description - This is informational only. This isn't used in the call but is intended to allow any notes about this webhook to be stored.
- Method - The HTTP method to use for the call. In most cases this will be GET or POST but this will depend on the destination.
- Parameter Format - This tells the plugin which format to use for sending the parameters.
  - Form Fields/Query String - This option will send the parameters as part of the query string (for GET calls) or as form fields (such as when a form on a webpage is sent, for other call methods).
  - JSON - This will send the parameters as a JSON encoded object in the body of the request. Note that the plugin does not add any headers automatically. You may wish to specify the `Content-Type` as a header.
- Headers - This allows adding a set of key-value pairs to be used as the header for the request. Setting the content type and/or setting any authorisation details are common here.
- Parameters - The actual payload of the request. Similar to headers these are a set of key/value pairs, however there is a third option that specifies how the value should be used.
  - Static - Used to send a hardcoded string. This may be useful to tell the webhook where the request has came from or specify other values that don't change between requests.
  - Field - Send a field from the current workflow module (i.e. for a workflow on accounts you may send the Account name)
  - Format - Used for more complex requests. Send a string that can have the module fields interpolated into it. Any part of the parameter here of the format `{$FIELDNAME}` will be replaced with the appropriate field (i.e. `{$name}` will be replaced with the `name` field of the module).

## Example
Let's look at an explicit example. We will post to a webex webhook whenever a new account is created. This example assumes working knowledge of the Workflow module.

First off we'll create a new workflow for the Accounts module running "Only on Save". We wont add any conditions since we want this to run on every record but a real life workflow may want to restrict this somehow.

Next up we will add our new webhook action. Create a new action and choose webhook.

- For URL fill in the Webex webhook URL you have been provided with. This example will use `https://example.com`.
- For method we will be POSTing the data.
- For format Webex expects JSON so we will choose JSON.
- For the description field we can use anything. Ideally it should be informative for anyone checking the hook in the future.
- Next up we want to add a single header to specify the Content Type. Press the "Add Header Button".
  - In the fields that appear add `Content-Type` to the name and `application/json` to the value.
- Finally we want to add the actual payload. The webex hook expects a single field named `text`. Let's add that parameter now. Press the "Add Parameter" button.
  - In the fields that appear add `text` as the name field.
  - Next up we could use `static` to send a hardcoded notification or `field` to send over the name but we want our message to be a little more descriptive. Select the `format` type.
    - We are now presented with a textarea. Use the example at the bottom of this doc in the field. This will create a message in the webex channel that specifies the name and phone number of the new account.

Example workflow message:
```
A new Account has been created: {$name}.
Phone number is {$phone_office}
```
