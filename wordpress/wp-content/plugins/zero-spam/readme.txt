=== WordPress Zero Spam ===
Contributors: bmarshall511, afragen, tangrufus, leewillis77, macbookandrew, jaredatch, karpstrucking, thiagolcks, geekstreetwp
Donate link: https://www.gittip.com/bmarshall511/
Tags: comments, spam, antispam, anti-spam, comment spam, spambot, spammer, spam free, spam blocker, registration spam
Requires at least: 3.0.0
Tested up to: 4.6.1
Stable tag: 3.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Zero Spam makes blocking spam comments a cinch. Install, activate and enjoy a spam-free site. Even supports third-party plugins!

== Description ==

**Why should your users prove that they're humans by filling out captchas? Let bots prove they're not bots with the <a href="http://www.benmarshall.me/wordpress-zero-spam-plugin/" target="_blank">WordPress Zero Spam plugin</a>.**

WordPress Zero Spam blocks registration spam and spam in comments automatically without any additional config or setup. Just install, activate, and enjoy a spam-free site.

Zero Spam was initially built based on the work by <a href="http://davidwalsh.name/wordpress-comment-spam" target="_blank">David Walsh</a>.

Major features in WordPress Zero Spam include:

* **No captcha**, spam isn't a users' problem
* **No moderation queues**, spam isn't a administrators' problem
* **Blocks 99.9% of spam registrations & comments**
* **Supports caching plugins** to help provide great performance
* **Blocks spammy IPs** from ever seeing your site
* **Extend the plugin** with action hooks
* **Theme & plugin integration** for any form on your site
* **Optional logging**, so you can see who's trying to spam
* **Advanced settings** for complete control

= Supported Plugins =

* Contact Form 7
* Gravity Form
* Ninja Forms
* BuddyPress
* WPForms

<em>**Note:** This plugin does not work with Jetpack Comments. For more information, see https://wordpress.org/support/topic/incompatible-with-jetpack-comments.</em>

**Languages:** English

If you have suggestions for a new add-on, feel free to email me at me@benmarshall.me. Want regular updates? <a href="https://twitter.com/bmarshall0511">Follow me on Twitter</a> or <a href="http://www.benmarshall.me" target="_blank">visit my blog</a>.

== Installation ==

= Plugin Installation =

1. Upload the `zero-spam` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

= Theme Integration =

You can integrate WordPress Zero Spam with any theme or plugin. Just add the class `zerospam` to a `form` element and the following at the beginning of your validation function:

    <?php
    if ( zerospam_is_valid() ) {
      // Valid form submission.
    } else {
      // Invalid form submission.
      zerospam_log_spam( 'My Custom Form', 'http://www.myurl.com/custom-form' );
    }

For more information and a full list of helpers you can use if your theme or plugin, see the `helpers.php` file.

== Frequently Asked Questions ==

= Is JavaScript required for this plugin to work? =

Yes, that's what does the magic and keeps spam bots out.

= I keep getting 'There was a problem processing your comment.' =

Be sure JavaScript is enabled and there are no JS errors.

= Can I extend the plugin with action hooks? =

Yes, see below:

* `zero_spam_found_spam_registration` - Runs after a spam registration is detected
* `zero_spam_found_spam_comment` - Runs after a spam comment is detected
* `zero_spam_found_spam_cf7_form_submission` - Runs after a spam Contact Form 7 form submission is detected
* `zero_spam_found_spam_gf_form_submission` - Runs after a spam Gravity Form submission is detected
* `zero_spam_ip_blocked` - Runs after a blocked IP attempts to visit the site
* `zero_spam_found_spam_buddypress_registration` - Runs when a BuddyPress spam registration is detected
* `zero_spam_found_spam_nf_form_submission` - Runs when a spam Ninja Forms submission is detected
* `zero_spam_found_spam_wpf_form_submission` - Runs when a spam WPForms submission is detected

= Does this plugin support Contact Form 7 forms? =

Yes! Thanks to @leewillis77.

= Does this plugin support Gravity Forms forms? =

Yes! Thanks to @shazahm1.

