## ortFolio v1.4.0

_A minimal website template for your image-based portfolio needs!_

ortFolio is a zippy little quasi-static website. There are no databases to set up or admin backends to log in to: simply organize a few folders, add some project details, and you're off, just like the good ol' days.

Found here is an empty ortFolio template and a very minimal running example. 

* To see a minimal running example, [go here](https://www.holinaty.com/ortfolio-demo)
* or [check out this list of websites](ORTFOLIOFANS.md) to see more examples of ortFolio in action

**Requires**: PHP 7+ (which is pretty standard these days)

## Installation

To quickly give the example site a spin on your computer, open up Terminal (find it via Spotlight) and navigate to the `ortfolio-example` folder and enter the following command to start up a local web server (assuming the folder is located in your Home directory): 

``` bash
$ cd ~/ortfolio-example
$ php -S localserver:8080
```

Then open up your favourite browser and navigate to [http://localhost:8080/](http://localhost:8080/) to see ortFolio in action!

Once you are ready to publish your site, simply upload the contents of your site folder to the root directory where your website is being hosted.


## Basic Configuration

Site-wide configuration happens in the `config.php` file located in the root directory of your website. Here you can update site-wide variables such as your name (which appears at the top of in the side navigation menu), section names, social media links, and more.

By default ortFolio is set up to run from the root directory of wherever you're hosting your site from. If that's what you want, then ignore the next paragraph.

If you want to serve ortFolio from a sub-folder, e.g. `www.yoursite.com/ortfolio-site`, you will need to modify the `$ORTFOLIO_LOCATION` variable in `config.php` by giving it the absolute web path to the folder you're serving it from. For example, in the URL above `$ORTFOLIO_LOCATION = "/ortfolio-site";` because I've put the contents of that ortFolio site in a folder named `ortfolio-site`, in the root of my server.


## Creating Sections

_Think of a section as a set of projects. Sections will appear in the side navigation menu, and clicking on a section will show all the thumbnails for each sub-project within said section._

##### Step One: make a section folder
To create a new section with multiple sub-projects, make a copy of the `empty-section` folder and rename it to whatever you want. Section folder names should contain no whitespace, and lowercase letters are for the best. As an example, `flower-paintings` is better folder name than `Flower Paintings`.

If you would like to create a section that links to a single page – such as the 'about' page in the example site – copy and rename the `empty-single-page` folder, and edit the index.php file to your heart's content. (But keep that "content" div in there!)

##### Step Two: update `/config.php`

In order for sections to appear in the side navigation menu they must be added to the `$sectionNames` array located in the `config.php` file in the root directory. Let's walk through an example scenario:

Assume you've already created three section folders named "flowers", "landscapes", and "portraits". Open up the `config.php` file and add a line for for each section name following the format below: 

``` php
$sectionNames['your-section-folder-name'] = 'Link text!';
``` 

Therefore, with the three example folders mentioned above, your `config.php` fild could look something like:

``` php
$sectionNames['flowers']    = 'Flower photos';
$sectionNames['landscapes'] = 'Landscape paintings';
$sectionNames['portraits']  = 'Portraits';
```

**Note:** The above is handy because it allows you to include whitespace in your link text.

**Tips about sections**

* Sections are listed in the side navigation menu in the same order as they appear in `config.php`.

## Creating Projects

* **Image formats supported: jpg, png, gif**

Within every non-single-page section you create you will find a folder named `empty-project`. Duplicate and rename this folder for each project you'd like to have within the current section.

Project folders contain two folders: `images` and `thumbnail`. Project images go into the `images` folder  and will be displayed in alphabetical order, so name your files accordingly. Project thumbnail(s) are placed in the `thumbnail` folder. (You can have more than one thumbnail per project if you so desire, because why not?)

To add details to your project, such as a title, credits, and description, simply edit the `project-config.php` file in the project's root directory. For example: here are the contents of your basic `project-config.php` file:

``` php
<?php 
$title = 'Flower Study';
$creditOne = 'John Jessop Hardwick, 1866';
$creditTwo = 'Watercolour, 29.2 x 38.1 cm';
$description = 'A lovely watercolour of flowers.';
$omit = false;
```
**title**: the title of your project<br>
**creditOne**, **creditTwo**: handy for credits, size, and other tiny infos.<br>
**description**: A string of text describing your project. Note that you can include custom HTML in here too.<br>
**omit**: This is a weird one. If true it will omit this project's thumbnail from the "SuperGallery" on the homepage.

**Tips 'n facts**

* Images are set to render at max width of 650px
* Thumbnails are set to render at a max width of 300px
* You can change these defaults by editing the CSS
* Make sure you've got those semicolons and proper quotation marks

## Videos?

If you want to embed YouTube/Vimeo videos into a project page, simply paste the embed code into the `project-config.php` description variable. Thumbnails and other images are the same: simply add them to their respective folder.

## Music Albums?

ortFolio comes with a simple music template page to accommodate a Bandcamp embedded player. Use the `empty-music-project` template and simply paste the iframe embed code into the project config's `$iframe` variable. Thumbnails and other images are the same, but there is also an folder for album cover art. Simply add your images to their respective folder.

## SuperGallery!

The default behaviour of the landing page of your website is to gather up all of the project thumbnails found in all of your sections, creating a "Super Gallery." Similar to the `$sectionNames` variable, you will need to add the sections you'd like to pull thumbnails from. For example: `$superGallerySections = array("flowers", "portraits");`

Note that you can omit sections from the super gallery. To omit individual projects from the super gallery, but still have them appear in their own sections, simply set the `project-config.php` variable `$omit` to `true`;

## Further Customization

#### Social Media
You can add a list of social media links (or any outbound links, really) by adding to the `$socialMedia` array found in `config.php`. 

The format is as follows: `$socialMedia['URL'] = 'nameToAppearInMenu'`. Which means that:

``` php
$socialMedia['http://www.twitter.com/yourUserName'] = 'twitter';
```
	
would create a link named `twitter` in your side navigation menu linking to a Twitter account. Fun!

#### Analytics🕵

You can add Google Analytics to your site by modifying the `google-analytics.php` file located in the `templates/` folder, and setting the `$usingGoogleAnalytics` variable found in the `config.php` file to `true`.

## License

**ortFolio** is free, open, and released under the [MIT license](LICENSE.md). Do as you wish with it!

**ortFolio** uses [Masonry](https://github.com/desandro/masonry) for the thumbnail grids. Masonry is also released under the MIT license. 

---

Created by me, [Josh Holinaty](https://www.holinaty.com)<br>
No need to credit me, but if you do use ortFolio for your website needs, I'd love to see it and hear about your experience!
