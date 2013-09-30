LightBright Child Theme
=========================

This is a good example of a company that has done a good job of 
designing their Templates for extension.  This is an example of 
a child extension.  

In this example, the plugin gets bundled using [Maven](https://maven.apache.org)
and the assembly plugin.  This guarantees that everything is up to date and that packaging is 
consistent.  You are required to have this installed prior to executing a build.  Maven is 
a Java (primarily) build tool and is a little more complicated than it could be, and I 
suggest checking out my [Sky Child Theme](https://github.com/jlgrock/SkyChild).
To execute this, just type "mvn clean install" from the root project directory. The zip file
will be created and placed in the "<project>/target" directory.

Theme development is described by reading the article at 
http://codex.wordpress.org Theme_Development.

Child Theme development is described at http://codex.wordpress.org/Child_Themes. You
can also find a simple example that just modifies the css by following the 
instructions at http://op111.net/53/.

This child theme extension is meant to be an example for others writing child themes and for folks 
that are extending themes from https://www.elegantthemes.com.

The final product for the website is at http://www.justinleegrant.com.
