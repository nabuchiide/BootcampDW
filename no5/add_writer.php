<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Input Writer</h2>
            <div class="form-group mt-5">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group ">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" >
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
