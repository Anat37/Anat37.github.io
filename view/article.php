<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title> My first blog </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <div class = "container">
            <h1> My first blog </h1>
            <a href="admin" link = "admin/admin.php"> Admin Panel</a>
            <div class = "article">
                <h3><?=$article['title']?></h3>
                <em> Posted : <?=$article['date']?> </em>
                <p> <?=$article['content']?> </p>
                
            </div>
            <footer>
                <p> my first blog &copy</p>
            </footer>
        </div>
    </body>
</html>