# 3380-group-project-server-code
server code for group project app


#How to build the LAMP server

-use any machine that has a ubuntu partition on it
>Video link to setting up Ubuntu partition:

-set up a LAMP(Linux Apache MySQL Php) server on the machine that is hosted on localhost
>Video link to setting up LAMP server: https://www.youtube.com/watch?v=K3k_q2hRaLU&list=WL&index=48
>summary of video:
  >open terminal and update to latest Ubuntu packages
    >sudo apt-get update
    >sudo apt-get upgrade
   >install tasksel
    >sudo apt-get install tasksel
  >run tasksel and select the 'Basic Ubuntu server,' 'LAMP server," and 'print server' options and hit <ok>
    >follow prompts while tasksel sets up and installs the packages to set up passwords
  >install phpMyAdmin 
    >sudo apt-get install phpmyadmin
  >give your user (Ubuntu user) all rights to edit the /var/www/html/ directory
    >sudo chown -R %UbuntuUser%:www-data /var/www/html/
    >sudo chmod 755 /var/www/html/
    >sudo chmod g+s /var/www/html/
    >switch to /var/www/html/ directory and run umask
      >cd /var/www/html/
      >umask
        >if you get 0002 back permissions are set up correctly
       
#how to set up MySQL table 
