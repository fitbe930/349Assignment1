# Student Signup Web Application
For this project I have setup 3 virtual machines using vagrant:
- The 'web' VM runs the web interface for users
- The 'db' VM that runs the database
- The 'admin' VM which provides admin funtionalities

The web VM is hosting my web application, which is a signup form for students, and then connects to the database created using MYSQL by the database VM.
I am using the admin VM to provide a secure admin access web page that connects to the database and allows authorized users to delete entries.

Each VM runs a provisioning script. web_script.sh and admin_script.sh installs the needed software and sets the apropriate file as the default webpage. 
db_script.sh installs MySQL and creates a user and database for the web and admin vm to connect to. It also runs the SQL inside db_setup.sql, which creates the database structure and adds two entries into the database that can be used as test data.



## How to:
First make sure virtualbox and vagrant are installed, clone this repo, then type "vagrant up" in the console and the 3 VMs will begin booting.
search 127.0.0.1:8080 in your web browers to bring up the student sign up form web page. Search 127.0.0.1:8081 to bring up the admin login page.

