<?php
include "./includes/header.php";
?>




<!-- Carousel Container -->
<div class="img_slider_section"> <!-- Adjust based on your header height -->
  <div id="carouselExampleFade" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner cor_med" id="bb">

      <div class="carousel-item active">
        <img src="assets/img/gynaecology/9.png" class="d-block w-100 img-fluid" alt="...">
      </div>

      <div class="carousel-item">
        <img src="assets/img/gynaecology/16.png" class="d-block w-100 img-fluid" alt="...">
      </div>

      <div class="carousel-item">
        <img src="assets/img/gynaecology/1.png" class="d-block w-100 img-fluid" alt="...">
      </div>

      <div class="carousel-item">
        <img src="assets/img/gynaecology/2.png" class="d-block w-100 img-fluid" alt="...">
      </div>

      <div class="carousel-item">
        <img src="assets/img/gynaecology/3.png" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>

    <!-- Carousel Controls (optional if you want arrows) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll(".carousel-item");
    const totalSlides = slides.length;
    const intervalTime = 3000; // 3 seconds auto-slide
    let slideInterval;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) {
          slide.classList.add("active");
        }
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      showSlide(currentIndex);
    }

    document.querySelector(".carousel-control-next").addEventListener("click", function() {
      nextSlide();
      resetInterval();
    });

    document.querySelector(".carousel-control-prev").addEventListener("click", function() {
      prevSlide();
      resetInterval();
    });

    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, intervalTime);
    }

    function resetInterval() {
      clearInterval(slideInterval);
      startAutoSlide();
    }

    startAutoSlide();
  });
</script>





<section class="cs_cta cs_style_1 copy_bg  position-relative overflow-hidden">
  <div class="container">
    <div class="cs_cta_in">
      <div class="cs_cta_left">
        <div class="cs_cta_thumb wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <img src="assets/img/medam.png" alt="">
        </div>
        <div class="cs_cta_info">
          <h2 class="cs_cta_title"> Advanced Gynecological Care for Women's Health and Well-being </h2>
          <p class="cs_cta_subtitle">Advanced Treatments Ensuring Comfort and Well-being</p>
        </div>
      </div>
      <div class="cs_cta_right">
        <a href="appointments.php" class="cs_btn cs_style_1 cs_color_3">
          <span>Booking Now </span>
          <i class="fa-solid fa-angles-right"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="cs_cta_shape"></div>
</section>

<section class="cs_about cs_style_1 position-relative">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row align-items-center cs_gap_y_40">
      <div class="col-lg-6">
        <div class="cs_about_thumb">
          <div class="cs_about_thumb_1">
            <img src="assets/img/Untitled design (1).png" alt="">
            <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_about_player_btn cs_video_open">
              <span class="cs_player_btn cs_center">
                <span></span>
              </span>
              <!-- <span class="cs_about_play_btn_text">How We Work</span> -->
            </a>
          </div>
          <div class="cs_about_thumb_2">
            <img src="assets/img/about_img.png" alt="About Image">
            <img src="assets/img/icons/about_shape_1.png" alt="Shape Image" class="cs_about_thumb_shape_2">

          </div>
          <div class="cs_experience_box cs_center">
            <p class="cs_experience_box_number">15+</p>
            <p class="cs_experience_box_title">Experience</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_about_content">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle text ">
              <span class="cs_shape_left  "></span>
              ABOUT US
            </p>
          </div>
          <p class="cs_about_text">Welcome to LEELA WOMEN’S HEALTH CARE…</p>
          <p class="cs_about_text">Founded by Dr.Priyanka Kosuru , a highly experienced and compassionate OB-GYN specialist with over 15 years of experience , Leela women’s health care is committed to delivering comprehensive obstetric and gynaecological care to women of all ages</p>
          <p class="cs_about_text">Located in the heart of Kakinada,our hospital is thoughtfully designed with modern interiors that offer comfort, privacy and calmness.We are equipped with the latest medical technology to ensure accurate diagnosis and advanced treatment for every patient.</p>

          <div class="cs_about_iconbox">
          </div>
          <a href="about.php" class=" ">
            <button class="contact_bg text-white">About More</button>

          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_section_img"><img src="assets/img/about_section_img_1.png" alt=""></div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>



