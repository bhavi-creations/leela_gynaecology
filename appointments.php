<?php
   include "./includes/header.php";
   ?>
  <!-- End Header Section -->
  <!-- Start Page Heading -->
  <!-- <section class="cs_page_heading cs_bg_filed cs_center " data-src="assets/img/app.png" alt="Image"> -->
  <!-- <img src="assets/img/gynaecology/12.png" class="d-block w-100 img-fluid" alt="..."> -->
  <img src=" assets/img/gynaecology/17.png" alt="" class="img-fluid">
  
    <div class="container">
      <!-- <h1 class="cs_page_title">Appointments</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Appointments</li>
      </ol> -->
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Appointment Section -->
  <section class="cs_appointment">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 ">
        <div class="cs_appointment_form_wrapper">
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle text">
            <span class="cs_shape_left text"></span>MAKE APPOINTMENTS<span class="cs_shape_right text"></span>
          </p>
          <h2 class="cs_section_title"> Appointments</h2>
        </div>
        <div class="cs_height_40 cs_height_lg_35"></div>
        <form action="appointmentform.php" method="post" role="form" class="cs_appointment_form row cs_gap_y_30">
          <div class="col-md-6">
            <input type="text" name="name" class="cs_form_field" placeholder="Name">
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="cs_form_field" placeholder="Email">
          </div>
          <div class="col-md-12">
            <input type="text" name="address" class="cs_form_field" placeholder="Address">
          </div>
          <div class="col-md-12">
            <select name="service" class="cs_form_field">
              <option value="choose-service">Choose Service</option>
              <option value="pcod-and-adolscent-clinics">PCOD and Adolscent Clinics</option>
              <option value="menstrual-problems">Menstrual Problems</option>
              <option value="infertility">Infertility</option>
              <option value="preconceptional-cCare">Preconceptional Care</option>
              <option value="menopausal-clinic">Menopausal Clinic</option>
              <option value="well-woman-check-up">Well Woman Check up</option>
              <option value="cancerscreening">CancerScreening</option>
              <option value="all-gynaecological-problem">All Gynaecological Problems </option>
              <option value="comprehensive-antenatal-and-post-natal-care">Comprehensive antenatal and post natal care</option>
              <!-- <option value="neurology">Neurology</option>
              <option value="neurology">Neurology</option>
              <option value="neurology">Neurology</option> -->

            </select>
          </div>
          <div class="col-md-12">
            <input type="date" name="date" class="cs_form_field" placeholder="Appointment date & time">
          </div>
          <div class="col-md-12">
            <button type="submit" class="cs_btn cs_style_1 cs_white_color">Make an appoinment</button>
          </div>
        </form>
      </div>
        </div>
        <div class="col-12 mt-5">
        <div class="cs_location_map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4135.043051429366!2d82.23027846937303!3d16.961447026145862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a382814c71abf81%3A0xe2ceca2bc87008ab!2sD%2C%20No.%202-18-9%2F1%2C%20opposite%20to%20SP%20OFFICE%20ROAD%2C%20near%20RMC%20GROUND%2C%20Madhav%20Nagar%2C%20Dwaraka%20Nagar%2C%20Kakinada%2C%20Andhra%20Pradesh%20533001!3m2!1d16.9753224!2d82.24061119999999!5e0!3m2!1sen!2sin!4v1738581300683!5m2!1sen!2sin" ></iframe>
      </div>
        </div>
     
      </div>

    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Appointment Section -->
  <!-- Start Footer -->
  <?php include "./includes/footer.php"; 
?>