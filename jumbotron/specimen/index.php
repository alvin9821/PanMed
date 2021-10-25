<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">
<!-- Bootstrap core CSS -->
<link href="../../assets/css/bootstrap4.min.css" rel="stylesheet"> 
<!-- Custom styles for this template -->
<link href="../../assets/css/jumbotron.css" rel="stylesheet">

<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>


<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
     <h1 style="border-bottom:1px solid gray;">Specimen</h1>
     <a href="create.php" class="btn btn-primary btn-sm mb-2"><span data-feather="plus"></span> Add New Specimen</a>    
          <div class="card mb-4">
              <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Spicemen Name</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <tr>
                        <td>samplewew</td>
                        <td class="text-center">
                        <a href="edit.php" class="btn btn-info btn-sm"> <i class="fas fa-pen"></i> View</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this entry?')"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>

                      </tbody>
                    </table>
                </div>
            </div>
          </div>
  </div> <!-- /jumbotron -->
</main>

<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/incons.js"></script>
<script src="../../assets/js/bootstrap4.min.js"></script>

<?php include('../../includes/footer.php'); ?>