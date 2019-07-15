# Vulnerable Web Application 

![VulnWeb](https://github.com/OWASP/Vulnerable-Web-Application/blob/master/Resources/VulnWeb.png)

## What is Vulnerable-Web-Application

Vulnerable-Web-Application is a website that is prepared for people who are interested in web penetration and who want to have
information about this subject or to be working. In fact, the website is quite simple to install and use.

Vulnerable-Web-Application categorically includes Command Execution, File Inclusion, File Upload, SQL and XSS. For database-requiring
categories, it creates a database under localhost with one button during setup. In case of corrupted or changed databases, you can
create a database again.

## Installation Guide

If you want to run this tool, first of all you need to download web server solution like "xampp"- you can download xampp from
[Xampp](https://www.apachefriends.org/tr/download.html). After your installation;

For Windows you need to copy the files into the xampp/htdocs folder.

For Mac Os  you need to install mampp and  copy the files into the mamp/htdocs folder.
[Mampp](https://www.mamp.info/en/downloads/)

For Linux after download our files first you need to open apache server and copy the files to /var/www/html

## Docker Container
You can also run the **Vulnerable Web Application** in Docker with the folowing command:

```
docker run -it --name vuln_app -p 9991:80 santosomar/vuln_app:latest /bin/bash
```
**Note**: You can change the port 9991 to any port you desire depending your implementation. 

### Other Configurations:

The `php.ini` file should be  altered. You can find the location of your `php.ini` file under the folder which php is installed.
- `allow_url_include` = on - Allows for Remote File Inclusion
- `allow_url_fopen` = on - Allows for Remote File Inclusion
- `safe_mode` = off - (If PHP <= v5.4) Allows for SQL Injection
- `magic_quotes_gpc` = off - (If PHP <= v5.4) Allows for SQL Injection

## Application Setup

- After editing the previous configuration, open the Xampp Control Panel and start Apache,MySQL. 
- Your MySQL credentials must stay the default credentials (e.g., username:root <-> password:"")
- Open up the `index.php` file in the <b>Vulnerable Web Application</b> directory. Follow the directions and create database. 

**Note**: You can reset the database at any time, if needed or if you run into any problems. Once the database is ready, you can go to homepage and start hacking.

## License
The contents of this repository are licensed under the GNU General Public License v3.0.
 
## Version
1.0.0
