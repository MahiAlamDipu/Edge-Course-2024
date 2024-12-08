<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="4_get_post.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
</form>


</body>
</html>

<?php

/*                                    something like array jetate "username" "password" ache
 get  ==   data is appended to the url 
           not secure 
           chart limit 
           bookmark is possible w/ values
           get request can be cached
           better for search page 

post  ==   data is packaged inside the body of the html 
           more secure 
           no data limit 
           cannot bookmark 
           post request are not cached 
           better for submitting credentials            
*/

// Directly echoing the username from $_GET (it will show nothing if not set)
echo $_POST["username"] . "<br>";   // if exist tahole print korbe nahole null print 
echo $_POST["password"] . "<br>";   // _get use korle sensitive data url e dekhabe 

// post is more secure 


?>


