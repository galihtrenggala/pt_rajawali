<!DOCTYPE html>
<html>

    <!-- <div class="headerabout"> -->
    <!-- <div class="headercontent"> -->
    <!-- <h1 class="headercontent">ABOUT</h1> -->
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta libero saepe cumque minus, sequi molestiae. Eum excepturi aut adipisci similique sapiente qui rem dignissimos veritatis nostrum? Veniam architecto modi praesentium?</p> -->
    <!-- </div> -->
    <!-- </div> -->


<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/update/'.$id); ?>

<?php #var_dump($title)?>

    <div class="container mt-5 mb-5">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <form>
                <div class="form-group">

                    <label for="title">Judul Artikel</label>
                    <input type="input" class="form-control" name="title" value="<?php echo $title;?>"> <?php #placeholder="Masukkan Judul" ?>
                </div>
                <div class="form-group">
                    <label for="x">Masukkan Foto</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <div class="form-group">
                    <label for="text">Artikel</label>
                    <textarea class="form-control" name="text" rows="3"><?php echo $text;?></textarea>
                </div>

                <input type="hidden" name="oldimage" value="<?php echo $image;?>">
            
            </form>
            <div class="d-flex flex-row-reverse">
                    <input type="submit" name="submit" class="btn btn-danger" value="Submit"></input>
            </div>
        </div>
    </div>

    </div>
</body>

</html>