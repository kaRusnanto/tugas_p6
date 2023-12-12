<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Add your custom CSS file -->
  <title>Login Form</title>
</head>
<style>
    body {
        background: linear-gradient(to right, #ff0000, #ffa500, #ffff00, #008000, #0000ff, #4b0082, #8b00ff);
}

.container {
  max-width: 700px;
  margin: auto;
}

.form-group {
  margin-bottom: 15px;
}

.input-group-prepend .input-group-text {
  background-color: #000;
  color: #ffffff;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

</style>
<body>
  <div class="container mt-5">
    <form>
      <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Username</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-anchor"></i>
              </div>
            </div> 
            <input id="username" name="username" placeholder="Username" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label> 
        <div class="col-8">
          <input id="password" name="password" placeholder="Password" type="password" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
