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
        <form class="row g-3">
            <div class="col-12 my-2">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="text" class="form-control" id="Name" placeholder="Name">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="email" class="form-label">E-mail</label> -->
                <input type="email" class="form-control" id="E-mail" placeholder="E-mail">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="subject" class="form-label">Subject</label> -->
                <input type="text" class="form-control" id="Subject" placeholder="write your subject">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="complaint" class="form-label">Complaint</label> -->
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write your complaint"></textarea>
            </div>
            <div class="col-1  mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    
    </div>
</section>