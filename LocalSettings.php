<?php
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowExceptionDetails = true;

#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "QuABaseBD - Quality Architecture at Scale for Big Data";
$wgMetaNamespace = "QuABase";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/mediawiki";
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "../images/4/48/BigData.png";
## This is weird because the webserver document root is /var/www/html, but mediawiki is installed in /var/www.

## UPO means: this is also a user preference option

$wgEnableEmail      = false;
$wgEnableUserEmail  = false; # UPO
$wgSMTP = array(
 'host'     => "smtp.example.com",
 'IDHost'   => "example.com",
 'port'     => 25,
 'auth'     => false,
 'username' => "empty",
 'password' => "empty"
);

$wgEmergencyContact = "somebody@example.com";
$wgPasswordSender   = "somebody@example.com";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "wikidb";
$wgDBuser           = "your-wikidb-user";
$wgDBpassword       = "your-wikidb-password";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = false;
$wgUseImageMagick = false;
$wgImageMagickConvertCommand = "path-to-converter";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of ./languages/Language(.*).php
$wgLanguageCode = "en";

$wgSecretKey = "d454222c3b17e37027e602a887e91d29967d5a86943474c13ada1cd01ae4ec68";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "a5fbfd4d2ba1eb3a";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
#$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = "Project:Copyright"; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "Project:Copyright";
$wgRightsText = "the QuABaseBD copyright";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

unset( $wgFooterIcons['copyright'] );

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";



# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;


# End of automatically generated settings.
# Add more configuration options below.

# include_once( "$IP/extensions/PageSchemas/PageSchemas.php" )

require_once( "$IP/extensions/Validator/Validator.php" ); 
require_once "$IP/extensions/BreadCrumbs/BreadCrumbs.php";
require_once "$IP/extensions/WikiEditor/WikiEditor.php";
require_once "$IP/extensions/ExtensionInstaller/ExtensionInstaller.php";
require_once("$IP/extensions/GraphViz/GraphViz.php"); //includes the extension<br />
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php");
$wgGraphVizSettings->execPath = "/usr/bin/"; //Path to the Graphviz Installation
$srfgFormats[] = 'graph';

#ConfirmAccount extension
#require_once "$IP/extensions/ConfirmAccount/ConfirmAccount.php";
$wgConfirmAccountContact = "someone@example.com";
$wgConfirmAccountSaveInfo = false;
# set up short registration page
$wgConfirmAccountRequestFormItems = array(
        'UserName'        => array( 'enabled' => true ),
        'RealName'        => array( 'enabled' => false ),
        'Biography'       => array( 'enabled' => false, 'minWords' => 50 ),
        'AreasOfInterest' => array( 'enabled' => false ),
        'CV'              => array( 'enabled' => false ),
        'Notes'           => array( 'enabled' => true ),
        'Links'           => array( 'enabled' => false ),
        'TermsOfService'  => array( 'enabled' => false ),
 );
$wgWhitelistRead = array( 'Special:RequestAccount');

# Enables use of WikiEditor by default but still allow users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
 
# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;
 
# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;
include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" ); 

########################################
# Change this path to your hostname
enableSemantics('quabase.sei.cmu.edu');
########################################

include_once( "$IP/extensions/SemanticForms/SemanticForms.php" );
include_once( "$IP/extensions/SemanticCompoundQueries/SemanticCompoundQueries.php" );
include_once("$IP/extensions/SemanticDrilldown/SemanticDrilldown.php");
require_once( "$IP/extensions/SemanticResultFormats/SemanticResultFormats.php" );
require_once "$IP/extensions/HeaderTabs/HeaderTabs.php";
# require_once ( "$IP/extensions/HeaderTabs/HeaderTabs.php ) ;
$srfgFormats[] = 'graph';

// # Set up user rights
// # Target configuration: anonymous users cannot read or edit - effectively locks them out.
// # Disable for everyone
// $wgGroupPermissions['*']['createtalk']    = false;
// $wgGroupPermissions['*']['createaccount']    = false;
// $wgGroupPermissions['*']['createpage']    = false;
// $wgGroupPermissions['*']['edit']    = false;
// $wgGroupPermissions['*']['read']    = false;
// $wgGroupPermissions['*']['writeapi']    = false;
// $wgGroupPermissions['*']['viewedittab']    = false;
// $wgGroupPermissions['sysop']['viewedittab'] = true;
// 
// # Disable edit and create for 'user'
// $wgGroupPermissions['user']['edit'] = false;
// $wgGroupPermissions['user']['createpage'] = false;
// 
// # Turn it back on for sysop and bureaucrat groups
// $wgGroupPermissions['sysop']['edit'] = true;
// $wgGroupPermissions['sysop']['createpage'] = true;
// $wgGroupPermissions['bureaucrat']['edit'] = true;
// $wgGroupPermissions['bureaucrat']['createpage'] = true;
// 
// # copied defaults for 'user' group from DefaultSettings.php. All were originally "true".
// # changed 'user' to 'guest', and set most to "false".
// $wgGroupPermissions['guest']['move'] = false;
// $wgGroupPermissions['guest']['move-subpages'] = false;
// $wgGroupPermissions['guest']['move-rootuserpages'] = false; // can move root userpages
// $wgGroupPermissions['guest']['movefile'] = false;
// $wgGroupPermissions['guest']['read'] = true;
// $wgGroupPermissions['guest']['edit'] = false;
// $wgGroupPermissions['guest']['createpage'] = false;
// $wgGroupPermissions['guest']['createtalk'] = true;
// $wgGroupPermissions['guest']['writeapi'] = false;
// $wgGroupPermissions['guest']['upload'] = false;
// $wgGroupPermissions['guest']['reupload'] = false;
// $wgGroupPermissions['guest']['reupload-shared'] = false;
// $wgGroupPermissions['guest']['minoredit'] = false;
// $wgGroupPermissions['guest']['purge'] = false; // can use ?action=purge without clicking "ok"
// $wgGroupPermissions['guest']['sendemail'] = false;

# New User Rights Section
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['sysop']['edit'] = true;

$wgGroupPermissions['*']['createaccount'] = false;

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['writeapi'] = false;
$wgGroupPermissions['*']['viewedittab'] = false;

$wgGroupPermissions['user']['createaccount'] = false;
$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['user']['writeapi'] = false;
$wgGroupPermissions['user']['viewedittab'] = false;

$wgGroupPermissions['sysop']['createpage'] = true;




