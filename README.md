CodeIgniter Bootstrap
======

Kicker framework with CodeIgniter, Twitter Bootstrap and ionAuth

![Manage Users Screen](http://f.cl.ly/items/1u313f370q1s3S3d3m2W/Image%202013.04.08%208:51:17%20AM.png)

* * *

## Usage

Create a database and update your configuation settings:

    deploy/application/config/development/database.php

Run the sql/ion_auth.sql to setup your users/groups tables

You can login using the default admin credentials of: 

    admin@admin.com
    password


### Notes/Comments

I've removed the phone number fields and associated validation from the original ionAuth library / examples. The setup there was/is not suitable for international phone numbers.