=== Kumihimo ===
Contributors: fu94ma
Tags: search,full text search,elasticsearch,kuromoji
Requires at least: 3.5
Tested up to: 4.9.8
Stable tag: 1.0.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replace the WordPresss standard search with a Elasticsearch.

== Description ==

This plugin is a modification of "Fatastic ElasticSearch plugin". This plugin is NOT a simple drop-in, it is expected you have some understanding of what an Elasticsearch server is and how it works. The goals/features of this plugin are:

* Replace the WordPresss standard search with Elasticsearch.
* Ability to specify what data points should be indexed and what the relevancy of those points are.
* Fall back to WordPress standard search if Elasticsearch server is not responsive.
* Update Elasticsearch server when posts are removed/added/unpublished.
* Make "match query" selectable as search type.

== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click the 'Kumihimo' menu item and follow the instructions on each section to configure the plugin. (be sure to save on each section)
4. Select "Enable" on "Server Settings" when you are ready for it to go live. 

== Screenshots ==

1. Configure your ElasticServer settings
2. Determine what data you want to index
3. Alter the result scoring behavior
4. Wipe and re-index data is available if needed

== Changelog ==

= 1.0.2 =
* Suppress 'Illegal string offset' on the Content Indexing screen.

= 1.0.1 =
* Change the standard search from "or" to "and". 

= 1.0.0 =
* First release. In order to handle Japanese documents, I added an option to use "match query" for "Fantastic ElasticSearch plugin".
