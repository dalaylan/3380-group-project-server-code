# 3380-group-project-server-code
server code for group project app


#How to build the LAMP server

-use any machine that has a ubuntu partition on it<br>
>Video link to setting up Ubuntu partition for reference: https://www.youtube.com/watch?v=i_4Kh5kE3xA<br>
>boot into a usb flash drive that has been formated with ubuntu and follow instructions to install<br>

-set up a LAMP(Linux Apache MySQL Php) server on the machine that is hosted on localhost<br>
>Video link to setting up LAMP server for reference: https://www.youtube.com/watch?v=K3k_q2hRaLU&list=WL&index=48<br>
>summary of video:<br>
  >open terminal and update to latest Ubuntu packages<br>
    >sudo apt-get update<br>
    >sudo apt-get upgrade<br>
  >install tasksel<br>
    >sudo apt-get install tasksel<br>
  >run tasksel and select the 'Basic Ubuntu server,' 'LAMP server," and 'print server' options and hit 'ok'<br>
    >follow prompts while tasksel sets up and installs the packages to set up passwords<br>
  >install phpMyAdmin<br> 
    >sudo apt-get install phpmyadmin<br>
  >give your user (Ubuntu user) all rights to edit the /var/www/html/ directory<br>
    >sudo chown -R %UbuntuUser%:www-data /var/www/html/<br>
    >sudo chmod 755 /var/www/html/<br>
    >sudo chmod g+s /var/www/html/<br>
    >switch to /var/www/html/ directory and run umask<br>
      >cd /var/www/html/<br>
      >umask<br>
        >if you get 0002 back permissions are set up correctly<br>
       
#how to set up MySQL table 
