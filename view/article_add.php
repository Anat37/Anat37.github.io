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
            <form method = "post" action = "index.php?action=add">
                <label>
                    Title
                    
                    <input type = "text" name = "title" value = "" class = "form-item" autofocus required>
                </label>
                <label>
                    Date
                    
                    <input type = "date" name = "date" value = "" class = "form-item" required>
                </label>
                <label>
                    Content
                    
                    <textarea name = "content" value = "" class = "form-item" required></textarea>
                </label>
                <label>
                    <input type = "submit" value = "Save" class = "btn" >
                </label>
            </form>
              
            </div>    
            <footer>
                <p> my first blog &copy</p>
            </footer>
        </div>
    </body>
</html>