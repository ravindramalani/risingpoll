<style>
.hc-100{
    height : 100vh ;
}
.wc-m{
    width : 25% !important;
  }
.bg-dark{
    background-color: var(--main_color)!important;
}
.scroller {
  overflow: auto;
  height: 100vh;
  width : 75% ;
}
.unstyled{
    list-style-type: none;
}
.links{
    background : white;
    margin : 5px 0;
    text-align : center;
    padding : 0.50rem 0;
}
.nav-item a{
    color : black;
}
hr{
    background-color : white;
}
.dataTables_paginate {
    margin-top: 15px;
    position: absolute;
    text-align: center;
    left: 0%;
}
.btn-col{
    color :var(--main_color)!important;
}
@media only screen and (max-width: 600px) {
  .wc-m{
    width : 40% !important;
  }
  .scroller{
    width : 60% ;
  }
}
</style>

<section>
    <div class="row m-0">
        <div class="col-md-2 wc-m p-1 hc-100 bg-dark">
        <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item links">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="fa fa-flag mx-2"></i> Polls
                    </a>
                </li>
                <li class="nav-item links">
                    <a href="<?= base_url('create') ?>">
                        <i class="fa fa-flag mx-2"></i> Create poll
                    </a>
                </li>
                <li class="nav-item links">
                    <a href="<?= base_url('dashboard/profile') ?>">
                        <i class="fa fa-user mx-2"></i> Profile
                    </a>
                </li>
                <li class="nav-item links">
                    <a href="<?php echo base_url('dashboard/logout'); ?>">
                        <i class="fa fa-user mx-2"></i> Logout
                    </a>
                </li>
                <li class="nav-item text-white py-4 text-center">
                        <i class="fa fa-eye mx-2"></i> <?= $view ?>
                </li>
            </ul>
        </div>
        <div class="col-md-10 scroller p-3">