<section class="cs_gray_bg">
  <div class="cs_height_110 cs_height_lg_70"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle text wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>
          OUR BEST SERVICE
        </p>
        <h2 class="cs_section_title">High-Quality Services </h2>
      </div>
      <div class="cs_section_heading_right">We provide high-quality gynecological services with advanced care and expertise.
        Our focus is on women's health, comfort, and well-being at every stage</div>
    </div>
    <div class="cs_height_50 cs_height_lg_50"></div>
    <div class="row cs_row_gap_30 cs_gap_y_30">
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="pcodandadolscent.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15 cs_hover_layer_2">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/female.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">01</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="pcodandadolscent.php">PCOD and Adolscent Clinics</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6  ">
        <a href="menstrualproblems.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/egg.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">02</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="menstrualproblems.php">Menstrual Problems</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="infertility.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/pregnancy-test.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">03</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="infertility.php">Infertility</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="perconceptionalcare.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/sperm.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">04</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="perconceptionalcare.php">Preconceptional Care</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="menopausalclinic.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/no_steroids.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">05</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="menopausalclinic.php">Menopausal Clinic</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="wellwomencheckup.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/woman.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">06</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="wellwomencheckup.php">Well Women Check up</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="cancerscreening.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/cancer_screening.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">07</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="cancerscreening.php">Cancer Screening</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-sm-6">
        <a href="allgynaecological.php">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/gynecology.png" alt="Service Icon">
              </div>
              <h3 class="iconbox_index">08</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href="allgynaecological.php">All gynaecological problems</a></h3>
            <!-- <p class="cs_iconbox_subtitle m-0">Medical competitor research startup to financial</p> -->
          </div>
        </a>
      </div>
    </div>


    <div class="cs_service_footer">

    </div>
  </div>
  <div class="home_readmore">
    <a href="service.php">
      <button class="contact_bg  ">Read More </button>

    </a>
  </div>
</section>







<section class="gallery_section">
  <div class="container">
    <h1 class="text-center my-5">Gallery</h1>
    <div class="row g-5">
      <div class="col-md-4 col-12 ">
        <img src="assets/img/gynaecology/20.png" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img src="assets/img/gynaecology/21.png" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img src="assets/img/gynaecology/22.png" alt="">
      </div>

      <div class="col-md-4 col-12">
        <img src="assets/img/gynaecology/23.png" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img src="assets/img/gynaecology/24.png" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img src="assets/img/gynaecology/25.png" alt="">
      </div>
    </div>
  </div>
</section>





<section class="cs_contact">
  <div class="cs_height_110 cs_height_lg_70"></div>
  <div class="container">
    <div class="row cs_gap_y_30">
      <div class="col-lg-6">
        <div class="cs_contact_thumbnail cs_pr_40">

          <div class="cs_contact_img">
            <img src="assets/img/medam_img.png" alt="Image">
          </div>
          <div class="cs_contact_bg_shape">
            <div class="cs_white_bg_shape"></div>
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/health-professional.png" alt="Icon" style="border-radius: 10px;"></div>
              <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title">Dr.Priyanka</h3>
                <p class="cs_iconbox_subtitle mb-0">Gynecologist</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="cs_section_heading cs_style_1">
          <p class="cs_section_subtitle text">
            <span class="cs_shape_left"></span>Bio
          </p>
          <h2 class="cs_section_title">Meet Our Specialist </h2>
        </div>
        <div class="cs_height_25 cs_height_lg_25"></div>
        <p>
          Dr.Priyanka Kosuru MBBS,MS <br>
          <strong> Experience - 15 years </strong> <br>
          She completed her MBBS from Rangaraya medical college in 2007 and MS from Andhra medical college in 2012.She is trained in ultrasound , infertility and laparoscopy.

        </p>
        <p>
          Her areas of expertise include High risk pregnancy care, PCOS management, Infertility treatments and Gynaecological surgeries.
        </p>
        <p>
          She continuously updates her skills and knowledge through participation in medical conferences and workshops ,brining the best of evidenced-based care to her practice.
        </p>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>




