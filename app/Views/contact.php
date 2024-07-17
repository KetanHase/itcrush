<?php include('header.php'); ?>
<?php include('head.php'); ?>
<body class="sub_page">
  <!-- contact section -->

  <section class="contact_section contact_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2"> 
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="<?= base_url('Contact/create') ?>" method="post">
              <div>
                <input type="text" name="name"  placeholder="Name" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="phone" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

     
     
  </section>

  <!-- end contact section -->

  <!-- info section -->
  

  <!-- end info_section -->

  <!-- footer section -->
   
  <!-- footer section -->
  <?php include('foot.php'); ?>
  <?php include('footer.php'); ?>

</body>