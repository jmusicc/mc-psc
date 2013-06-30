mc-psc | MINECRAFT PRIVATE SKIN CENTRAL
=======================================

Minecraft Private Skin Center - Manage your own private server skins with this PHP/MYSQL script

Its a PHP based CMS, players can register, login, upload, delete, edit their
own skins.(it contains the latest Skincraft too for editing) Remember its in
beta status there WILL be updates!! but it works great!

IN ORDER TO WORK WITH THIS SCRIPT YOU WILL NEED A HEXA EDITED MINECRAFT.JAR CLIENT FILE!

Current version: MC-PSC V0.6 Beta

Features:
- Multilanguage(it is beguned, but not finished yet)
- Skin managing Per user(Everyone for Himself)
- Cape upload download
- Realtime, Webgl 3D Skin Viewer, where you
can rotate and try how you will look like
in the game :D
- Skin Editor(Skincraft)
- Server Checker
- Session Based login system.
- Anti SQL Injection Functions included.

WARNING! It uses webgl(For 3D graphics), only tested browsers are: Firefox, Chrome
(Others are not supported by me so if you are using others and something
is wrong dont bother to write me. I wont respond.)

NOTE: THIS RELASE SCRIPT IS NOT ANDROID COMPATIBLE!!!
(Well it works, but not the webgl, so no 3d graphics, unless you
install Firefox or chrome android version.)

Install:
What will you need: WAMP/LAMP envrionment web server(Tested on both)
Mysql, PHP, APACHE

1. Make a database in mysql and Import SQL mineskincms_install.sql
2. Edit config.php(instructions in the file)
3. Add your skin and cape directory CHMOD 777
4. Set permissions 644 for config.php
5. Edit your minecraft's .jar class files in hexa to your skin server.
(in 1.5.2 the files are: aus.class, bfk.class, bfj.class, bjb.class)
6. enjoy.

For Helping in hexa edit minecraft.jar; or in earlyer versions read this thread:
http://forum.ragezone.com/f628/guide-new-method-lan-premium-893920/

Note: There is NO demo site(I have one up and running, but i dont give out my links since its a private server, so you will have to try or see pictures posted here) so dont ask it.

BUGS:
If you upload a SKIN/CAPE you have to refresh the profil screen 3-4 sometimes to see the changes.

Future features in development:
- Profil page to change password
- User Searcher/viewer
- Better Page Controll.
- Permissions system
- Admin Panel(currently it does not have any) 
