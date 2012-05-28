PYROCMS BOOTSTRAP
===================

Twitter's bootstrap (http://twitter.github.com/bootstrap) in Pyrocms theme form. Forked and ported originally from 320Press's wordpress version (https://github.com/320press/wordpress-bootstrap). Visit their repo for additional info. 

DEVELOPMENT
___________

This project is in active development.  Only limited features exist from the original theme by 320press at this time. Watch this project on Github to keep up with the changes.

Current Conversion Details
______________________

    - Basic Core
    - Pages
    - Comments on pages
    - Left Sidebar
    - Bootswatch

FEATURES COMPARATIVELY
______________________

Some features are either being added/removed/enhanced during the port based on Wordpress's and PyroCms's capabilities. Below is a breakdown at current development.

Features Converted
__________________

    - Responsive
    - Require Registration/Log In To Comment (PyroCms in itself does not provide this ability, but it is added as a theme option).
    - Bootswatch - themes are preloaded, without the ability to fetch an updated list later. Working on solution for this.
    - Hero Box (enhanced - only on pages right now). See setup below.

Features Removed
________________

    - Bones Framework

SETUP
_____

Hero Box
________

You can add a Hero box to any page by adding a chunk named 'hero-unit' and moving it to the top of the page. Any content in the chunk will be displayed in the Hero box.
