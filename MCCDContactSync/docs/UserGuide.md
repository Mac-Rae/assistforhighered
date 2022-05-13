# MCCD Athena Sync

- Jim Mackin - SalesAgility
- Version 10

## Purpose
This package adds a sync to the Amazon Athena service in order to sync down contact records.

## Install
This package should be installed via the module loader section of SuiteCRM.
Once installed a Quick Repair and Rebuild should be run for the package changes to take effect. Note that the Quick Repair and Rebuild will generate database changes. Be sure to run these (at the bottom of the initial Quick Repair and Rebuild run).

## Use
Once installed the CRM will add a new (inactive) scheduler and will add four new admin sections. The scheduler and the admin sections are detailed below.

### Athena Admin - Config
This is the general config section for the sync. This allows setting the various settings for the actual connection to athena.

- Catalog,Database - These set the underlying tables for Athena to query. The default install uses `AwsDataCatalog` and `assist_records`.
- Query Output Location - The Athena API stores results temporarily in an S3 bucket. This specifies the path.
- API Version - The API Version of the connection. The default is `2017-05-18`. This should likely not be changed.
- Region - Default `us-west-2` - The region to connect to.
- Key,Secret - The actual credentials for the API. Please speak to your administrator for access to these.
- 
### Athena Admin - Athena Sync Field Config
This page allows editing the mapping between the Athena field names and the CRM field names. Note that `emplid => emplid` should probably always be defined in this list. Note that the CRM Field names uses the CRM system name. Please see studio if you are unsure, though names are usually snake_cased versions of the display name (I.e. "First Name" is `first_name` behind the scenes).

### Athena Admin - Athena Bulk Import
This page provides a simple option to perform the sync using a CSV file rather than the API. This can be used for bulk, historic imports. By default it uses the existing mapping but you will get the opportunity to define the mapping to be used on a per file basis.

### Athena Admin - Sync Results
This page lists the various runs of the sync that have been recorded and stores the date it was ran as well as the date range of records processed. In addition, it provides a count of processed records and processed unique records (processed records is the count of rows the sync ran on, processed unique records is the count of unique emplids that were processed). 

### Scheduler
The schedule is in charge of actually running the sync. The scheduler page is the same as any core scheduler and the schedule can be changed as needed.

When running the scheduler will check the config for the date of the last record it ran on (`$sugar_config['mccd_athena']['last_run']` in the `config_override.php` file, this could be changed or cleared to rerun alrady processed records). It then queries Athena for any record updated after this date and processes them in date order.

The query is limited to `$sugar_config['mccd_athena']['per_run_limit']` records (defaulting to 5000) to prevent unintentionally large runs.

For each row retrieved from Athena the CRM checks for any contacts with a matching emplid, creating a new record if one does not exist. It then applies the mapping to the row and updates any relevant fields in the CRM. The CRM assumes that Athena is the source of truth and will override any local changes with the Athena version.

The sync should run unattended but can be set to inactive/active as needed.