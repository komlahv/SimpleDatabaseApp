# SimpleDatabaseApp
Basic App for understanding PHP

To get running
1. Start your localhost and open the "install.php" page in your browser to autocreate the database
    -You can change the database name inside "config.php" at $dbname
2. Use the "public/create.php" page to input some users into the database 

NB: CRSF protection was added in "common.php" and must remain required in all form pages along with
 an input for the CRSF token in order for the create.php to work 


 Often, in a real app, data won't be permanently deleted from the database. The users might have a boolean table that defines them as "active" or "inactive" users instead of actually deleting the data.


Project was guided by this post
https://www.taniarascia.com/create-a-simple-database-app-connecting-to-mysql-with-php/

very useful for learners
