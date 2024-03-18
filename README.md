# Send_Email_PHP

![image](https://github.com/Asavei16/Send_Email_PHP/assets/57408487/bdb8742c-80f0-4676-bc1b-8d3dcac229f6)

![image](https://github.com/Asavei16/Send_Email_PHP/assets/57408487/89856f1c-5fed-4406-a10e-7b951cb65fee)


In C:\xampp\php\php.ini find extension=php_openssl.dll and remove the semicolon from the beginning of that line to make SSL working for gmail for localhost.

### in php.ini file find [mail function] and change

* SMTP=smtp.gmail.com
* smtp_port=587
* sendmail_from = my-gmail-id@gmail.com
* sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"

### Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code [sendmail]

* smtp_server=smtp.gmail.com
* smtp_port=587
* error_logfile=error.log
* debug_logfile=debug.log
* auth_username=my-gmail-id@gmail.com
* auth_password=my-gmail-password
* force_sender=my-gmail-id@gmail.com
