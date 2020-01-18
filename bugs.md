# Post Deployment Bugs

Deployment took place in late 2019. Raw HTML markup was copy/pasted into WordPress pages with the rest of the static page being broken up as includes for the WordPress theme.

## Spacing issues abound

Bootstrap cards, card decks, and other block level elements appear to have little if any padding vertically. The navigation brand icon also has sizing issues and due to the nature of how I split the code is present on each WP page. Using a webpage inspect it appears that the reboot portion of Bootstrap rules is not being followed. 

First, I will clean up how I call Bootstrap from within WordPress by removing meta tags in the document head and enqueuing them through the WP engine. I will also enqueue CDNs instead of files.