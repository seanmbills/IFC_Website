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
*For XAMPP, refer to the "Setting Up Your MySQL Database" portion of the following webpage: https://premium.wpmudev.org/blog/setting-up-xampp/
*For MAMP: go to the webpage that is automatically opened when you start your MAMP application. Click the "Tools" dropdown, then select "phpMyAdmin". From there, the setup instructions are similar to the XAMPP setup instructions.
