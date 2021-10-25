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
     <h1 style="border-bottom:1px solid gray;">Add Patient</h1>
    
     <div class="card mb-3 col-md-12">
        <div class="card-body col-md-12">
            <form action="" method="" enctype="multipart/form"> 
                <div class="form-row">
                   <div class="col-md-6">
                        <div class="form-group">
                             <label class="mb-1">First Name</label><input class="form-control" type="text" name="from" required />
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group">
                             <label class="mb-1">Last Name</label><input class="form-control" type="text" name="to" required />
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group">
                             <label class="mb-1">Address</label><input class="form-control" type="text" name="base_fair" required />
                        </div>
                   </div>
                   <div class="col-md-3">
                        <div class="form-group">
                             <label class="mb-1">Age</label><input class="form-control" type="number" name="discount_fair" required />
                        </div>
                   </div>
                   <div class="col-md-4">
                        <div class="form-group">
                             <label class="mb-1">Specimen</label>
                             <select class="form-control" required>
                                 <option value="">----- select -----</option>
                             </select>
                        </div>
                   </div>
                   <div class="col-md-4">
                        <div class="form-group">
                             <label class="mb-1">Date/Time Collected</label>
                             <div class="nativeDateTimePicker">
                                <input type="datetime-local" id="party" name="departure" class="form-control" required>
                                <span class="validity"></span>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-4">
                        <div class="form-group">
                             <label class="mb-1">Date/Time Released</label>
                             <div class="nativeDateTimePicker">
                                <input type="datetime-local" id="party" name="arrival" class="form-control" required>
                                <span class="validity"></span>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-4">
                        <div class="form-group">
                             <label class="mb-1">Antigen</label>
                             <select class="form-control" name="bus_id" required>
                                 <option value="">----- Select ------</option>
                             </select>
                        </div>
                   </div>
                   <div class="col-md-4 ml-4">
                        <div class="form-group">
                             <label class="mb-1">Antigen</label><br>
                             <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                             <a href="index.php" class="btn btn-secondary">Cancel</a>
                        </div>
                   </div>
                </div>
        
            </form>
         </div>
      </div>
  </div> <!-- /jumbotron -->
</main>

<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/incons.js"></script>
<script src="../../assets/js/bootstrap4.min.js"></script>

<?php include('../../includes/footer.php'); ?>