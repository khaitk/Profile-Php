<!doctype html>
<html lang="en">
  <head>
    <title>Insert Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <a href="allshow.php" class="btn btn-danger">PROFILE</a>
        <form action="images.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Name : </label>
              <input type="text" class="form-control" name="name" id=""  placeholder="Name" required="">
            </div>
            <div class="form-group">
              <label for="">Email : </label>
              <input type="email" class="form-control" name="email" id=""  placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label for="">Birthday : </label>
              <input type="date" class="form-control" name="birthday" id=""  placeholder="" required="">
            </div>
            <div class="form-group">
              <label for="">Image: </label>
              <input type="file" class="form-control" name="images1" id=""  placeholder="" required="">
              <input type="file" class="form-control" name="images2" id=""  placeholder="" required="">
              <input type="file" class="form-control" name="images3" id=""  placeholder="" required="">
            </div>

            <button type="submit" name="submit" class="btn btn-danger">INSERT</button>
        </form>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>