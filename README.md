# QuABaseBD
John Klein (jklein@sei.cmu.edu)
## Introduction

You should find QuABaseBD useful if you have questions such as

* What features does {your favorite} database have?
* I'd like to compare the features of databaseA and databaseB to see which might be best suited for my data modeling requirements?
* How do I best use databases that only support eventual consistency to build my application and achieve the data consistency I require?
* I'd like to understand if the database and design approaches proposed in these responses to an RFP are compatible and make sense for my application?
* What software design approaches should I consider to make my applications scalable? Which databases are best suited to support each design approach? What are the trade-offs of each approach?
* Which databases are designed for building applications with very high availability?

This is an initial release of QuABaseBD with that only contains detailed information about a relatively small number of NoSQL and NewSQL databases. It also focuses on an initial set of software design principles related to consistency, availability, scalability, performance and security. As you navigate and query knowledge base, you can follow the relationships that link design principles to database technology principles simply by following the links between the generated pages.

This wiki has initially been developed by Ian Gorton and John Klein at the Software Engineering Institute at Carnegie Mellon University. Publications related to QuABaseBD include

* I\. Gorton, J. Klein, and A. Nurgaliev, “Architecture Knowledge for Evaluating Scalable Databases,” in Proc. 12th Working IEEE/IFIP Conf. on Software Architecture (WICSA 2015), Montreal, Canada, 2015. doi: 10.1109/WICSA.2015.26.
* J\. Klein and I. Gorton, “Design Assistant for NoSQL Technology Selection,” in Proc. 1st Int. Workshop on the Future of Software Architecture Design Assistants (FoSADA'15), Montreal, Canada, 2015. doi: 10.1145/2751491.2751494.

## We know that it is unusual to distribute a wiki in this way
Distributing a wiki the way that we are doing here is not typical, but since QuABaseBD is principally an academic contribution, we are distributing the "source code" to allow others to create their own instance and extend it as you wish.

That said, the process for creating your own instance is not trivial - we are not redistributing Mediawiki or the required extensions. We are providing instructions below, but they assume a bit of proficiency with Mediawiki and MySQL.

You can see our running instance at http://quabase.sei.cmu.edu

# Installation
## Prerequisites
QuABaseBD runs on [Mediawiki](http://www.mediawiki.org) with a number of required extensions. You will need to install Mediawiki and a number of extensions. Note that when installing the extensions, you may be directed to edit Mediawiki's LocalSettings.php file - you do not need to do that, because you will be overwriting that with the QuABaseBD customized version of LocalSettings.php.

### Mediawiki
```
Product     Version
MediaWiki   1.21.2
PHP         5.3.3 (apache2handler)
MySQL       5.1.73
```
### Semantic extensions

* Semantic Compound Queries (Version 0.3.4)	
* Semantic Drilldown (Version 1.3)
* Semantic Forms (Version 2.6)	
* Semantic MediaWiki (Version 1.8.0.5)
* Semantic Result Formats (Version 1.9 alpha)	

### Parser hooks

* Graphviz (Version 0.9.1 alpha)
* Header Tabs (Version 0.9.3)
* ParserFunctions (Version 1.5.1)

### Other

* BreadCrumbs (Version 0.3.2)
* Extension Installer (Version 0.2.2)
* Validator (Version 0.5.1)
* WikiEditor (Version 0.3.1)

## Create and configure a database in MySQL
Create a database named "wikidb".

Create a MySQL user, and grant that user read and write access to the database wikidb.

Load the wikidb database from the quabasebd.sql file here, using a command like:

`mysql -u your-wikidb-username -p wikidb < quabasebd.sql`

## Replace Mediawiki's *LocalSettings.php*
Replace Mediawiki's default LocalSettings.php file with the file from here. 

Find the call to "enableSemantics" (around line 190) and replace the hostname with your complete hostname.

Set $wgDBuser and $wgDBpassword to the MySQL username and password that you set up for the wikidb database.


## Start using the wiki
Point your browser to the Mediawiki instance. Log in (upper right of the page) using these credentials:

```
username = quabase-admin
password = changeme
```

This account is set up as a member of the "bureaucrat" and "administrator" groups.

Change the password for the quabase-admin user by clicking on the "Preferences" link in the upper right of the page, and then finding the "Change Password" link. Also, fill in your real name and email address.

The default QuABaseBD wiki configuration restricts user account creation. See [here](https://www.mediawiki.org/wiki/Manual:Preventing_access#Restrict_account_creation) for information.


