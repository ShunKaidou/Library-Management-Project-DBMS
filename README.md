# Library-Management-Project-DBMS
A Basic Library Management System done using PHP and Mysql as part of DBMS LAB in KTU Syllabus (2019 scheme)



# Installation

* Install XAMPP (You can use any Web Server you want)

* Open config.php in 'library' folder and change the corresponding values for '$mysqlusername' and '$mysqlpassword' (Use the user accounts you created earlier)

* Move the 'library' folder to /opt/lampp/htdocs/ (or to the folder where the sites are served from based on your web server)



* Make necessary changes to the index.php file located in /opt/lampp/htdocs/ <br> It would look something like this: 

```php
	<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/library/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
```

* Open XAMPP and start Apache and Mysql Server

* Type localhost/phpmyadmin in your web browser

* Setup a new User account in 'User Accounts -> New' with all neccessary permissions

* Import the 'library.mysql' file

* Type localhost in your Browser

* The username and password is '`admin`' and '`admin123`' which is already given in the auth table in the database (you can change the values here in phpmyadmin to set your own username and password for logging in)


Note: Since this is small project, No Secure Measures have been implemented for protection therefore use at your own risk


# Project Report
https://drive.google.com/file/d/1-mNqYwxpmx_2oWmEYqr0WDLjKU9i4BJ-/view?usp=sharing
