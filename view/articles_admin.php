<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title> My first blog </title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <div class = "container">
            <h1> My first blog </h1>
            <a href="index.php?action=add">  Add article</a>
            <div>
              
                <table class = "admin-table">
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($articles as $a): ?>
                    <tr>
                        <td><?=$a["date"]?></td>
                        <td><?=$a["title"]?></td>
                        <td><a href = "index.php?action=edit&id=<?=$a["id"]?>"> Edit</a></td>
                        <td><a href = "index.php?action=delete&id=<?=$a["id"]?>"> Delete</a></td>
                    </tr>
                    <?php endforeach?>
                </table>
              
            </div>    
            <footer>
                <p> my first blog &copy</p>
            </footer>
        </div>
    </body>
</html>