<section class="cs_gray_bg cs_bg_filed section_content"
  style="background-image: url('assets/img/why/3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

  <div class="cs_height_110 cs_height_lg_70"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="cs_section_heading cs_style_1">
          <p class="cs_section_subtitle text wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <span class="cs_shape_left"></span> WHY CHOOSE US
          </p>
          <h2 class="cs_section_title text-white">Expert gynecological care with personalized treatment for women's health </span></h2>
        </div>
        <div class="cs_height_50 cs_height_lg_50"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xxl-7 col-xl-8 col-lg-9">
        <div class="cs_service_wrapper">
          <div class="cs_service_list">
            <div class="cs_iconbox cs_style_3">
              <div class="cs_iconbox_icon cs_center cs_radius_5">
                <img src="assets/img/icons/service_icon_9.png" alt="Icon">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title text-white">Service & Check </h3>
                <p class="cs_iconbox_subtitle text-white">Comprehensive service and checkups for optimal gynaecological health.</p>
              </div>
            </div>
            <div class="cs_iconbox cs_style_3">
              <div class="cs_iconbox_icon cs_center cs_radius_5">
                <img src="assets/img/icons/consultant.png" alt="Icon" style="width: 45px; height: 45px;">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title text-white">Medical Advices </h3>
                <p class="cs_iconbox_subtitle text-white">Expert medical advice for women's reproductive health and wellness</p>
              </div>
            </div>

            <div class="cs_iconbox cs_style_3">
              <div class="cs_iconbox_icon cs_center cs_radius_5">
                <img src="assets/img/icons/microscope.png" alt="Icon" style="width: 45px; height: 45px;">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title text-white">Medical Research </h3>
                <p class="cs_iconbox_subtitle text-white">Advancing gynaecological care through innovative medical research and studies.</p>
              </div>
            </div>
            <div class="cs_iconbox cs_style_3">
              <div class="cs_iconbox_icon cs_center cs_radius_5">
                <img src="assets/img/icons/doctor.png" alt="Icon style=" width: 45px; height: 45px;">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title text-white">Qualified Doctor</h3>
                <p class="cs_iconbox_subtitle text-white">Experienced qualified doctor offering specialized care for women’s health.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>






