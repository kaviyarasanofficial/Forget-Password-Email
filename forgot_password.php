



<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="formcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark ">
    <div class="container mt-4 d-flex justify-content-center fw-bold ">
      <h1 class="text-center text-primary font-weight-bold">Forgot Password</h1>
     
    </div>
    
    <div class="container mt-4 d-flex justify-content-center fw-bold">
<form  class="w-75 p-3 rounded" style="background-color: #eee;" action="forgot_passwordlink.php" method="POST">
    
        <div class="form-group">
            <label for="exampleInputnameSubadmin">Enter your email:
            </label>
            <input type="text" class="form-control" id="email" name="email">
            
          </div>
        <div class="d-flex justify-content-center">
         <button type="submit" class="btn btn-primary" name="submit">Recover Password</button>
 

        </div>
        
      </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>