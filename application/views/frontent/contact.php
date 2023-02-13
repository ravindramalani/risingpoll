<style>
h1{
    font-size:2rem;
    color: #1F5AB2;
    text-align: center;
    margin:20px 0;
}
@media (min-width:767px) {
    .w-75{
        width: 60%!important;
    }
}

@media (max-width:767px) {
    .w-75{
        width: 95%!important;
    }
}
</style>



<section class="mt-4 mb-3">
    <div class="border w-75 m-auto p-3 "> 
        <h1>Contact us</h1>   
        <?php?>
        <form class="row g-3" action="<?= base_url('manage/contact_data') ?>" method="POST">
            <div class="col-12 my-2">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="text" class="form-control" id="name" value="<?= set_value('name');?>" name="name" placeholder="Name">
                <?= form_error('name'); ?>
            </div>
            <div class="col-12 my-2">
                <!-- <label for="email" class="form-label">E-mail</label> -->
                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email');?>" placeholder="E-mail">
                <?= form_error('email'); ?>
            </div>
            <div class="col-12 my-2">
                <!-- <label for="subject" class="form-label">Subject</label> -->
                <input type="text" class="form-control" id="subject" name="subject" value="<?= set_value('subject');?>" placeholder="write your subject">
                <?= form_error('subject'); ?>
            </div>
            <div class="col-12 my-2">
                <!-- <label for="complaint" class="form-label">Complaint</label> -->
                <textarea class="form-control" id="Textarea1" name="message" rows="3" value="<?= set_value('message');?>" placeholder="write your complaint"></textarea>
                <?= form_error('message'); ?>
            </div>
            <div class="col-1  mx-auto">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>