<section>
  <div class="cs_height_110 cs_height_lg_70"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 text-center">
      <!-- <p class="cs_section_subtitle text wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <span class="cs_shape_left"></span class="">Service Offerings<span class="cs_shape_right"></span>
      </p> -->
      <!-- <h2 class="cs_section_title">Explore Our Service<br> Offerings</h2> -->
    </div>
    <div class="cs_height_50 cs_height_lg_50"></div>
    <div class="cs_tabs">
      <ul class="cs_tab_links cs_style_1 cs_bold">
        <li class="active">
          <a href="#brain_althim">
            <span class="cs_tab_link_icon cs_center"><img src="assets/img/technology.png" alt="Icon"></span>
            <span>Modern Technology</span>
          </a>
        </li>
        <li>
          <a href="#emergency">
            <span class="cs_tab_link_icon cs_center"><img src="assets/img/experience.png" alt="Icon"></span>
            <span>Success of Treatment</span>
          </a>
        </li>
        <li>
          <a href="#heart_beat">
            <span class="cs_tab_link_icon cs_center "><img src="assets/img/health-professional.png" alt="Icon"></span>
            <span>Certified Doctor</span>
          </a>
        </li>
        <li>
          <a href="#blood_test">
            <span class="cs_tab_link_icon cs_center"><img src="assets/img/counseling.png" alt="Icon"></span>
            <span>Medical Advice</span>
          </a>
        </li>
      </ul>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="tab-content">
        <div id="brain_althim" class="cs_tab active">
          <div class="cs_card cs_style_2">
            <div class="row cs_gap_y_30 align-items-xl-center">
              <div class="col-lg-6">
                <div class="cs_card_thumb cs_radius_5">
                  <img src="assets/img/why/4.png" alt="Department Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="cs_card_text">
                  <!-- <h2 class="cs_card_title">We are here to hear and heal your</h2> -->
                  <p class="cs_card_subtitle">Advancements in medical technology have significantly improved the diagnosis, treatment, and management of gynecological conditions. These innovations enhance precision, reduce recovery times, and improve patient outcomes.
                  </p>
                  <ul class="cs_list cs_style_1 cs_mp0 ">
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon" class=""></i>
                      Uses small incisions and a camera for procedures like hysterectomy, ovarian cyst removal, and fibroid removal.
                    </li>
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Da Vinci Surgical System allows precise movements for complex procedures.
                      Used for hysterectomy, myomectomy, and endometriosis treatment.
                      Benefits: Higher precision, minimal blood loss, shorter hospital stay.
                    </li>

                  </ul>

                  <a href="service.php">
                    <button class="contact_bg">Read More </button>
                    <!-- <i class="fa-solid fa-angles-right"></i> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="emergency" class="cs_tab">
          <div class="cs_card cs_style_2">
            <div class="row cs_gap_y_30 align-items-xl-center">
              <div class="col-lg-6">
                <div class="cs_card_thumb cs_radius_5">
                  <img src="assets/img/why/6.png" alt="Department Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="cs_card_text">
                  <!-- <h2 class="cs_card_title">Treatment patients in primary care</h2> -->
                  <p class="cs_card_subtitle">Gynecology has seen significant advancements in medical treatments, Success in gynecological treatment depends on early diagnosis, modern medical technology, and personalized care.
                  </p>
                  <ul class="cs_list cs_style_1 cs_mp0">
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Lifestyle changes (diet, exercise) help manage symptoms in 70-80% of women.
                      Medications: Metformin and birth control regulate hormones and improve fertility
                    </li>
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Hormonal Therapy Reduces pain and slows tissue growth.
                      Laparoscopic Surgery Successfully removes endometrial tissue, improving fertility in 50% of cases.
                    </li>

                  </ul>

                  <a href="service.php">
                    <button class="contact_bg">Read More </button>
                    <!-- <i class="fa-solid fa-angles-right"></i> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="heart_beat" class="cs_tab">
          <div class="cs_card cs_style_2">
            <div class="row cs_gap_y_30 align-items-xl-center">
              <div class="col-lg-6">
                <div class="cs_card_thumb cs_radius_5">
                  <img src="assets/img/why/5.png" alt="Department Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="cs_card_text">
                  <!-- <h2 class="cs_card_title">Accreditation within a given specialty</h2> -->
                  <p class="cs_card_subtitle">A certified gynecologist is a medical professional specializing in women’s reproductive health, trained to diagnose, treat, and manage gynecological conditions, pregnancy, and childbirth. Certification ensures that the doctor has undergone extensive education, training, and examinations to provide high-quality care.
                  </p>
                  <ul class="cs_list cs_style_1 cs_mp0">
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Medical Degree (MBBS/MD/DO) – Completion of a general medical degree (5-6 years).
                      Postgraduate Specialization (MD/MS/DNB in Obstetrics & Gynecology) – A 3-4 year residency program specializing in gynecology and obstetrics.
                    </li>
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Antenatal & Postnatal Care: Monitoring fetal health and managing pregnancy complications.
                      Delivery & C-Sections: Assisting with normal and high-risk deliveries.
                    </li>

                  </ul>

                  <a href="service.php">
                    <button class="contact_bg">Read More </button>
                    <!-- <i class="fa-solid fa-angles-right"></i> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="blood_test" class="cs_tab">
          <div class="cs_card cs_style_2">
            <div class="row cs_gap_y_30 align-items-xl-center">
              <div class="col-lg-6">
                <div class="cs_card_thumb cs_radius_5">
                  <img src="assets/img/Untitled design (10).png" alt="Department Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="cs_card_text">
                  <!-- <h2 class="cs_card_title">Better Health While Aging health</h2> -->
                  <p class="cs_card_subtitle">Maintaining good gynecological health is essential for overall well-being. Regular checkups, early detection of conditions, and a healthy lifestyle can prevent many reproductive health issues. Here is medical advice on key aspects of gynecology, from menstruation to menopause.
                  </p>
                  <ul class="cs_list cs_style_1 cs_mp0">
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Schedule Regular Checkups Visit a gynecologist annually for screenings like Pap smears and pelvic exams.
                    </li>
                    <li>
                      <i><img src="assets/img/icons/check_icon_1.png" alt="Icon"></i>
                      Maintain Hygiene Wash the vaginal area with mild soap and water; avoid harsh chemicals or douching.
                    </li>

                  </ul>

                  <a href="service.php">
                    <button class="contact_bg">Read More </button>
                    <!-- <i class="fa-solid fa-angles-right"></i> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <hr>
