# WebIS USB Install Instructions #
By downloading this software you agree to abide by all the Licenses contained within.

For a list of software licenses, downloads, and installation instructions please refer to the Software section of this website.

To install, Download the .exe file and run the .exe file. Extract it to the C:\ drive (the root folder) or any other drive/device. The WebIS folder will be created with all the software in that folder.

## Starting Applications ##
Follow the following directions carefully and in order:

 * Start PortableApps: Double click on `Start` in the `\WebIS` folder.
 * Click on the icon to access the menu system.
 * Start Eclipse
 * Start Firefox
 * Start XAMPP Control Panel
 * Start the Servers
  * Click 'start' on Apache and Mysql. (unblock if firewall asks)
  * Do not click on the Svc check boxes, this will cause problems!
  * Wait for green 'running' boxes
  * Click stop when you are done working

## Configure New Installs ##
 * Use Firefox to configure the system.  It can remember your passwords.
 * Turn on bookmarks toolbar: Firefox (click triangle) > Options (click triangle) > Bookmarks toolbar

### Configure XAMPP ###
 * Manage security using the security page(XAMPP Lite > Security)
  * Change the security using the http://localhost:8000/security/xamppsecurity.php link
  * Change the MySQL root password (webis)
  * Check the check box indicating the location where the user credentials are stored.
  * Press "Password changing" button to save (do not save password in Firefox)
  * The user credentials can be found at the following location 
   `\WebIS\PortableApps\XAMPP\App\xampplite\security\mysqlrootpasswd.txt`
  * Protect the xampp directory with a user (webis) and password (webis)
  * Check the check box indicating the location where the user credentials are stored.
  * Press "Make safe the XAMPP directory" to set username and password (do not save password in Firefox)
  * The user credentials can be found at the following location 
   `\WebIS\PortableApps\XAMPP\App\xampplite\security\xamppdirpasswd.txt`
 * Create a default Database
  * Access XAMPP Lite > Tools:phpmyadmin. The first password is the XAMPP Lite username (webis) and password (webis), let Firefox save the password if you wish.
  * Login to the phpmyadmin page with the database user (root) and password password (webis), let Firefox save the password if you wish.
  * Create a new database called database (MySQL localhost > Databases > Create New Database: database)

### Configure Eclipse ###
 * Window > Preferences > (search) encoding 
  * select (General) Workspace > Text file encoding > Other > UTF-8
  * select (Web) CSS Files > change the Encoding to ISO 10646/Unicode(UTF-8) [press ii]
  * select (Web) HTML Files > change the Encoding to ISO 10646/Unicode(UTF-8) [press ii]
  * click OK
 * Window > Preferences > PHP > Code Style > Code Templates > Configure generated code and comments: Code > html 4.01 frameset > Edit > Replace with following
{{{
<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
<?php
${cursor}
?>
</body>
</html>
}}}

## GitHub ##
 * Window > Preferences > Team > Git
  * Default Repository Folder > Variable > workspace_loc
  * Configuration > User Settings > Add Entry > user.name and user.email
 * Signup for an account at GitHub (https://github.com) DO NOT USE A SECURE PASSWORD, USE A NEW ONE.
 * Create a blank test repository with a README and License (Apache V2)
 * Files > Import > Git > Projects From Git > URI > 
  * Enter https url from github (on right panel of repository), github username and password, and select store in secure store 
  * Select `master` branch and verify it is stored in your workspace
  * Configure Secure Store
  * New Project Wizzard (follow the prompt)
 * Clone the WebIS repository (https://github.com/MiddelkoopT/WebIS-2014-spring)
  * Set local working directory to `\WebIS\workspace\WebIS`
  * Select `Import Existing Projects`
  * If no project is seen select `search for nexted projects` on, or, off then back on.
  * If it fails import manually (File > Import > General > Existing Projects > Browse (verify it is in the workspace and select OK) > Finish)

## TDD/PHP ##
 * Setup PHP Executable (Preferences > PHP > PHP Executables > Name: PHP, Add (\WebIS\PortableApps\XAMPP\App\xampp\php\php.exe) and change to XDebug, remove drive letter
 * Enable CLI: Preferences > PHP > Debug; (XDebug, Enable CLI Debug)
 * Add USB/WebIS.userlibrarys (once)
 * Add WebIS project reference

## Reinstall Software ##
 * Reboot
 * Move the `\WebIS\workspace` directory to another location.
 * Delete `\WebIS`
 * Verify that `\WebIS` is gone
 * Run the `.exe` download and extract to C:\ as per the above `Download` section.
 * Move the workspace folder back to the `\WebDSS` folder
