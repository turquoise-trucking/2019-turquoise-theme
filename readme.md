Turquoise Theme for WordPress

Learn more about the custom theme for [Turquoise Trucking](https://turquoisetruck.com).



## Changelog

**2020-02-08**

* Updated *robots.txt* for better SEO
* Server-side activity
  * Fixed permissions via FileZilla where possible
    * Addressing Site Health updating problems
  * Changed database contact email addresses
    * Backed up databases locally before and after
* Code clean-up
  * Unchecked emoji preference 
  * Removed http://rpc.pingomatic.com/
    * We aren't hosting this WP site as a blog
* Stylesheet rewritten
  * Removed global code variables
    * WordPress thinks they are errors
  * Moved leftover styling code from pages to CSS
  * **Fixed spacing issue**
    * Added rule at end of stylesheet to add bottom margin



**2020-02-01**

* Full enqueued styles and scripts
  * CDN used for Bootcamp, jQuery, Font Awesome, popper.js
  * Spacing issues remain after enqueueing 
* Popper.js not functioning on *drivers page*
* Multiple changes to stylesheets and theme files
  * Check repo



**2020-01-25**

* Changed *header.php* title element due to duplicate company names. This leads to the title being the filename as I have no seen a method of changing a title independent of the URL is built. For example if the about page was given a title "About Us" it would make the URL /about_us/ or similar.

  * Old

    ```php+HTML
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    ```

  * New

    ```php+HTML
    <title><?php wp_title(); ?></title>
    ```

  

## Theme To do

Once bugs are addressed we have a few things to-do regarding the Turquoise theme and website.

### Add custom 404 page

Taking the heretofore unused maintenance page as a base a custom 404 to use in the event of a bad link. The [WordPress Codex](https://codex.wordpress.org/Creating_an_Error_404_Page) has a good example of one complete with the ability to send the admin an email each time a 404 page is produced. 

### Create template pages

This will take some time. Right now the WordPress pages contain raw HTML markup but I'd rather they used copy (text) instead. This could be accomplished by creating templates for how each page looks unique to their physical layout. Hopefully this can be accomplished through a core method or even a free plugin.  



## Bugs

Deployment took place in late 2019. Raw HTML markup was copy/pasted into WordPress pages with the rest of the static page being broken up as includes for the WordPress theme.

### Spacing issues abound

Bootstrap cards, card decks, and other block level elements appear to have little if any padding vertically. The navigation brand icon also has sizing issues and due to the nature of how I split the code is present on each WP page. Using a webpage inspect it appears that the reboot portion of Bootstrap rules is not being followed. 

First, I will clean up how I call Bootstrap from within WordPress by removing meta tags in the document head and enqueuing them through the WP engine. I will also enqueue CDNs instead of files.

**Update (2020-02-01) **Enqueuing has been accomplished. Some redundancies may have occurred such as enqueueing jQuery even though WordPress includes it. Other oddities, such as Font Awesome, had to be setup through a JavaScript kit and stylesheet due to custom ::after content styles not functioning when only the kit was called.

Even after fully enqueuing scripts and stylesheets spacing issues between block level elements remain. Is reboot styling through Bootcamp not being called?



## More about the theme

A quick writeup for the reason behind this theme. More or less, I lack WordPress experience so when it came to building a new website I designed one by hand instead of using WordPress Themes. Now, in order for the static website to be hosted it must be converted into a theme.

### Why the new theme?

The website and subsequent theme was made at the tail-end of 2019 thus the year. The former website theme has become stale. 

### How are static pages built?

Low-fi paper prototyping was used as a foundation prior to commiting to code. [Bootstrap](https://getbootstrap.com/) is a component library used to structurally build the website with help from other technology listed. [jQuery](https://jquery.com/) is used with it for JavaScript and [Font Awesome](https://fontawesome.com/) was used for icons.

[Bootstrap]: https://getbootstrap.com/
[Font Awesome]: https://fontawesome.com/
[jQuery]: https://jquery.com/

### How is the theme converted?

The gist for WordPress Themes is to make sure certain files are present with specific template code used for it to recognize the theme as legit. The process includes; following reference material for correct structure such as this [SitePoint article](https://www.sitepoint.com/bootstrap-wordpress-theme-integration/), making sure the default stylesheet contains comments allowing WordPress to allow the theme, splitting the code into PHP includes, [enqueuing style sheets and functions](https://developer.wordpress.org/reference/functions/wp_enqueue_style/), and copying remaining *body* code into individual pages through the WordPress Dashboard. In order for active navigation styles can be applied per page via Bootstrap the navigation bar must be in the page copy and modified per page not as an include.


### How will deployment be handled?

Themes can only be specified site-wide not per page so all code must be copied and in place before the theme can be applied. Once each page is made and checked for proper links a temporary redirect will be written on the hosting server to point to a *maintenance* page. Then the new pages will take place of old pages and ensured to work before removing the redirect. 