</section>




<script>
  document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".cs_tab_links li");
    const tabContents = document.querySelectorAll(".cs_tab");

    tabs.forEach((tab) => {
      tab.addEventListener("click", function(e) {
        e.preventDefault();

        // Remove active class from all tabs
        tabs.forEach((t) => t.classList.remove("active"));
        // Hide all tab content
        tabContents.forEach((content) => content.classList.remove("active"));

        // Add active to clicked tab
        tab.classList.add("active");

        // Get the href of the anchor inside the tab (e.g. "#brain_althim")
        const target = tab.querySelector("a").getAttribute("href");
        const targetContent = document.querySelector(target);

        // Show the corresponding tab content
        if (targetContent) {
          targetContent.classList.add("active");
        }
      });
    });
  });
</script>

<!-- End Medical Tab Section -->
<!-- Start Medical Solution Section -->
<section class="cs_card cs_style_3 cs_section_bg position-relative">
  <div class="cs_height_110 cs_height_lg_70"></div>
  <div class="container">
    <div class="row cs_gap_y_40">

      <div class="col-lg-4">
        <div class="cs_section_heading cs_style_1">
          <p class="cs_section_subtitle text">
            <span class="cs_shape_left"></span>CONTACT US
          </p>
          <h2 class="cs_section_title">Make An Appointment <br>Apply For Treatments</h2>
        </div>
        <div class="cs_height_25 cs_height_lg_25"></div>
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
              <option value="high risk pregnancy">High Risk Pregnancy</option>
              <option value="ultrasound scanning">Ultrasound Scanning </option>
              <option value="electronic fetal monitoring">Electronic Fetal Monitoring </option>
              <option value="lactational consultation">Lactational Consultation </option>
              <option value="pain less delivery">Pain Less Delivery </option>

            </select>
          </div>
          <div class="col-md-12">
            <input type="date" name="date" class="cs_form_field" placeholder="Appointment date & time">
          </div>
          <div class="col-md-12">
            <button type="submit" class="cs_btn cs_style_1 cs_white_color">Make an Appointment</button>
          </div>
        </form>
      </div>

      <div class="col-lg-8">
        <div class="cs_solution_thumbnail cs_bg_filed">
          <img src="assets/img/appointment1.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>




<script>
  var swiper = new Swiper(".custom-slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerslide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".custom-swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    autoplay: {
      delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
      disableOnInteraction: false, // Keeps autoplay active even after manual swiping
    },
    navigation: {
      nextEl: ".swiper-button-next.custom-swiper-navBtn",
      prevEl: ".swiper-button-prev.custom-swiper-navBtn",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
  });
</script>










<section>
  <div class="container">

    <h1 class="text-center">Frequently Ask Question (FAQ)</h1>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="accordion">
          <!-- Accordion 1 -->
   












          <div class="faq_section">

<div class="accordion-header" onclick="toggleAccordion(this)">
  <h2 class="faq_heading_section">Is Leela Gynic Hospital the best women’s hospital in Kakinada?


  </h2>
  <h2 class="accordion-icon">+</h2>
</div>
<div class="accordion-content">
  <p>
    We are one of Kakinada's most trusted gynecology hospitals, known for personalized care, modern infrastructure, and experienced specialists in women’s healthcare
</div>
</div>



<div class="faq_section">

