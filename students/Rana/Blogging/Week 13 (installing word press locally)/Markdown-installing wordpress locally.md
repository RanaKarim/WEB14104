## Installing WordPress locally ##


I was using the WAMP server on my PC. Installing WordPress locally was fairly simple. I used a [Youtube video tutorial](https://www.youtube.com/watch?v=MHMV6tUuadA) that covered all the steps.

1. Make a project folder inside your root folder. For me it was inside **C:\wamp\www\wp-test**
2. Download the Wordpress files from [WordPress.org](https://wordpress.org/) and copy them into the project folder you just made.
3. Create a data base on my local host MySQL
4. Create a configuration file: when u download and copy the Wordpress files into your project folder there is a **wp-config** file. The video I watched told me to make changes to it so I wouldn't need to create a configuration file through Wordpress so your initially skipping a step. In the config file you put in your database name the one you recently created and  change the database user to **root**. If you haven't changed any passwords you leave the password section within the file empty.
5. Install Wordpress to your project: As we skipped the configuration process by manually doing it within the file you can move straight onto installation. Fist you type in the url **localhost/"yourprojectfolder"/wp-admin/install**. After that you should go to a page asking you to choose a site title, user name and password which can be anything you wish. Then you simply click **install Wordpress** which is at the bottom of that page.
6. You can now log into you local Wordpress website with your chosen user name and password

I also wanted to see how to configure the Wordpress without manually doing it and found another [step by step tutorial video](https://www.youtube.com/watch?v=OtB_42ZTYbY&list=WL&index=158) as it can be handy to know both ways.

Working locally can be really handy to test your website on before you put it online for everyone to see and you don't need an internet connection to run it because all your files are saved on your machine.