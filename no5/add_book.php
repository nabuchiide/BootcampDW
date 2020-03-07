<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="input.php" method="post" enctype="multipart/form-data">
            <h2>Input Buku</h2>
            <div class="form-group mt-5">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group ">
                <label for="categoy_id">categoy_id</label>
                <input type="text" class="form-control" id="categoy_id" name="category_id" >
            </div>
            <div class="form-group ">
                <label for="writer_id">writer_id</label>
                <input type="text" class="form-control" id="writer_id" name="writer_id" >
            </div>
            <div class="form-group ">
                <label for="Publicaion_year">Publicaion_year</label>
                <input type="date" class="form-control" id="Publicaion_year" name="Publicaion_year" >
            </div>
            <div class="form-group ">
                <label for="Image">Image</label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>

            <input type="submit" name="submit" value="Submit Data">
            
        </form>

        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
