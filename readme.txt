=== WP Toolbox ===
Contributors: adrianfraguela
Donate link: http://adrianfraguela.com/
Tags: toolbox, developer toolbox, developers, classes, tools
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.3.1
License: MIT
License URI: http://opensource.org/licenses/MIT

WordPress plugin to give theme developers a toolbox to use to make their development faster.

== Description ==

WordPress plugin to give theme developers a toolbox to use to make their development faster.

See [other notes](http://wordpress.org/plugins/wp-toolbox/other_notes/) for usage.

== Methods ==
The WP_Toolbox plugin provides a nice and easy set of tools to help you code your WordPress templates a lot faster. 

= LimitString($string, $count, $charWord, $ellipsis) =
Strip a string by X words or characters.

**Usage:**
`WP_Toolbox::LimitString('my random string of strings', 10, 'char', '&raquo;');`

**$string** *string* Your string

**$count** *integer* The number of words or characters you want to return

**$charWord** *string* Options: char or word

**$ellipsis** *string* What to append at the end when we chop your string

= ContentByID($id, $stripped) =
Get the content of a desired post by the ID

**Usage**
`WP_Toolbox::ContentByID(62, true);`

**$id** *integer* - The ID of the post you want to get

**$stripped** *boolean* - Whether or not to strip all the tags from the content

= RandomPost($post_type) =
Return a random post

**Usage**
To get a random post 
`WP_Toolbox::RandomPost();`

To get the title of a random post
`WP_Toolbox::RandomPost()->post_title;`

Other options that can be pulled through can be [found here](http://codex.wordpress.org/Class_Reference/WP_Post)

= String2Hyphens($string) =
Returns a string with spaces hyphenated.

**Usage**
`WP_Toolbox::String2Hyphens("This is my amazing string that I need hyphenating");`

== Installation ==
Download a [ZIP](https://github.com/afraguela/toolbox/archive/master.zip) and upload it to your WordPress installation.

== Frequently Asked Questions ==
= I want a new feature, how do I do it? =
Easy, use the [support forum](http://wordpress.org/support/plugin/wp-toolbox) to ask for new features. Title the post with [Feature Request].

== Development Roadmap ==
The following is a list of additions to the WP-Toolbox plugin that I will be working on in the near future

*	**Distant Future** - Allow the creation of forms
*	**Soon** - Return a list of custom post types
*	**Soon** - Return a random string
*	**Soon** - Return current user (name, email etc)

== Changelog ==

= 1.3 =
* Added new method to the plugin called Spaces2Hyphens

= 1.2 =
* I killed it somehow

= 1.1 =
* Added new method to the plugin called RandomPost

= 1 =
* First ever version of the plugin! Fireworks went off!

== Upgrade Notice ==

= 1.3 =
* Added new method to the plugin called Spaces2Hyphens. Name says it all!

= 1.2 =
* I killed it somehow

= 1.1 =
* Added new method to the plugin called RandomPost - Go grab some random posts!
