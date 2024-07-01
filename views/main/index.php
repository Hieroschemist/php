<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Dashboard</title>
  </head>

<body>
    <h1>Hello world</h1>

    <div>
        <a href="#">Создать пост</a>
    </div>
    <?php 
        include_once '../../conf/conf.php';

        $data = 'SELECT * FROM posts';
        if($articles = mysqli_query($conn, ShowAllArticles)){
            if(mysqli_num_rows($articles)>0){

                echo "<table class='table table-bordered table-striped'>
                
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_at</th> 
                    <th>Actions</th>
                  </tr>";
                
                while($article = mysqli_fetch_array($articles)){
                    echo '<tr>
                    <td><a href="controller=index&action=show">'.$article['id'].'</a></td>
                    <td>'.$article['title'].'</td>
                    <td>'.$article['content'].'</td>
                    <td>'.$article['created_at'].'</td>
                    <td>
                    
                    <a href="controller=index&action=change">Change</a>
                    <a href="controller=index&action=delete">Delete</a>
                    </td>
                    </tr>'; 
                };
                
            };
        };
    ?>


</body>
</html>
