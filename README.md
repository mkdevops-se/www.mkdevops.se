
# [www.mkdevops.se](https://www.mkdevops.se) WordPress "Classic" Theme

This project is based on [`Automattic/_s` (or `underscores`)](https://github.com/automattic/_s) starter theme.

Project links:
- [WordPress hosting, (staging-)www.mkdevops.se](https://github.com/mkdevops-se/hq.mkdevops.se)
- [Jira project, MKDWEB](https://mblomdahl.atlassian.net/jira/software/projects/MKDWEB/boards/22/roadmap)
- [Figma design, MKDWEB](https://www.figma.com/file/OBlfZ7ZXoxlFgCJmVSMYOD/2022-08-07-MKDWEB)


## Getting Started

Have [Docker Desktop](https://www.docker.com/products/docker-desktop/), [Node.js](https://nodejs.org/en/download/),
[PHP 7](https://www.php.net/releases/7_0_0.php), and [Composer](https://getcomposer.org/) installed, then
install [wp-env](https://developer.wordpress.org/block-editor/getting-started/devenv/) globally:

    npm -g install @wordpress/env

Clone the Git repo and `npm install`:

    git clone git@github.com:mkdevops-se/www.mkdevops.se.git
    cd www.mkdevops.se/
    git checkout feature/underscores.me-theme
    composer install
    npm install

Start the WordPress development site:

    wp-env start

Open http://localhost:8888/wp-admin/ in your web browser and login with username "admin" and password "password".

Finally, on the WP admin dashboard, go to _Appearance / Themes / Midsommarkransen DevOps AB_ and select "Activate": <br>
http://localhost:8888/wp-admin/themes.php?theme=www.mkdevops.se


## Installation

How to install the theme in your WordPress site via the admin dashboard:

1. Open _Plugins_ page, click on the _Add New_ button, and install the [WPGlobus](https://wordpress.org/plugins/wpglobus/) plugin
2. Activate the WPGlobus plugin and configure languages _Swedish_ and _English_ only, removing the other defaults, following the [WPGlobus Quick Start Guide](https://wpglobus.com/quick-start/)
3. Open _Settings_ > _Permalinks_ > _Common Settings_ and select the "Post name" alternative, then _Save Changes_
4. Open _Plugins_ page, click on the _Add New_ button, and install the [Classic Editor](https://wordpress.org/plugins/classic-editor/) plugin
5. Open _Pages_ > _Add New_ and create a page with English title "IT Services", _Save Draft_, and Swedish title "IT-tjänster", then _Publish_
6. Create another page with English title "Consulting", _Save Draft_, and Swedish title "Konsulttjänster", then _Publish_
7. Download the repo zip archive, https://github.com/mkdevops-se/www.mkdevops.se/archive/refs/heads/main.zip, and upload it under _Appearance_ > _Themes_ > _Add New_ > _Upload Theme_ > _Install Now_, then activate the theme


## Contributing

Do you want to contribute to making this WordPress theme into a shining example of latest _best practices_? Please don't
hesitate reaching out to mats@mkdevops.se for a swift onboarding!
