# basicLogin
Basic PHP login page that refers to a list of username and password combos

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

**This project is just a beginner project in PHP, testing features and learning the basics.
