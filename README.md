# Weapon Shoppe

Small PHP program that loads "weapon shop" inventory using .csv and displays stats.

This was part of an assignment in CIS195 (week 4) that uses forms and loads data from a CSV file and allows user to select a weapon to see its attributes and cost.

You can see this "app" online at: https://urifrazier.com/weapon_shop/main.php

## To Do List

- Only run the import on an ad hoc basis, not with every page load. Lets start with adding an import page.
- I'd like to convert this to an MVC setup.
- Create a page/form that allows manual entry of new weapons.
- Make app use front-end Vue.js, instead of reloading new php pages. Let's create a single page app.

## Done 
- Create `.htaccess` file to make `main.php` default index page. (11/25/2022)
- Inserting items into DB instead of just array. (11/27/2022)
