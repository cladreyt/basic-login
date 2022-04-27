# basicLogin
Basic PHP login page that refers to a list of username and password combos, some python tests

Login.php
startup page, promps for a username and password. If the user:pass is a verified combo in the userList file,
redirects to another page (in this case google.com, it's just a basic login page).
Also has a create new account button, redirects to newAccount.php to create a new account to sign in.

newAccount.php
page to create new accounts, input a user:pass, then submit. This redirects to the Login.php page, but the user:pass
have been added to the userList doc

userList.txt
records all the accounts allowed, in user:pass format. This file is scanned to find out which accounts are allowed.

records.txt
every login attempt, allowed or not, is recorded in this file. If the login attempt is valid, has - correct tag.

bruteForceTest.py
this is just a test file I made to try and brute force my own login page. Basic reading line after line from a test file
to try and crack a specific username. Essentially experimenting with the force of my computer.

**This project is just a beginner project in PHP with some python, testing features and learning the basics.
