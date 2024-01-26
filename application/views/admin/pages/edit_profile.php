<div class="content-wrapper" style="min-height: 369px;">
    <section class="content-header">
        <h1>Edit Profile</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open_multipart('login/update_profile'); ?>
                            <div class="form-group">
                                <label>Username * : </label>
                                <input type="text" class="form-control" value="<?=$username?>" name="username" id="" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Old Password * : </label>
                                <input type="password" class="form-control" value="" name="old_password" id="" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <label>New Password * : </label>
                                <input type="password" class="form-control" value="" name="new_password" id="" placeholder="New Password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>