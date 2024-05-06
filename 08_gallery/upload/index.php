<!doctype html>
<html lang="en">
<?php require_once '../components/head.php'; ?>
<body>
    <div class="container">

        <div class="row">
            <?php require_once '../components/menu.php'; ?>
        </div>

        <div class="row">
            <h1 class="display-6">Upload</h1>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <form action="handler.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">


                        <input name="usr_img[]" type="file" accept="image/*" class="form-control" id="img_file" multiple>

                        <button class="btn btn-outline-primary mt-4" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php require_once '../components/scripts.php'; ?>
</body>
</html>



