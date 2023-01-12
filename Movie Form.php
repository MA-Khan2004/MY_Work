<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Title</label><br>
        <input type="text" name="Title"><br>

        <label for="">Genre</label><br>
        <input type="text" name="Genre"><br>

        <label for="">Number in stock</label><br>
        <input type="number" name="Number_in_stock"><br>

        <label for="">Rating</label><br>
        <input type="text" name="Rating"><br>

        <button type="submit" name="submit">Submit</button>
    </form>   
</body>
</html>

<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $title = $_POST['Title'];
        $genre = $_POST['Genre'];
        $stock = $_POST['Number_in_stock'];
        $rating = $_POST['Rating'];

        // echo $title, $genre, $stock, $rating;

        $insert_query = "insert into movie_list(title,genre,number_in_stock,rating)
        values('$title', '$genre', $stock, $rating)";
        $result = mysqli_query($connection, $insert_query);

        if(!$result){
            echo 'Failed';
        }

    }
    
?> 