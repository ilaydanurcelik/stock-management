# stock-management
It is a stock management program that I developed using PHP, HTML, CSS, and MySQL. In this program, we can delete and update the products we have added. Additionally, the dates of the added products are automatically taken and saved to the SQL table.

# SQL Installation
We created the database and table on phpMyAdmin and connected them within our code.

# index.php
This page includes the veritabani.php file to establish the database connection and then provides users with the ability to add new products and view existing ones. At the top of the page, there is a title and a form for adding products; in this form, you can enter the product name, quantity, and price to add a new product. The form data is sent to the ekle.php file for processing. At the bottom of the page, all products retrieved from the database are listed in a table. The table displays the ID, name, quantity, price, and addition date of each product. Each product has links for updating and deleting operations. The update link redirects to the guncelle.php page, and the delete link allows for the removal of the product from the database. This setup allows users to easily manage their stock information


# add.php
After establishing the database connection, I retrieved the data from the form. Then, I performed data validation and added the data to the database. Finally, I closed the database connection and redirected the user.

# update.php
This is a PHP page used for updating a product. First, the veritabani.php file is included to establish the database connection. Then, using the ID parameter received via the URL, I retrieved the data of the product to be updated from the database. If the product is found, its current information is displayed in an HTML form. This form allows the user to update the product name, quantity, and price. The form data is sent to the guncelle_islem.php file, where the information is used to update the record in the database. If the update is successful, the user is shown a success message; otherwise, an error message is displayed and the user is redirected to the main page.

# Delete.php
This is a PHP page used to delete a product from the stock management system. The page receives the ID parameter sent via the URL to determine which product should be deleted. An SQL query is then executed to remove the product with the specified ID from the database. If the deletion is successful, the user is shown a success message; otherwise, an error message is displayed. After the deletion, the header() function is used to redirect the user to the main page so they can view the updated list. This process ensures that the stock information remains current and accurate
