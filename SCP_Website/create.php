<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Create new record</title>
  </head>
  <body class="container">
    
    <h1>Create a new record</h1>
    <p><a href="index.php" class="btn btn-primary">Home</a></p>
    <p><a href="index.html" class="btn btn-secondary">SCP Home</a></p>
    
    <form class="form-group" action="db.php" method="post">
        <label>Enter SCP Item Number</label>
        <br>
        <input type="text" name="pg" placeholder="Enter SCP Item Number" class="form-control">
        <br>
        <label>Enter SCP Object Class</label>
        <br>
        <input type="text" name="h1" placeholder="Enter SCP Object Class" class="form-control">
        <br>
        <label>What Are The Special Containment Features?:</label>
        <br>
        <input type="text" name="h2" placeholder="What Are The Special Containment Features Here" class="form-control">
        <br>
        <label>SCP Destription Paragraph 1:</label>
        <br>
        <input type="text" name="p1" placeholder="SCP 1st Paragraph here" class="form-control">
        <br>
        <label>SCP Destription Paragraph 2:</label>
        <br>
        <input type="text" name="p2" placeholder="Write Paragraph 2 here" class="form-control">
        <br>
        <label>SCP Destription Paragraph 3:</label>
        <br>
        <input type="text" name="p3" placeholder="Write Paragraph 3 here" class="form-control">
        <br>
        <label>Enter image address:</label>
        <br>
        <input type="text" name="images" placeholder="e.g images/pic.jpg" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>