# Library-Management-Project-DBMS
A small project done as part of DBMS Lab (KTU 2019 Scheme)



# Installation

Install XAMPP (You can use any Web Server you want)

Open localhost/phpmyadmin in your web browser

Setup a new User account in 'User Accounts -> New' with all neccessary permissions

import the 'library.mysql' file

Open config.php and change the corresponding values for '$mysqlusername' and '$mysqlpassword' (Use the user accounts you created earlier)

Move the 'library' folder to /opt/lampp/htdocs/ (or to the folder where the sites are served from based on your web server)



Make necessary changes to the index.php file located in /opt/lampp/htdocs/
It would look something like this: 

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


Type localhost in your Browser




# Report
https://drive.google.com/file/d/1-mNqYwxpmx_2oWmEYqr0WDLjKU9i4BJ-/view?usp=sharing