<div class="accordion-header" onclick="toggleAccordion(this)">
  <h2 class="faq_heading_section"> Do you offer fertility treatment at your hospital?

  </h2>
  <h2 class="accordion-icon">+</h2>
</div>
<div class="accordion-content">
  <p>
    Yes, we offer initial fertility consultations, ovulation induction, hormonal evaluations, and advanced fertility counseling for couples trying to conceive
</div>
</div>




          <!-- Accordion 3 -->
          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">What causes irregular periods in women?

              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                Irregular periods can be caused by stress, weight changes, thyroid issues, PCOD/PCOS, or hormonal imbalances. It’s important to identify the root cause through medical evaluation
            </div>
          </div>

          <!-- Accordion 4 -->
          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">How often should I visit a gynecologist?


              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                Women should visit a gynecologist annually or sooner if experiencing irregular periods, severe cramps, unusual discharge, fertility concerns, or menopause symptoms
              </p>
            </div>
          </div>
          <!-- Accordion 5 -->
          <!-- <div class="faq_section">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <h2 class="faq_heading_section">Can cancer be prevented?
                </h2>
                <h2 class="accordion-icon">+</h2>
              </div>
              <div class="accordion-content">
                <p>
                  Not all cancers are preventable, but up to 30-50% of cases can be avoided through healthy lifestyle choices, regular screenings, vaccinations (like HPV), and avoiding carcinogens such as tobacco and processed foods
                </p>
              </div> 
            </div>-->

        </div>

      </div>
      <div class="col-12 col-md-6">


        <div class="accordion">
          <!-- Accordion 1 -->

          <!-- Accordion 2 -->



          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">How do I know if I have PCOD or PCOS?

              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                Common signs include irregular periods, excessive facial hair, acne, weight gain, and difficulty getting pregnant. An ultrasound and hormone test can help confirm the diagnosis
            </div>
          </div>
          <!-- Accordion 2 -->



          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">Can I get pregnant if I have PCOD/PCOS?


              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                Yes, many women with PCOD/PCOS can conceive with the right treatment. Lifestyle changes, fertility medications, and hormone management significantly improve the chances of pregnancy.
            </div>
          </div>
         


          <!-- Accordion 3 -->
          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">What services are offered at Leela Gynic Hospital, Kakinada?

              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                At Leela Gynic Hospital, we offer complete women’s healthcare services including antenatal care, normal and C-section deliveries, PCOS/PCOD treatment, menstrual disorder management, fertility consultations, and advanced gynecological surgeries
            </div>
          </div>
          <!-- Accordion 4 -->
          <div class="faq_section">
            <div class="accordion-header" onclick="toggleAccordion(this)">
              <h2 class="faq_heading_section">Who is the best gynecologist in Kakinada?
              </h2>
              <h2 class="accordion-icon">+</h2>
            </div>
            <div class="accordion-content">
              <p>
                Dr. Priyanka at Leela Gynic Hospital is regarded as one of the best gynecologists in Kakinada. With extensive experience in women’s health, she specializes in high-risk pregnancies, fertility issues, PCOS/PCOD treatment, and menstrual disorders. Her patient-centered approach and clinical expertise have made her a trusted name in gynecological care
            </div>
          </div>
          <!-- Accordion 5 -->
          <!-- <div class="faq_section">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <h2 class="faq_heading_section"> Can cancer be cured if detected early?
                </h2>
                <h2 class="accordion-icon">+</h2>
              </div>
              <div class="accordion-content">
                <p>
                  Yes, many types of cancer can be effectively treated or even cured if detected at an early stage. Regular screenings, awareness of symptoms, and early intervention improve survival rates significantly
                </p>
              </div>
            </div> -->

        </div>
      </div>
    </div>
  </div>
</section>






<script>
  function toggleAccordion(header) {
    const content = header.nextElementSibling;
    const icon = header.querySelector(".accordion-icon");

    content.classList.toggle("open");
    icon.classList.toggle("rotate");

    icon.textContent = content.classList.contains("open") ? "−" : "+";
  }
</script>







<?php include "./includes/footer.php";
?>