<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akses | Kemendagri</title>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
  
  .nav-bar {
    width: auto;
    background-image: url('Group 3.png');
    min-height: 180px;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin-bottom: 20px;
  }

  .content {
    padding:10px;
    margin: auto;
    max-width: 900px;
  }

  .col {
    width: 20%;
    padding: 5px;
  }

  h5 {
    text-align: center;
  }
  .content .row .col .card a{
    padding:15px; 
  }
  .content .row .col .card a:link {
          text-decoration: none;
          color:black;
        }
  .content .row .col .card a:visited {
            text-decoration: none;
        }
  .content .row .col .card a:hover {
            text-decoration: underline;
        }
  .content .row .col .card a:active {
            text-decoration: underline;
        }
  .content .col-lg .scroll{
    height:250px;
    overflow-y: scroll;
  }

  .content .col-lg {
    padding:10px;
    float:right;
  }
  </style>
</head>

<body>
  <div class="nav-bar"></div>
  <div class="content">
    <div class="row justify-content-md-center">
      <div class="col-sm-3 mx-auto" style="border:1px solid black; padding:20px;">
          <div class="card">
            <!-- <a href=""> -->
              <img src="Vector (2).png" class="card-img-top" style=" width: auto; height: auto;">
              <div class="card-body">
                <h5 class="card-title">User B</h5>
              </div>
            <!-- </a> -->
          </div>
      </div>
      <div class="col-lg" style="border:1px solid black; ">
        <h2>Folder yang diakses</h2>
        <div class="scroll">
          <ul class="list-group list-group-flush">
            <li href="" class="list-group-item">Folder 1</li>
            <li href="" class="list-group-item">Folder 2</li>
            <li href="" class="list-group-item">Folder 3</li>
            <li href="" class="list-group-item">Folder 4</li>
            <li href="" class="list-group-item">Folder 5</li>
            <li href="" class="list-group-item">Folder 6</li>
            <li href="" class="list-group-item">Folder 7</li>
            <li href="" class="list-group-item">Folder 8</li>
            <li href="" class="list-group-item">Folder 9</li>
            <li href="" class="list-group-item">Folder 10</li>
            <li href="" class="list-group-item">Folder 11</li>
            <li href="" class="list-group-item">Folder 12</li>
          </ul>
        </div>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Edit Access Folder
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Access Folder</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-check" style="padding:10px;">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
                      <label class="form-check-label" for="defaultCheck">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check"style="padding:10px;">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

      </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>

</html>