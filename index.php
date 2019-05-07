<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Website Toy management of ATN company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
 
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      
      }
      .row.content {height: 450px}
     
      .sidenav {
        height: auto;
          padding: 15px;
      }
      
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }
      
      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;} 
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-inverse ">
   <div class="col-sm-3 sidenav ">
        <ul class=" nav nav-pills text-center nav-stacked">
  <h1 style="color: red">Company ATN</h1> 
</div>
        </ul><br>
      </div>
  </nav>
    
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div class="col-sm-8 text-left"> 
          &nbsp;
        <div class="panel panel-danger">
      <div class="panel-heading"style="color: blue">Toy Edit</div>
          <div class="panel-body">     
            <form action="" method="post" enctype="MULTIPLE/form-data">
            	<div class="form-group">
              <label for="ID">ID:</label>
              <input type="text" name="ID" class="form-control">
            </div>
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" name="name" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="pwd">Manufacturer:</label>
                <td><input type="text" name="manufacturer" class="form-control" value=""></td>
              </div>
              <div class="form-group">
                <label for="pwd">Date Added:</label>
                <td><input type="text" name="added" class="form-control" value=""></td>
              </div>
              <div class="form-group">
                <label for="pwd">Price:</label>
                <td><input type="text" name="price" class="form-control" value=""></td>
              </div>
                <input type="submit" class="btn btn-info" name="them" id="them" value="Add">
              </form>
          </div>
        </div>

       &nbsp;
        <div class="panel panel-danger">
      <div class="panel-heading" style="color: blue">Toy Information</div>
          <div class="panel-body">     
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Manufacturer</th>
                  <th>Date Added</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                    require_once('./dbconnector.php');
                    $cn = new DBConnector();
                    $sql="Select * from customer";
                    $rows = $cn->runQuery($sql);
                    foreach ($rows as $r) {
                    ?>  
                <tr>
                  <td><?=$r['ID']?></td>
                  <td><?=$r['name']?></td>
                  <td><?=$r['manufapricecturer']?></td>
                  <td><?=$r['added']?></td>
                  <td><?=$r['price']?></td>
                  <td>
                    <a href="hanlde.php?id=<?=$r['id']?>" class="btn btn-success" role="button" >
                  DELETE
                    </a>
                  </td> 
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>


      </div>
      <div class="col-sm-2 sidenav">
      
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">

  </footer>

  </body>
  </html>