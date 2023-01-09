
<div class="py-5 m-auto">
    <form method="post" action="<?= base_url('dashboard/update_user') ;?>">
        <div class="input-group my-2">
            <input class="form-control" <?= $profile['name']? 'value="'.$profile['name'].'"' : 'gfg' ?> type="text" name="txtname" placeholder="Name">
        </div>
        <div class="input-group my-2">
            <input class="form-control" <?= $profile['name']? 'value="'.$profile['email'].'"' : 'gfg' ?> type="text" name="txtemail" placeholder="Email">
        </div>
        <div class="input-group my-2">
            <input class="form-control" type="text" name="txtpassword" placeholder="New Password">
        </div>
        <div class="input-group my-2 text-center">
            <button class="btn btn-primary" type="submit" value="Update ">Update</button>
        </div>
    </form>
</div>
</div>
</section>