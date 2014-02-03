# WebIS-USBv7 #

## Packages ##

### Portable Apps ###
 * PortableApps Platform (http://portableapps.com/download)
 * Applications (http://portableapps.com/apps)> XAMPP lite (XAMPP Portable Lite 5.4 7z) , XAMPP Launcher, Java Portable, 7-zip, Firefox, Notepad++, Sumatra PDF

### Eclipse ###
 * http://www.eclipse.org 
   * Download > Eclipse Standard (Kepler 4.3.1 Windows 32 bit)

### MySQL Java Connector/J ###
 * http://www.mysql.com/products/connector/j/ (platform independent .zip)

### Redis ###
 * redis https://github.com/MSOpenTech/redis
 * https://github.com/MSOpenTech/redis/raw/2.6/bin/release/redisbin.zip
 
### COIN-OR ###
 * Optimization Services (http://www.coin-or.org/download/binary/OS/) OS-2.4.1 win32

### HTML Tidy (html5) ###
 * https://github.com/w3c/tidy-html5/
 * Win32 Binary http://tidybatchfiles.info/tidy.zip
 
### Offline Documentation ###
 * Mysql Documentation http://dev.mysql.com/doc/ (http://downloads.mysql.com/docs/refman-5.5-en.eclipse.zip)
 * PHP Documentation http://www.php.net/get/php_manual_en.tar.gz/from/a/mirror

## Unpack and Install ##
 * Install Portableapps "Platform Setup" to `\WebIS` and do not start.
 * Install Portableapps Applications to `\WebIS\PortableApps`
   * Paste location (C:\WebIS\PortableApps\) to correct keeping app name.
   * Install Java to `\WebIS\PortableApps\CommonFiles\Java`
 * Use 7-zip to extract the following files, do not overwrite files (no to all)
   * extract `xamplite*.exe` to `\WebIS\PortableApps\XAMPP\App`
   * extract `eclipse*.zip` to `\WebIS\PortableApps`
   * extract mysql connector to `\WebIS\PortableApps\eclipse`
   * extract Mysql Documentation (refman-5.5) to `\WebIS\PortableApps\eclipse\plugins`
   * extract PHP Documentation plugin (by Dr. Timothy Middelkoop) `php-manual-54-en-plugin.zip` to `\WebIS\PortableApps\eclipse\plugins`
   * uncompress PHP Documentation `php_manual_en.tar.gz`
   * extract PHP Documentation `php_manual_en.tar` to `\WebIS\PortableApps\eclipse\plugins\net.php.manual_54.en`

### Clean Version ###
 * 7-zip sfx `\WebIS` as clean version.
   
## Patch ##
 * patch `\WebIS\PortableApps\eclipse\eclipse.ini` (before --launcher.appendVmargs)

```
-data
\WebIS\workspace
-vm
\WebIS\PortableApps\CommonFiles\Java\bin\javaw
```
 * Make a copy of `eclipse.ini` to `eclipse.bak`
 
 * copy mysql jdbc driver to default location and name (using cmd.exe, note name)

```
cd \WebIS\PortableApps\eclipse\mysql-connector-java-5.1.*
copy mysql-connector-java-5.1.26-bin.jar ..\mysql-connector-java-5.1.0-bin.jar
```
 * run xampp control panel setup to correct paths

```
cd \WebIS\PortableApps\XAMPP\App\xampp
\WebIS\PortableApps\XAMPP\App\xampp\setup_xampp.bat
```

  * patch (append and edit) `\WebIS\PortableApps\XAMPP\App\xampp\apache\conf\httpd.conf`

```
## WebIS config
## /webis/portableapps/xampp/app/xampp/apache/conf/httpd.conf
## comment out (top) Listen 80
## comment out (bottom) Include http-ssl.conf
## append the following
Listen 127.0.0.1:8000
ServerName localhost:8000
DocumentRoot "/webis/workspace"
<Directory "/webis/workspace">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Order allow,deny
    Allow from all
    Require all granted
</Directory>

## Xampp installation
Alias /xampp /webis/portableapps/xampp/app/xampp/htdocs/xampp

```
 * patch (edit) `\WebIS\PortableApps\XAMPP\App\xampp\php\php.ini`

```
## uncomment in [PHP]
default_charset = "UTF-8"
## update include path [PHP]
include_path = ".;\WebIS\PortableApps\XAMPP\App\xampp\php\PEAR;\WebIS\workspace;\WebIS\workspace\WebIS"
```
 * patch (append) `\WebIS\PortableApps\XAMPP\App\xampp\mysql\bin\my.ini`

```
## WebIS config
## /webis/portableapps/xampp/app/xampp/mysql/bin/my.ini
## local configuration overrides
[mysqld]
skip-character-set-client-handshake
character-set-server=utf8
collation-server=utf8_unicode_ci 
bind-address=127.0.0.1

```
 * generate php manuals `toc.xml` by running `toc.php` in php manual plugin directory

```
cd \WebIS\PortableApps\eclipse\plugins\net.php.manual_*.en
\WebIS\PortableApps\XAMPP\App\xampp\php\php.exe toc.php
```  

### Bin ###
 * Unzip bin/OSSolverService.exe to \WebIS\bin\
 * Unzip tidy.exe in tidy.zip to \WebIS\bin
 * Unzip redis-server.exe redis-cli.exe in redisbin.zip to \WebIS\bin
 
### Firefox ###
 * copy `bookmarks.html` to `\WebIS\PortableApps\FirefoxPortable\App\DefaultData\profile`

## Eclipse Packages ##
 * Install eclipse packages with eclipse (do not use portable apps to launch)
 * Help -> install new software -> work with: Kepler ->
   * Database Development
   * Web -> Eclipse Web Development Tools
   * Web -> Eclipse XML Editors and Tools
   * Web -> PHP Development Tools (PDT)
   * Modeling -> Papyrus UML
   * Modeling -> UML2 Extender SDK
 * Remove `\WebIS\workspace\.metadata`
 * Optional clean cache for eclipse (eclipse.exe -clean)
 * Optional remove `eclipsec.exe` or rename to `eclipsec.exe.no`

## Compress and make SFX ##
 * use 7-zip 
   * archive format: 7z
   * compression level: Ultra
   * Create SFX archive.
 
## Notes ##
 * Debugger in XAMPP
  * Zend debugger will not work because zend does not supply a TS version of ZendDebugger.dll
  * XDebug Configuration in php.ini; use `php_xdebug.dll` found in full version.

## Versions ##

```
3c0ae720610947b09dd5c6442c694570  WebIS-USB-v7.exe
```

```
7fa4441c55a838e0691328cebde21802  7-ZipPortable_9.20_Rev_2.paf.exe
3adf3057deb3fa4b1f05f0f5ac23817f  eclipse-standard-kepler-SR1-win32.zip
0b202c8ed0ce623a866d10c4cc2c4e69  FirefoxPortable_24.0_English.paf.exe
fcf1efd8f6c9d3dc80a16454a8f3a825  jPortable_7_Update_40_online.paf.exe
5d24e3dbf1f4dd52f13c8ca4f5acdabd  mysql-connector-java-5.1.26.zip
9831a708d98736f2f721982dd16342b5  NotepadPlusPlusPortable_6.4.5.paf.exe
65dbd98a3276ff7afce4878bc7670c62  OS-2.4.1-win32-msvc9.zip
5b8306a63e83f693fdad881cbe3583a8  php_manual_en.tar.gz
fd643fb358be933a5b60db99914175c7  php-manual-54-en-plugin.zip
1178fe18327311aa55e9734bca42fdc5  PortableApps.com_Platform_Setup_11.2.exe
6fba251f37a034f64bb9dd7875b9f124  refman-5.5-en.eclipse.zip
126d3c249dc0efdd9a0416678dbd5d7a  SumatraPDFPortable_2.3.2.paf.exe
2f15af4c895fd3fefd70fce3b221b0e5  tidy_firefox_win_0958.xpi
dcaa1180a8fcedc5c540290336ed0c63  XAMPP_1.6.paf.exe
a628c2a7b7c213db858583ad79153d59  xampp-portable-win32-1.8.2-2-VC9.7z
865044a38ad6cc4d3b6a3d88e34abd0f  tidy.zip
0fea54e97f0fd3096bb13aa2e1cbe21f  redisbin.zip
```
