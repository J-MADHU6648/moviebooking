<?php
include('header.php');
include('../../form.php');

// Create formBuilder instance
$frm = new formBuilder;
?>

<link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
<script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:#eabdbd;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Show</h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Add Show</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box" style="border-top: 3px solid #e16f6f;">
            <div class="box-body">
                <?php include('../../msgbox.php'); ?>
                <form action="process_addshow.php" method="post" id="form1">
                    <div class="form-group">
                        <label class="control-label">Select Movie</label>
                        <select name="movie" class="form-control">
                            <option value="">Select Movie</option>
                            <?php
                            $mv = mysqli_query($con, "SELECT * FROM tbl_movie WHERE status='0'");
                            while ($movie = mysqli_fetch_array($mv)) {
                                echo "<option value='{$movie['movie_id']}'>{$movie['movie_name']}</option>";
                            }
                            ?>
                        </select>
                        <?php $frm->validate("movie", ["required", "label" => "Movie"]); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Select Screen</label>
                        <select name="screen" class="form-control" id="screen">
                            <option value="">Select Screen</option>
                            <?php
                            $sc = mysqli_query($con, "SELECT * FROM tbl_screens WHERE t_id='{$_SESSION['theatre']}'");
                            while ($screen = mysqli_fetch_array($sc)) {
                                echo "<option value='{$screen['screen_id']}'>{$screen['screen_name']}</option>";
                            }
                            ?>
                        </select>
                        <?php $frm->validate("screen", ["required", "label" => "Screen"]); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Select Show Times</label>
                        <select name="stime[]" class="form-control" id="stime" multiple>
                            <option value="0">Select Show Times</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input type="date" name="sdate" class="form-control"/>
                        <?php $frm->validate("sdate", ["required", "label" => "Start Date"]); ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add Show</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

<?php include('footer.php'); ?>

<script type="text/javascript">
    $('#screen').change(function () {
        var screen = $(this).val();
        $.ajax({
            url: 'get_showtime.php',
            type: 'POST',
            data: { screen: screen },
            dataType: 'html'
        })
        .done(function (data) {
            $('#stime').html(data);
        })
        .fail(function () {
            $('#stime').html('<option><i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...</option>');
        });
    });
</script>
<script>
    <?php $frm->applyvalidations("form1"); ?>
</script>
