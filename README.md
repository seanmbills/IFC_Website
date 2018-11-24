# IFC Website

## Initial Setup Required to Run Wordpress Installation locally:
***Note: This portion of the instructions is only necessary if you wish to set up Wordpress locally on your machine for testing purposes. Most changes can probably be made directly within Wordpress online or within the code real quick and can easily be pushed up without having to be tested locally first.***

In order to be able to run Wordpress locally on your machine, you will need to download a server application. For MacOS X I would strongly recommend downloading MAMP (there's a free version along with the Pro version). For Windows I would recommend also using the MAMP software, but you could also use XAMPP if desired. I don't have any experience working with XAMPP as I've done most of of this development on Mac OS in MAMP, but it's ultimately a similar process. Below are the general instructions to get started with this software. 
For help installing XAMPP (since I don't have experience with it), I would recommend the tutorial located here: https://premium.wpmudev.org/blog/setting-up-xampp/
1.	Download MAMP/XAMPP and get the corresponding one setup on your computer. 
    - To download MAMP, go to the following site: https://www.mamp.info/en/downloads/
    - To download XAMPP, go to the following site: https://www.apachefriends.org/download.html
2. Once you've downloaded the appropriate server application, make sure to get it set up properly on your machine. From there, you'll need to navigate to the "htdocs" (or equivalent) directory within the directory for the server application. To do this with MAMP on Mac OS, you’ll need to change directory into your global hard drive level Applications folder from within a terminal window:
   - cd /       (this will change into your global hard drive directory)
   - cd Applications
   - cd MAMP (or whatever the specific instance of MAMP on your machine is)
   - cd htdocs
   - NOTE: I’m not sure of the process for XAMPP, but if memory serves me right it’s similar in the sense that there’s a directory inside of it where you put all content (similar to the htdocs folder) from which you can run these things. 
3.	Once inside of htdocs, go ahead and use the “git clone ______” ***with the clone link for this repository on GitHub***. 
4.	At this point, you should have the whole website downloaded in your MAMP/XAMPP server folder, so you should be able to launch Wordpress and go from there.

**NOTE: Even when you successfully install the wordpress installation, things such as the pages and blog posts will not populate automatically just due to the nature of those being stored in the backend server. I would strongly recommend you open the admin panel of the GaTech storage for the wordpress and make sure you set up all of the pages, menus, and blog posts exactly how they are there before you make any changes. This should only be needed once and after that you should only have to make minor changes to make sure the two mirror eachother.**

### Opening Local Wordpress Installation
If you've made changes and wish to test them locally, make sure that you've first set up the Wordpress installation and your MAMP or XAMPP installation as defined above. Once you've done this, you can then open up your local Wordpress installation like so:
1. Start your server application (MAMP or XAMPP). 
   - If you're using XAMPP, once the application opens you need to click "Start" on both the "Apache" and "MySQL" buttons. 
   - If you're using MAMP, just click "Start Servers".
2. In MAMP, this will automatically open up the localhost webpage for your MAMP installation. Keep this link open but you likely won't need it moving forward. 
   - I'm not sure whether XAMPP will do the same or not.
3. Open your preferred internet browser.
4. Navigate to the following corresponding link:
   - MAMP: localhost:8888/IFC_Website/wordpress/wp-admin
   - XAMPP: localhost:80/IFC_Website/wordpress/wp-admin
     - NOTE: If you experience issues with XAMPP and trying to open the webpage for your Wordpress installation, it likely has something to do with another application on your machine using the same port(s) (80 or 443) that your Apache and MySQL are trying to use. If this happens, do some troubleshooting to fix this.
5. If this is your first time setting up Wordpress, you'll have to walk through the setup process including setting up your preferred language, etc.
6. If this is your first time opening your Wordpress admin panel, you'll need to follow the instructions in the "Setting Up Local Database" instructions when you get to the page prompting you for your database information.
   - After you've created your php database in phpMyAdmin, provide the appropriate information to the Wordpress. If you don't set a password for your database (which you shouldn't need to do locally), the username is likely just "root" and the password is likely empty.You should be able to leave the "Database Host" as "localhost" and leave the "Table Prefix" as "wp_".
7. Otherwise, login with your local login credentials and you can begin making/testing changes.

### Setting Up Local Database (only needed for first time setting up local Wordpress installation)
* For XAMPP, refer to the "Setting Up Your MySQL Database" portion of the following webpage: https://premium.wpmudev.org/blog/setting-up-xampp/
* For MAMP: go to the webpage that is automatically opened when you start your MAMP application. Click the "Tools" dropdown, then select "phpMyAdmin". From there, the setup instructions are similar to the XAMPP setup instructions.


## Adding Posts to Wordpress
**Note: You can test these locally if you want, but I would recommend just doing these directly in the Georgia Tech installation and you can see the changes reflected immediately at fraternity.gatech.edu**
In order to add a post to the "Blog" page or the front home page, within the Wordpress admin panel, simply navigate to the "Posts" link on the side and click "Add New". From there, provide a title and content for the post and click "Publish" on the right. If you refresh the fraternity.gatech.edu link, you should see the changes reflected immediately. Note that you can style (bold, italics, etc.) and add media (images, videos, etc) to Wordpress posts and these should properly display in the webpage when the posts are loaded.

## Adding Pages to Wordpress
Overall, I would recommend trying to avoid doing this unless you know what you're doing in regards to writing HTML/CSS/PHP pages and feel comfortable within Wordpress. Each of the pages displayed on the site currently are represented by a .php template file on the backend (stored within the "wp-content/themes/IFC/" directory in the GaTech file manager). These .php template files are then referenced from within the individual "Pages" in Wordpress. If you feel comfortable with PHP/HTML and Wordpress, you can easily write a new page, making sure to add the /** Template-name: _______ ** / tag to the top of the file, and then reference this within Wordpress.

## Editing Content of Existing Pages
As we've currently written the website, some of the pages are strictly static content (and don't provide any means by which a user can modify content) and some of them are very minimally "dynamic" (allowing a user to specify some pieces of information on the page). To modify a customizable piece of information on a page that allows for this, simply navigate to that page within the "Pages" list and find the corresponding piece of information you wish to edit. For example, in the "Chapters" page, you can specify the "President Name", "Email", "Phone Number" for each of the chapters. To change this information, simply find the corresponding field on the "Chapters" page and change its value, making sure to click "Update" on the right of the screen once you've made all of your changes.
**NOTE: Some of the customizable fields are image uploads that allow you to specify/upload the image you wish to display (e.g. the four images in the carousel homepage).**
If you wish to add modifiable content, refer to the following:
### Custom Fields within Wordpress Installation
To add in cuztomizable/modifiable information to any of the pages currently displayed on the site:
1. Navigate to the “Custom Fields” section on the sidebar of Wordpress. 
2. Click “Edit” on the field group corresponding to the page on which you want to add custom fields. If a field group doesn't exist for that page, create a new one following the instructions under "**Create New Custom Field Group**".
3. Once you've chosen/made your field group, click “Add Field”.
4. Select the proper "field type" for your field (usually they will be either "text" or "image".
5. Give the field a name that easily defines what data it contains. (**NOTE: You will reference this in the php code files**)
6. Give the field a "Field Label" that defines what it is.
7. Provide any other settings for the field you want (such as Placeholder text or default values, etc.).
8. Repeat these steps for all fields you wish to add to the page.
9. Once you’ve finished adding fields to the field group, hit “Publish”.
10. To edit the content of the newly created field, navigate to the edited page (the one specified for the field group) using the “Pages” link in the sidebar.
11. Edit the value/text/image for this field value.
### Updating the PHP Code Files to Reflect New Custom Fields
In addition to creating the custom field in Wordpress and modifying its value, you must change the corresponding PHP code to allow for the new custom field. To get the field value from Wordpress and assign it to a variable, find the content in the PHP file you wish to make modifiable and replace it with the following code string:

***<?php the_field(‘wordpress_field_name’); ?>***

where ‘wordpress_field_name’ is the field name you assigned to the field in the field group on Wordpress.

### Editing Images NOT Specified by Custom Field on Wordpress
To edit a photo in the code itself without using a custom field, you must navigate into the php file of the page you want to edit and find the spot on the page in which you want to add the photo. Make sure that your photo is properly uploaded to the correct directory/folder in the GaTech storage online and then change the PHP code file to be the following:

<?php echo get_template_directory_uri(); ?>/img/<path_to_image_from_here>

where path_to_image_from_here is the path to the image from within the /img folder. 
**NOTE: The only thing you should have to change in these instances is the path to the image, as all of the images should reference the get_template_directory_uri and the "img" directory.
Also note: for images such as the executive board images and the committee chairmen images, the only changes you need to make to get the new images to show is uploading a new image on the GaTech storage location with the proper file name.**

### Create New Custom Field Group
1. On the Custom Fields tab, click "Add New" at the top.
2. Before adding new custom fields, set the page for which these fields should be displayed:
   - Under the "Location" section of the page, change the following:
     - "Show this field group if: " ==> Page Template
     - Is Equal To
     - <Name of page template corresponding to the page you're trying to add the field group to>
3. Add all fields desired using the "Custom Fields within Wordpress Installation" instructions above.



## Useful Tutorials/Links
**XAMPP Setup Instructions:** https://premium.wpmudev.org/blog/setting-up-xampp/

**Bootstrap to WP Theme YouTube Tutorials (Simple):** https://www.youtube.com/watch?v=OQY3dNHLt1I&list=PLy9vu-vJXycs8KaJyKBwsZG86nlmMD4_N

**Bootstrap to WP Theme YouTube Tutorials (Advanced):** https://www.youtube.com/watch?v=wMP2GANWXBA&list=PLy9vu-vJXycsLC9u8gKY6lt3k3FQu1WzZ

These two links above are the links we used as inspiration to take our previous HTML/CSS static site and convert to the new Wordpress/PHP site.


## Contact Information:
If you have any questions about how we created the site feel free to contact me here on GitHub or get in touch with my Georgia Tech email and I can help with this questions specific to this Georgia Tech Interfraternity Council site. 


