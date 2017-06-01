# plotagon-wp-edu
Plotagon Education Webpage based on Wordpress

## Setup Requirements
- a mac (possibly works on pc as well but never tested)
- MAMP or XAMPP or equivalent virtual webserver with DB
- Sass/Compass - for CSS compilation

## Setup a virtual webserver
After cloning the repo, go to plotagon-wp-edu/config and duplicate wp-config-sample.php (make sure there still is a copy of wp-config-sample.php in the folder), rename the copy to wp-config.php
Edit the following line in wp-config.php to your new database settings for your virtual server (make sure you have created the db before running the server):

```
/** The name of the database for WordPress */
define('DB_NAME', 'plotagoneducation_com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');
```

Run the local webserver pointing to the repo folder and access it via your favourite browser, go through the wordpress installation (Settings does not matter as it is only local settings).

## Wordpress settings
When the Wordpress installation is done there are a few settings you should do to make your dev-experience easier in the Wordpress Dashboard (logged in as admin).

1. First of all go to Settings -> Permalinks and choose "Post name" and save.

2. Go to "Appearance" and "Themes" and activate the "plotagoneducation" theme.

3. Go to AWS in the dashboard sidebar and choose "Access Keys", click "reveal a form" and type in the "Access Key ID" and "Secret Access Key" for the AWS plotagon-wp-assets bucket (can be found in Meldium).

4. Go to "S3 and CloudFront" in the AWS sidebar and click "enter your license key" which is "414d4ce7-d005-4933-9b1e-9dcf5016136e" and activate.

5. Click the tab "Media Library" within S3 and CloudFront and type in "plotagon-wp-assets" as the Existing bucket name. You will then have activated the "Offload S3" plugin and just make sure the plugin is enabled and then click save at the bottom.

6. Go to "Plugins" in the Dashboard sidebar and "Installed Plugins", activate "WP Migrate DB Pro" and "WP Offload S3 - Assets Addon"

7. Go back to AWS in the sidebar and choose "S3 and CloudFront", is there choose the tab "Assets". Type in "plotagon-wp-assets" and click "Save Bucket". Then turn on the "Copy & Serve" addon as well as turn on "Path" and type in "plotagon-education/" then "Save Changes".

8. Lastly go to "Tools" -> "Migrate DB Pro" and activate the plugin by entering the following license key: "67ec7519-5f7d-40fe-9222-6f031d12321b". Back under the tab "Migrate" choose "Pull" and enter: "https://plotagoneducation.com EXTggjRQ3u7vdimG7hoZauSyWnMYKak1C0QrYcP7". Click "Save Migration Profile" as it will make it easier to pull the DB later. Finish it of with pressing "Pull" and the DB from production will be imported into your wp-dev.

Your local Wordpress settings is now setup as a copy of production. Note that this will also change your Wordpress admin account to the same info as the production admin account if not changed back in your local DB.

## Working with the plotagoneducation theme
When working with the plotagoneducation theme you will only be working from the wp-content/themes/plotagoneducation folder. Run:

```
compass watch
```
to add a watch for the SASS compiling.

Everything else should be pretty selfexplanatory so have fun and contact orjan@plotagon.com if in doubt.