= Does this plugin support BuddyPress? =

Yes!

= Does this plugin support NinjaForms? =

Yes!

= Does this plugin support WPForms? =

Yes! Thanks to @jaredatch.

= Does this plugin work with caching plugins like W3 Total Cache? =

Yes! Thanks to @shazahm1.

= Does this plugin work with multisite? =

Yes! Thanks to @afragen. When using with multisite the plugin may be network activated or used individual sub sites.

= Can I blacklist spammy IPs to CloudFlare? =

Yes! Install [Sunny](https://wphuman.com/go/sunny/) and follow this [guide](https://wphuman.com/blocking-spam-zero-spam/).

== Screenshots ==

== Changelog ==

= v3.0.6 (December 27, 2016) =
* [bug] Gravity Forms submission fix (https://github.com/bmarshall511/wordpress-zero-spam/pull/140).

= v3.0.5 (December 23, 2016) =
* [bug] Gravity Forms submission fix.

= v3.0.4 (November 24, 2016) =
* [bug] Fixed IP location lookup issue.
* [improvement] Updated the Grunt development tasks.

= v3.0.3 (November 23, 2016) =
* [bug] Fixed issue with settings not getting saved (https://wordpress.org/support/topic/can-unselect-default-options/).
* [bug] Fixed PHP notice on Spammer Log page.
* [bug] Removed outdated CloudFlare instructions.
* [improvement] Made the JS file version dynamic.

= 3.0.2 =
* Fixed fatal error.

= 3.0.1 =
* Added the default options when the plugin is activated.

= 3.0.0 =
* Lots of updates & fixes! Improved code documentation to help promote contributions.

= 2.2.1 =
* Fixed uninstall issue, thanks @thiagolcks (https://github.com/bmarshall511/wordpress-zero-spam/pull/139)

= 2.2.0 =
* Fixed security issue, thanks @thiagolcks (https://github.com/bmarshall511/wordpress-zero-spam/pull/138)

= 2.1.2 =
* Fixed issue with Gravity Forms not working, thanks @karpstrucking & @jaredatch (https://github.com/bmarshall511/wordpress-zero-spam/issues/132)
* Updated the repo link on the admin page (https://github.com/bmarshall511/wordpress-zero-spam/issues/124)

= 2.1.1 =
* Minor updates

= 2.1.0 =
* Added support for WPForms (https://github.com/bmarshall511/wordpress-zero-spam/issues/129)

= 2.0.2 =
* Added the 'contactform' id to fix issue with valid comments not getting through (https://wordpress.org/support/topic/false-positives-6)
* Updated readme file

= 2.0.1 =
* Updates to the readme file
* Fixed Contact Form issue forcing users to submit twice (https://github.com/bmarshall511/wordpress-zero-spam/issues/118)

= 2.0.0 =
* Added CloudFlare instructions (https://github.com/bmarshall511/wordpress-zero-spam/pull/107)
* Added ability to integrate with any theme or plugin (https://github.com/bmarshall511/wordpress-zero-spam/issues/116)
* Added support for Ninja Forms (https://github.com/bmarshall511/wordpress-zero-spam/issues/114)
* Complete rewrite of plugin code & structure
* Added plugin icon

= 1.6.0 =
* Made minor modification on how spam comments are detected. Tested & verified working as expected.
* Changed how Gravity Forms spam is detected. Needs to be tested & verified.

= 1.5.4 =
* Fixed issue with CF7 validation in the latest version - 4.1 (https://wordpress.org/support/topic/contact-form-7-version-41-no-longer-prevents-spam-using-wp-zero-spam?replies=4)

= 1.5.3 =
* Fixed Gravity Form issues (https://github.com/bmarshall511/wordpress-zero-spam/issues/101)

= 1.5.2 =
* Added IP location service (https://github.com/bmarshall511/wordpress-zero-spam/issues/84)
* Improved pagination (https://github.com/bmarshall511/wordpress-zero-spam/issues/91)
* Made date/times match site's WP time, not servers (https://github.com/bmarshall511/wordpress-zero-spam/issues/89)
* Removed the banner image to boost performance (https://github.com/bmarshall511/wordpress-zero-spam/issues/86)
* Enhancements to the admin JS to boost performance
* Works with Multisite as network activated or per sub site (https://github.com/bmarshall511/wordpress-zero-spam/issues/85)
* Added BuddyPress support (https://github.com/bmarshall511/wordpress-zero-spam/issues/61)

= 1.5.1 =
* Added missing code documentation and fixed typos (https://github.com/bmarshall511/wordpress-zero-spam/issues/64)
* Fixed issue with settings not getting initially saved when the plugin is activated. (https://github.com/bmarshall511/wordpress-zero-spam/issues/69)
* Added ability to auto block spam IPs (https://github.com/bmarshall511/wordpress-zero-spam/issues/71)
* Added paging to spammer log and blocked IPs (https://github.com/bmarshall511/wordpress-zero-spam/issues/60)
* Added additional stats and graphs (https://github.com/bmarshall511/wordpress-zero-spam/issues/75)
* Fixed issue with comment moderators not being able to reply to comments (https://github.com/bmarshall511/wordpress-zero-spam/issues/74)
* Fix issue with DB errors when first activating plugin (https://github.com/bmarshall511/wordpress-zero-spam/issues/80)

= 1.5.0 =
* Switched to using a nonce to validate form submissions that support WordPress Zero Spam
* Added Zero Spam plugin settings page for advanced control
* Fix for for non-logged in users (https://github.com/bmarshall511/wordpress-zero-spam/pull/27, thanks @afragen)
* Added blank index.php files to prevent directory browsing (https://github.com/bmarshall511/wordpress-zero-spam/pull/24, thanks @TangRufus)
* Added uninstall.php (https://github.com/bmarshall511/wordpress-zero-spam/pull/23, thanks @TangRufus)
* Addded support for GitHub Updater plugin (https://github.com/bmarshall511/wordpress-zero-spam/pull/21, thanks @afragen)
* Added support for Contact Form 7 form submissions (https://github.com/bmarshall511/wordpress-zero-spam/pull/26, thanks @leewillis77)
* Added ability to log spam detections
* Fix for warnings cause by default settings not being set before actions run (https://github.com/bmarshall511/wordpress-zero-spam/pull/31, thanks @leewillis77)
* Installed Compass (http://compass-style.org/)
* Added support for Gravity Forms
* Fixed potential issue with sites that use caching plugins
* Fixed minor typos (thnaks @macbookandrew)

= 1.4.0 =
* Added `zero_spam_found_spam_comment` and `zero_spam_found_spam_registration` action hooks (thanks @tangrufus)
* Minor updates to the readme file

= 1.3.1 - 1.3.3 =
* Minor fixes to WP SVN repo

= 1.3.0 =
* Removed Grunt creation of the trunk directory
* Added spam detection script to registration form

= 1.2.1 =
* Fixed some typos in the readme.txt file

= 1.2.0 =
* Removed testing for core function testing
* Fix for adding comments from admin (thanks @afragen)
* Removed unneeded WP svn trunk and tags folders from the git repo (thanks @afragen)

= 1.1.0 =
* Updated theme documentation.
* WordPress generator meta tag removed to help hide WordPress sites from spambots.

= 1.0.0 =
* Initial release.

== Credits ==
* Thanks to [David Walsh](http://davidwalsh.name) [@davidwalshblog](https://twitter.com/davidwalshblog) for the inspiration behind this plugin.

== Contributors ==
* [Ben Marshall](https://github.com/bmarshall511)
* [Thiago Locks](https://github.com/thiagolcks)
* [Andy Fragen](https://github.com/afragen)
* [Tang Rufus](https://github.com/TangRufus)
* [Lee Willis](https://github.com/leewillis77)
* [Andrew Minion](https://github.com/macbookandrew)
* [Jared Atchison](https://github.com/jaredatch)
* [Lucas Karpiuk](https://github.com/karpstrucking)
* [Russell Aaron](https://github.com/KrashKartMedia)
