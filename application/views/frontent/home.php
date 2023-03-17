<style>
    #main #faq .card .card-header .btn-header-link:after {
      content: "\f107";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      float: right;
    }
    .arrow-right{
      border-top: 39px solid transparent;
      border-bottom: 39px solid transparent;
      border-left: 40px solid #1f5ab2;
    }
    .modal {
      display: block; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
</style>
    <div class="container">
      <div class="row">
        <div class="col-md-5 fronthdng">
          <h1 class="pollhdng">Create Poll and Get Rewarded</h1>
          <p class="pollpara">
            Now get everyone’s opinion faster than ever and get rewarded for it.
          </p>
          <div class="towbtn txtc mgt30 row">
            <div class="col-md-6">
              <a href="<?= base_url('create') ?>" class="btn btn-lg bgblk blkbtn">
                Create Poll
                </a>
            </div>
            <div class="col-md-5">
              <button type="button" class="btn btn-lg bgwht whtbtn">
                Learn how
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 frontimg mg40">
          <img class="frontphoto" src="<?= base_url() ?>assets/Group_10.svg" />
        </div>
      </div>
    </div>
    <div class="infodiv py-5">
      <h1 class="infohdng">What you can do with RisingPoll?</h1>
      <div class="container msgdiv">
        <div class="row my-5">
          <div class="col-md-4 mainmsgdiv">
            <div class="msg">
              <img class="msgicon" src="<?= base_url() ?>assets/facebook_polls.svg" />
              <h1 class="msghdng">Create Poll</h1>
              <p class="msgpara">
                Want to know which soccer player is the best or who should be the
				        team leader? Create polls and get everyone's opinion in no time.
              </p>
            </div>
          </div>
          <div class="col-md-4 mainmsgdiv">
            <div class="msg">
              <img class="msgicon" src="<?= base_url() ?>assets/political_polls.svg" />
              <h1 class="msghdng">Graphical Result</h1>
              <p class="msgpara">
                Not everyone likes numbers and we knew that, so we made a bar 
				      graph of your result for better understanding.
              </p>
            </div>
          </div>
          <div class="col-md-4 mainmsgdiv">
            <div class="msg">
              <img class="msgicon" src="<?= base_url() ?>assets/customer_review_survey.svg" />
              <h1 class="msghdng">Answer Anonymously</h1>
              <p class="msgpara">
				Many great opinions were never given for lack of courage. 
				With us, people can give honest opinions anonymously.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container stepdiv">
      <h1 class="stephdng">Steps to Create Poll</h1>
      <p class="steppara">
        Simplicity is the key feature of RisingPoll, but we also offer advanced 
		features for users so they can customize polls for different purposes.
      </p>
    </div>
    <!-- steps part along with ribbon -->

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="rel d-flex">
            <div class="ribbon-name text-white w-50 px-2 h4 my-5">
              <p class="arrowhdng">Create Poll</p>
            </div>
            <div class="arrow-right my-5"></div>
          </div>
          <p class="arrowpara">
            You can easily create your own poll on our platform without any 
			registration. But if you want to change them in the 
			future We recommend registering with us.
          </p>
        </div>
        <div class="col-md-6 text-center">
          <img class="w-75" src="<?= base_url() ?>assets/Group_1.svg" />
        </div>
      </div>
    </div>
    <div class="path text-center ">
      <img class="w-25" src="<?= base_url() ?>assets/image_3.svg" />
    </div>
    <!-- end 1 -->

    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center disnn hide-m">
          <img class="w-75" src="<?= base_url() ?>assets/Group_2.svg" />
        </div>
        <div class="col-md-6">
          <div class="rel d-flex">
            <div class="arrow-flip my-5"></div>
            <div class="ribbon-right text-white px-2 w-50 h4 my-5">
              <p class="arrowblkhdng">See Results</p>
            </div>
          </div>
          <p class="arrowpara">
            After you've created your poll and shared it with everyone, 
			you'll need to wait for everyone to respond. If you are a 
			registered user, you can view the result of your created 
			poll at any time and otherwise you can view it only on the 
			device from which it was created.
          </p>
        </div>
        <div class="col-md-6 text-center m-img">
          <img class="w-75" src="<?= base_url() ?>assets/Group_2.svg" />
        </div>
      </div>
    </div>
    <div class="path text-center">
      <img class="w-25 flip" src="<?= base_url() ?>assets/image_3.svg" />
    </div>
    <!-- end 2 -->
    <div class="container laststepimg">
      <div class="row">
        <div class="col-md-6">
          <div class="rel d-flex">
            <div class="ribbon-name text-white px-2 w-50 h4 my-5">
              <p class="arrowhdng">Get Rewarded</p>
            </div>
            <div class="arrow-right my-5"></div>
          </div>
          <p class="arrowpara">
            You can also make money by creating your own poll if 
			your created poll reaches the number of users specified
			in our Monetization Policy. Read our Monetization Policy
			for more details on this.
          </p>
        </div>
        <div class="col-md-6 text-center">
          <img class="w-75" src="<?= base_url() ?>assets/winning-3.svg" />
        </div>
      </div>
    </div>
    <!-- end 3 -->

    <!-- <din class="container divmonitize">
        <h1 class="monihdng text-center">Start Monetize your polls</h1>
        <p class="monipara text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat
            vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et
            tristique purus efficitur.</p>
            <div class="row">
                <div class="col-md-4 monimsgdiv text-center">
                    <img src="<?= base_url() ?>assets/get-view-icon.svg" alt="Get View Icon">
                    <p class="monipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur </p>
            </div>
            <div class="col-md-4 monimsgdiv text-center">
                <img src="<?= base_url() ?>assets/Start_Monetization_icon.svg" alt="Start Monetization">
                <p class="monipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur </p>
            </div>
            <div class="col-md-4 monimsgdiv text-center">
                <img src="<?= base_url() ?>assets/earn_rewards_icon.svg" alt="Earn Rewards">
                <p class="monipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur </p>
            </div>
        </div>
    </din> -->

    <!-- Poll monitizing divs -->

    <!-- <div class="infodiv py-5">
      <h1 class="infohdng">Start Monetizing Your Polls</h1>
      <div class="container msgdiv">
        <div class="row my-5">
          <div class="col-md-4 mainmsgdiv">
            <div class="monimsg text-center">
              <img class="msgicon" src="<?= base_url() ?>assets/get-view-icon.svg" />
              <h1 class="msghdng">Get Views</h1>
              <p class="msgpara">
                More views means more money but for that you have to fulfill Monetization Criteria.
              </p>
            </div>
          </div>
          <div class="col-md-4 mainmsgdiv">
            <div class="monimsg text-center">
              <img class="msgicon" src="<?= base_url() ?>assets/start_monetization_icon.svg" />
              <h1 class="msghdng">Start Monetization</h1>
              <p class="msgpara">
                Once you are eligible for monetization, all polls you create after that will be monetized. 
              </p>
            </div>
          </div>
          <div class="col-md-4 mainmsgdiv">
            <div class="monimsg text-center">
              <img class="msgicon" src="<?= base_url() ?>assets/earn_rewards_icon.svg" />
              <h1 class="msghdng">Earn Rewards</h1>
              <p class="msgpara">
                Once you meet the monthly payment limit, you will be paid every month
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Questions Div -->

    <!-- <div class="quediv">
        <div class="container">
            <h1 class="quehdng">Have questions ?</h1>
            <p class="quepara">Let's do our best to answer your most frequently asked questions</p>
            <p>
                <button class="btn btn-primary quebtn dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                    There are many variations of passages of Lorem Ipsum available ?
                </button>
              </p>
              <div class="collapse" id="collapse">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et tristique purus efficitur. 
                </div>
              </div>
            <p>
                <button class="btn btn-primary quebtn dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    There are many variations of passages of Lorem Ipsum available ?
                </button>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et tristique purus efficitur. 
                </div>
              </div>
            <p>
                <button class="btn btn-primary quebtn dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    There are many variations of passages of Lorem Ipsum available ?
                </button>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et tristique purus efficitur. 
                </div>
              </div>
            <p>
                <button class="btn btn-primary quebtn dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    There are many variations of passages of Lorem Ipsum available ?
                </button>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et tristique purus efficitur. 
                </div>
              </div>
            <p>
                <button class="btn btn-primary quebtn dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    There are many variations of passages of Lorem Ipsum available ?
                </button>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur erat vel leo ultrices, sed sagittis mi consectetur. Mauris tristique mauris sit amet mauris elementum, et tristique purus efficitur. 
                </div>
              </div>
        </div>
    </div> -->

    <div id="main">
      <div class="container">
        <div class="quediv">
          <div class="container">
            <h1 class="quehdng">Have questions?</h1>
            <p class="quepara">
              Let's do our best to answer your most frequently asked questions
            </p>
            <div class="accordion" id="faq">
              <div class="card">
                <div class="card-header" id="faqhead1">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#faq1"
                    aria-expanded="true"
                    aria-controls="faq1"
                    >Do I need to be a registered user to create a poll?</a
                  >
                </div>

                <div
                  id="faq1"
                  class="collapse show"
                  aria-labelledby="faqhead1"
                  data-parent="#faq"
                >
                  <div class="card-body">
                    No, you can also create polls without registering,
					but you will only be able to view your results on
					the device you created the poll from, nor will you
					be able to edit or delete that poll. But if you are
					a registered user then you will get all these facilities.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqhead2">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#faq2"
                    aria-expanded="true"
                    aria-controls="faq2"
                    >How to create poll in WhatsApp?</a
                  >
                </div>

                <div
                  id="faq2"
                  class="collapse"
                  aria-labelledby="faqhead2"
                  data-parent="#faq"
                >
                  <div class="card-body">
					If you have its updated version then you can also create 
					poll directly on whatsapp but you will not get some advanced features
					 which are provided by Rising Poll.So create your poll with us and share 
					 it on whatsapp.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqhead3">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#faq3"
                    aria-expanded="true"
                    aria-controls="faq3"
                    >What is RisingPoll?</a
                  >
                </div>

                <div
                  id="faq3"
                  class="collapse"
                  aria-labelledby="faqhead3"
                  data-parent="#faq"
                >
                  <div class="card-body">
                 RisingPoll is an online platform/website that allows users to create polls and
				Share it on multiple social media platforms to know public opinion. It can be
				used to play fun quizzes with friends or do some surveys in the office, it is
				suitable for everyone.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqhead4">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#faq4"
                    aria-expanded="true"
                    aria-controls="faq4"
                    >What is the minimum payment withdrawal limit?</a
                  >
                </div>

                <div
                  id="faq4"
                  class="collapse"
                  aria-labelledby="faqhead4"
                  data-parent="#faq"
                >
                  <div class="card-body">
                    The minimum withdrawal limit is INR 5000. once you reach your
					Minimum Payment Limit This will be credited to your provided 
					bank details in the next payment cycle.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqhead5">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#faq5"
                    aria-expanded="true"
                    aria-controls="faq5"
                    >Can I delete or edit my poll?</a
                  >
                </div>

                <div
                  id="faq5"
                  class="collapse"
                  aria-labelledby="faqhead5"
                  data-parent="#faq"
                >
                  <div class="card-body">
                    Yes, as long as you are a registered user, 
					you can edit or delete a poll you have created. 
					If you are not a registered user and want to 
					delete your poll then send a screenshot of your 
					poll ID and a screenshot of the result page to 
					the given email id on the contact us page. We 
					will remove your poll. This process can take 
					up to 1 week to proceed.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ---------------------CONTACT DIV---------------------- -->

        <div class="container">
          <div class="row">
            <div class="col-md-5 contactdiv">
              <h1 class="contacthdng">Let's Connect <br />with us</h1>
              <p class="contactpara">
                Discuss your query with us, It will help us to build a strong platform.
              </p>
            </div>
            <div class="col-md-7 condiv">
              <form method="post" action="<?= base_url('manage/contact_support'); ?>" class="formdiv">
                <label class="formhdng">Enter your details to contact</label>
                <?php if($this->session->flashdata('contact_field_message')):?>
                <div class="text-center">
                    <p class="text-danger"><?= $this->session->flashdata('contact_field_message'); ?></p>
                </div>
                <?php endif; ?>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter your Full Name"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Enter your email address"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    placeholder="Enter Subjet"
                  />
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="3"
                    placeholder="Write your message"
                  ></textarea>
                </div>
                <button type="submit" class="btn submitbtn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($this->session->flashdata('contact_msg')):?>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content text-center">
          <p><?= $this->session->flashdata('contact_msg') ?></p>
          <a class="close_btn btn btn-primary m-auto w-25">Close</a>
        </div>

        </div>
        <script>
          var span = document.getElementsByClassName("close_btn")[0];
          var modal = document.getElementById("myModal");
          span.onclick = function() {
          modal.style.display = "none";
        }
        </script>
    <?php endif; ?>
    <!-- -------------------------------Futtter Div----------------------------------->
