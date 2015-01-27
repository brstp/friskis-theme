Wordpress theme for Friskis&Svettis
Originally developed by the web agency Strop or a group och Friskis&Svettis clubs in the Stockholm region. The theme is currently maintained by stefan.pettersson@lumano.se, +46 733 12 55 55.

Apart from the theme there are some nice to have files in the jumpstart directory.

# Advanced Custom Fields are included in this premium theme and may
# be re-distributed together with the theme as long according to the
# license. http://www.advancedcustomfields.com/

Installation:

Install the theme zip file.

There are two xml files to import from the jumpstart directory.
- Advanced Custom Fields definitions.
- Sample content to create a start page, a sample news article and menus. Use the Wordpress importer. That xml file is provided "as-is".

Copy the directories advanced-custom-fields and acf-repeater from the theme to the wp-content/plugins directory.


Recommendend settings:

General > Site Title: The name of the club.
General > Tagline: #empty
Reading > Front page displays: A static page: "Start"

Media > Thumbnail size: 260x135, crop
Media > Medium size: 196x0
Media > Large size: 460x0

Permalinks > Post name

Friskis&Svettis > Förening (Club): The name of the club
Friskis&Svettis > Facebook-konto (Facebook account): Part of the url to a facebook page, everything after the domain name, excluding the initial slash.
Friskis&Svettis > Facebook-konto (Twitter account): The twitter handle (without "@").

Create a start page (or import from xml file). I assume it's called "Start". Use page template = "Start".

On the page "Start" the slider and three teasers are published by editors. Use exact image sizes. Sample files are available in the jumpstart directory. Always use one or more sliders and exactly three teasers. Use the "Add row" buttons to add more slider images or teasers.

Translations on the start page: 

Bildspel: Slider
Bildstorlek: Image size
Bild: Image
Sidlänk: Page to link to
Alt: Alt tag for the image
Puffar: Teasers
Rubrik: Header


Copy favicon.ico to web server root.

The main menu must be named "Primär navigation".
Tha footer menu must me named "Sidfotsmeny".
(Yes. It's ugly.)


There are three widget panels:
Sidbar: left column on sub pages.
Sidfot 1: Page foot, left
Sidfot 2: Page foot, right

On pages there are a right column visible on wide screens. On narrow screens, this column is hidden. We primarily use it for images. The column is edited in an own editing field of the page.


The admin pages are in Swedish, mostly hard coded. Thanks to F&S Luxembourg, there is an English translation of the frontend. If you translate, please bransch and send a pull request, to let others use the translation.

The theme is hosted at: https://github.com/brstp/friskis-theme. Improvements are appreciated. Please branch and send pull request.


