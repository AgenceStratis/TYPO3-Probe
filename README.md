![TYPO3](http://typo3.org/typo3conf/ext/t3org_template/i/typo3-logo.png)

Stratis TYPO3 Probe
===========

![Travis-CI Build Status](https://travis-ci.org/AgenceStratis/TYPO3-Probe.png?branch=master)

Probe is a small and handy script to easily determine if your server full-fills requirements to run TYPO3 CMS 8.7; originally created by <a href="https://twitter.com/7elix" target="_blank">Felix Kopp</a>. Inspired by <a href="https://github.com/activecollab/activecollab-probe/" target="_blank">activeCollab Probe</a>.

Installation Instructions
-----------

Depending on your setup you can upload TYPO3-Probe with any file transfer or download the files from within your remote server. After installation you can run TYPO3-Probe in your browser or on command line. Please connect to your remote server and navigation to web root directory to install TYPO3-Probe.

### Via Composer

Recommended when you know and have composer. Please make sure, composer is installed on remote server (https://getcomposer.org/doc/00-intro.md). On command line of your remote server type:

	composer create-project phorax/typo3-probe typo3-probe

This results in TYPO3-Probe script being installed into the directory typo3-probe on your server.

### Via file transfer

a) Download ZIP archive locally
	<a href="https://github.com/7elix/TYPO3-Probe/releases">https://github.com/7elix/TYPO3-Probe/releases</a>.

b) Extract .ZIP file locally ("typo3-probe")

c) Upload extracted folder to remote server


Run TYPO3-Probe
-----------

### In web browser

The uploaded files can be opened in your web browser. Open server url http://*server-address*/typo3-probe/typo3-probe.php in your web browser and follow instructions.

### On remote shell

Commect to server shell and navigation to web root directory. Run the .php file with your php cli command:

	php typo3-probe/typo3-probe.php
	
Depending on your server confiuration you might have to call "php5" or "php_cli" command.

Remove
------------

Please *delete* the files from your remote server afterwards!
This is very important as intruders might use the disclosed information for attacks.

How to contribute
------------

Please report issues with this probe script at Github issues:
<a href="https://github.com/7elix/TYPO3-Probe/issues" target="_blank">https://github.com/7elix/TYPO3-Probe/issues</a>
