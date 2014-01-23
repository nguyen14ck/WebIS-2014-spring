<html><body>
<h1>Download and Installation Instructions</h1>

<p>By downloading this software you agree to abide by all the Licenses contained within.

<p>For a list of software licenses, downloads, and installation instructions please refer to the Software section of this website.

<h2>Download</h2>

To install, Download the .exe file and run the .exe file. Extract it to the C:\ drive (the root folder) or any other drive/device. The WebIS folder will be created with all the software in that folder.

<h2>Starting Applications</h2>
Follow the following directions carefully and in order:
<ul>
 <li> Start PortableApps: Double click on <code>Start</code> in the <code>\WebIS</code> folder.
 <li> Click on the icon to access the menu system.
 <li> Start Eclipse
 <li> Start Firefox
 <li> Start XAMPP Control Panel
 <li> Start the Servers
 <ul>
  <li> Click <em>start</em> on Apache and Mysql. (unblock if firewall asks)
  <li> Do not click on the Svc check boxes, this will cause problems!
  <li> Wait for green <em>running</em> boxes
  <li> Click stop when you are done working
 </ul>
</ul>

<h2>Configure New Installs</h2>
<ul>
 <li> Use Firefox to configure the system.  It can remember your passwords.
 <li> Turn on bookmarks toolbar: Firefox (click triangle) &gt; Options (click triangle) &gt; Bookmarks toolbar
</ul>

<h3>Configure XAMPP</h3>
<ul>
 <li> Manage security using the security page(XAMPP Lite &gt; Security)
 <ul>
  <li> Change the security using the <a href="http://localhost:8000/security/xamppsecurity.php">http://localhost:8000/security/xamppsecurity.php</a> link
  <li> Change the MySQL root password (webis)
  <li> Check the check box indicating the location where the user credentials are stored.
  <li> Press "Password changing" button to save (do not save password in Firefox)
  <li> The user credentials can be found at the following location 
   <pre>\WebIS\PortableApps\XAMPP\App\xampplite\security\mysqlrootpasswd.txt</pre>
  <li> Protect the xampp directory with a user (webis) and password (webis)
  <li> Check the check box indicating the location where the user credentials are stored.
  <li> Press "Make safe the XAMPP directory" to set username and password (do not save password in Firefox)
  <li> The user credentials can be found at the following location 
   <pre>\WebIS\PortableApps\XAMPP\App\xampplite\security\xamppdirpasswd.txt</pre>
 </ul>
 <li> Create a default Database
 <ul>
  <li> Access XAMPP Lite &gt; Tools:phpmyadmin. The first password is the XAMPP Lite username (webis) and password (webis), let Firefox save the password if you wish.
  <li> Login to the phpmyadmin page with the database user (root) and password password (webis), let Firefox save the password if you wish.
  <li> Create a new database called database (MySQL localhost &gt; Databases &gt; Create New Database: database)
 </ul>
</ul>

<h3>Configure Eclipse</h3>
<ul>
 <li> Window &gt; Preferences &gt; (search) encoding 
 <ul>
  <li> select (General) Workspace &gt; Text file encoding &gt; Other &gt; UTF-8
  <li> select (Web) CSS Files &gt; change the Encoding to ISO 10646/Unicode(UTF-8) [press ii]
  <li> select (Web) HTML Files &gt; change the Encoding to ISO 10646/Unicode(UTF-8) [press ii]
  <li> click OK
 </ul>
 <li> Window &gt; Preferences &gt; PHP &gt; Code Style &gt; Code Templates &gt; Configure generated code and comments: Code &gt; html 4.01 frameset &gt; Edit &gt; Replace with following
 <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset=&quot;${encoding}&quot;&gt;
&lt;title&gt;Insert title here&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
${cursor}
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
</ul>

<h2>GitHub</h2>
<ul>
 <li> Window &gt; Preferences &gt; Team &gt; Git
 <ul>
  <li> Default Repository Folder &gt; Variable &gt; workspace_loc
  <li> Configuration &gt; User Settings &gt; Add Entry &gt; user.name and user.email
 </ul>
 <li> Signup for an account at GitHub (<a href="https://github.com">https://github.com</a>) DO NOT USE A SECURE PASSWORD, USE A NEW ONE.
 <li> Create a blank test repository with a README and License (Apache V2)
 <li> Files &gt; Import &gt; Git &gt; Projects From Git &gt; URI &gt; 
 <ul>
  <li> Enter https url from github (on right panel of repository), github username and password, and select store in secure store 
  <li> Select <code>master</code> branch and verify it is stored in your workspace
  <li> Configure Secure Store
  <li> New Project Wizzard (follow the prompt)
 </ul>
 <li> Clone the test repository (<a href="https://github.com/MiddelkoopT/Test.git">https://github.com/MiddelkoopT/Test.git</a>
</ul>

<h2>Reinstall Software</h2>
<ul>
 <li> Reboot
 <li> Move the <code>\WebIS\workspace</code> directory to another location.
 <li> Delete <code>\WebIS</code>
 <li> Verify that <code>\WebIS</code> is gone
 <li> Run the <em>.exe</em> download and extract to C:\ as per the above <em>Download</em> section.
 <li> Move the workspace folder back to the <code>\WebDSS</code> folder
</ul>
</body></html>

