# Turquoise Theme for WordPress

A quick writeup for the reason behind this theme. More or less, I lack WordPress experience so when it came to building a new website I designed one by hand instead of using WordPress Themes. Now, in order for the static website to be hosted it must be converted into a theme.



## Why the new theme?

The website and subsequent theme was made at the tail-end of 2019 thus the year. The former website theme has become stale. 



## How are static pages built?

Low-fi paper prototyping was used as a foundation prior to commiting to code. [Bootstrap](https://getbootstrap.com/) is a component library used to structurally build the website with help from other technology listed. [jQuery](https://jquery.com/) is used with it for JavaScript and [Font Awesome](https://fontawesome.com/) was used for icons.

[Bootstrap]: https://getbootstrap.com/
[Font Awesome]: https://fontawesome.com/
[jQuery]: https://jquery.com/



## How is the theme converted?

The gist for WordPress Themes is to make sure certain files are present with specific template code used for it to recognize the theme as legit. The process includes; following reference material for correct structure such as this [SitePoint article](https://www.sitepoint.com/bootstrap-wordpress-theme-integration/), making sure the default stylesheet contains comments allowing WordPress to allow the theme, splitting the code into PHP includes, [enqueuing style sheets and functions](https://developer.wordpress.org/reference/functions/wp_enqueue_style/), and copying remaining *body* code into individual pages through the WordPress Dashboard. In order for active navigation styles can be applied per page via Bootstrap the navigation bar must be in the page copy and modified per page not as an include.


## How will deployment be handled?

Themes can only be specified site-wide not per page so all code must be copied and in place before the theme can be applied. Once each page is made and checked for proper links a temporary redirect will be written on the hosting server to point to a *maintenance* page. Then the new pages will take place of old pages and ensured to work before removing the redirect. 

