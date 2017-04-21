# 3380-group-project-server-code
server code for group project app <br>
All code on server and backups are located in this repo.<br>
Setting up the server for use with the app located bellow


# How to build the LAMP server

* use any machine that has a ubuntu partition on it<br>
  * [Video link](https://www.youtube.com/watch?v=i_4Kh5kE3xA) to setting up Ubuntu partition for reference<br>
    * boot into a usb flash drive that has been formated with ubuntu and follow instructions to install<br>

* set up a LAMP(Linux Apache MySQL Php) server on the machine that is hosted on localhost<br>
  * [Video link](https://www.youtube.com/watch?v=K3k_q2hRaLU&list=WL&index=48) to setting up LAMP server for reference<br>
  * summary of video<br>
    * open terminal and update to latest Ubuntu packages<br>
      * sudo apt-get update<br>
      * sudo apt-get upgrade<br>
    * install tasksel<br>
      * sudo apt-get install tasksel<br>
    * run tasksel and select the 'Basic Ubuntu server,' 'LAMP server," and 'print server' options and hit 'ok'<br>
      * follow prompts to set up passwords while tasksel sets up and installs the packages <br>
    * install phpMyAdmin<br> 
      * sudo apt-get install phpmyadmin<br>
    * give your user (Ubuntu user) all rights to edit the /var/www/html/ directory<br>
      * sudo chown -R %UbuntuUser%:www-data /var/www/html/<br>
      * sudo chmod 775 /var/www/html/<br>
      * sudo chmod g+s /var/www/html/<br>
      * switch to /var/www/html/ directory and run umask<br>
        * cd /var/www/html/<br>
        * umask<br>
          * if you get 0002 back permissions are set up correctly<br>
 * add the function calls to the server
   * copy the files from this github repo into the /var/www/html/ directory
   * edit the $connection vars in all files to the login info you created for your MySQL admin
# How to set up MySQL tables
* open firefox on the server
  * go to localhost/phpmyadmin
    * login and select import table
    * import the MySQLBuild.sql file
