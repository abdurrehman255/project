<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
      <h1 class="text-center">All Data</h1>
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Image</th>
          <th scope="col">video</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Delete</th>
          <th scope="col">update</th>

        </tr>
      </thead>
      <tbody>
        <?php  
        $database = mysqli_connect("localhost", "root", "", "database");
        $data = mysqli_query($database, "SELECT `id`, `name`, `email`, `img`,`video` FROM `table`");
        
        while ($row = $data->fetch_assoc()) {
        ?>
          <tr>
            <th scope="row"><?php echo $row["id"]; ?></th>
            <td><img src="uploads/<?php echo $row["img"]; ?>" alt="" style="height: 100px; width: 100px;"></td> 
            <td>
    <video controls style="height: 100px; width: 200px;">
        <source src="uploads/<?php echo htmlspecialchars($row['video']); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</td>
     
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">update</a></td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
