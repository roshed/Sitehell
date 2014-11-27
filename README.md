# Sitehell
========
## Menu
[1.For whom](#forwhom)
<br/>
[2.Introduction](#introduction)
<br/>
[3.Copyright](#copyright)
<br/>

## For Whom?
Yon controller is created for people who need that thing, but can't create it or don't have enough time to create it yourself.
 
Sitehell help with editing sites by means of editing one file rather than edit everyone subpag, so you really gain a lot of time.

## Introduction
To configure Sitehell open file config.php in main folder,
`
$dbip = '#'; // ip database

$dbuser = '#'; // user database

$dbpass = '#'; // password database

$dbselect = '#'; // select database

//etcetra etcetra

$controller = 'index'; //file name, what you want to load. without .PHP

$top = 'header.php'; // Top of site, file name

$bot = 'footer.php'; // Bottom of site, file name`

The attachment is in html and it show how it should looks.

## Small Tutorial
How to connect with the database?
Add in your code:
$connect = new Database;
$connect -> connect($dbip, $dbselect, $dbuser, $dbpass);
insert/select etc incomming!

## Copyright
Actual version 0.02 still updating.
I hope, that Sitehell will give you more time. 
In conclusion id like to add description who made it in your site.
Yours faithfully RosheD.
