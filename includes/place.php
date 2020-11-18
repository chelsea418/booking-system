<?php 
    include "../functions/auth/connection.php";
    include "../functions/class/library.php";
    $lib = new BookingSystemClass();

    //getting all places from the databse or get place by category
    if(isset($_POST['getPlaces'])){
        $resultPlaces = $lib->getAllPlace($conn);
    }
    else if(isset($_POST['getPlaceCategory'])){
        $resultPlaces = $lib->getPlacesByCat($conn, $_POST);
    }
?>

<?php foreach(json_decode($resultPlaces) as $place): ?>
    <div class="col-lg-4 col-sm-6 mb-4 fade-in">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="uploads/<?php echo $place->image ?>" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $place->name ?></h5>
                <div>
                    <p style="font-size:12px;" class="card-text"><?php echo $place->desc; ?></p>
                </div>
                <a data-toggle="modal" href="#booking-<?php echo $place->id_place ?>" onclick="prepareView('<?php echo $place->name ?>', '<?php echo $place->image ?>', '<?php echo $place->desc ?>')" class="btn btn-primary btn-block">Book Now</a>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="booking-<?php echo $place->id_place ?>">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h3>Book with US!</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                <small id="emailHelp" class="form-text text-muted">You are going to book for <?php echo $place->name ?>.</small>
                    <div class="row">
                        <div class="co-12">
                            <img class="booking-view-image" src="../uploads/<?php echo $place->image ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Person</label>
                                <input type="number" class="form-control" id="person-<?php echo $place->id_place ?>" aria-describedby="person">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Person</label>
                                <input type="date" class="form-control" id="date-<?php echo $place->id_place ?>" aria-describedby="person">
                            </div>
                        </div>

                        <div class="form-check">
                            <input id="check-<?php echo $place->id_place ?>" type="checkbox" class="form-check-input">
                            <label class="form-check-label"  for="exampleCheck1">By booking, you agree to the <a href="#">Terms of service</a> </label>
                        </div>

                        <button data-dismiss="modal" onclick="bookNow(<?php echo $place->id_place ?>)" class="btn-primary btn btn-block">Book</button>
                    </div>
            
                </div>
            </div>

        </div>
    </div>
    </div>
<?php endforeach; ?>


