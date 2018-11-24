# IFC Website



## Initial Setup Required to Run Wordpress Installation locally:
***Note: This portion of the instructions is only necessary if you wish to set up Wordpress locally on your machine for testing purposes. Most changes can probably be made directly within Wordpress online or within the code real quick and can easily be pushed up without having to be tested locally first.***
In order to be able to run Wordpress locally on your machine, you will need to download a server application. For MacOS X I would strongly recommend downloading MAMP (there's a free version along with the Pro version). For Windows I would recommend also using the MAMP software, but you could also use XAMPP if desired. I don't have any experience working with XAMPP as I've done most of of this development on Mac OS in MAMP, but it's ultimately a similar process. Below are the general instructions to get started with this software. 
1.	Download MAMP/XAMPP and get the corresponding one setup on your computer. 
    - To download MAMP, go to the following site: https://www.mamp.info/en/downloads/
    - To download XAMPP, go to the following site: https://www.apachefriends.org/download.html
2. Once you've downloaded the appropriate server application, make sure to get it set up properly on your machine. From there, you'll need to navigate to the "htdocs" (or equivalent) directory within the directory for the server application. To do this with MAMP on Mac OS, you’ll need to change directory into your global hard drive level Applications folder from within a terminal window:
   - cd /       (this will change into your global hard drive directory)
   - cd Applications
   - cd MAMP (or whatever the specific instance of MAMP on your machine is)
   - cd htdocs
   - NOTE: I’m not sure of the process for XAMPP, but if memory serves me right it’s similar in the sense that there’s a directory inside of it where you put all content (similar to the htdocs folder) from which you can run these things. 
3.	Once inside of htdocs, go ahead and use the “git clone ______” with the clone link for the repository on GitHub. 
4.	At this point, you should have the whole website downloaded in your MAMP/XAMPP server folder, so you should be able to launch Wordpress and go from there.
**NOTE: Even when you successfully install the wordpress installation, things such as the pages and blog posts will not populate automatically just due to the nature of those being stored in the backend server. I would strongly recommend you open the admin panel of the GaTech storage for the wordpress and make sure you set up all of the pages, menus, and blog posts exactly how they are there before you make any changes. This should only be needed once and after that you should only have to make minor changes to make sure the two mirror eachother.**
