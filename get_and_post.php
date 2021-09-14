<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Get And Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php 
if (isset($_POST['done'])) {
    
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];

    echo '<div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Success!</strong>
              <strong>Phone Number :- </strong> '.$phone_no.'
              <strong>Email Id :- </strong> '.$email_id.'
              <strong>Name :- </strong> '.$name.'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';

}

?>


<div class="container mt-3">
    <div class="row col-sm-6 p-2 mt-2 border border-primary">
        
        <h1 class="text-primary text-capitalize text-center"> Get And Post</h1>
        
        <form method="post" action="get_and_post.php">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here !">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone_no" placeholder="Enter Your Phone No Here !">
            </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email_id" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary" name="done">Submit</button>
        
        </form> 
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>