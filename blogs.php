<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>






<?php
include "./includes/header.php";
?>
<!-- End Header Section -->
<!-- Start Page Heading -->
<!-- <section class="cs_page_heading cs_bg_filed cs_center" data-src="assets/img/service.png"> -->
  <div class="container">
    <!-- <h1 class="cs_page_title">Blog Page</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Blog Page</li>
      </ol> -->
  </div>
</section>
<!-- End Page Heading -->
<!-- Start Blog Section -->

  <main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-5">
      <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
      <a href="blogs.php?service=PCOD and Adolscent Clinics"><button class="redirect_blog_srivice">PCOD and Adolscent Clinics</button></a>
      <a href="blogs.php?service=Menstrual Problems"><button class="redirect_blog_srivice">Menstrual Problems</button></a>
      <a href="blogs.php?service=Infertility"><button class="redirect_blog_srivice">Infertility</button></a>
      <a href="blogs.php?service=Preconceptional Care"><button class="redirect_blog_srivice"> Preconceptional Care</button></a>
      <a href="blogs.php?service=Menopausal Clinic"><button class="redirect_blog_srivice">Menopausal Clinic </button></a>
      <a href="blogs.php?service=Well Woman Check up"><button class="redirect_blog_srivice">Well Woman Check up</button></a>
      <a href="blogs.php?service=Cancer Screening"><button class="redirect_blog_srivice"> Cancer Screening</button></a>
      <a href="blogs.php?service=All Gynaecological Problems"><button class="redirect_blog_srivice">All Gynaecological Problems </button></a>
      <a href="blogs.php?service=Comprehensive antenatal and post natal care"><button class="redirect_blog_srivice">Comprehensive antenatal and post natal care</button></a>
      <a href="blogs.php?service=High Risk Pregnancy"><button class="redirect_blog_srivice">High Risk Pregnancy</button></a>
      <a href="blogs.php?service=Ultrasound Scanning"><button class="redirect_blog_srivice">Ultrasound Scanning</button></a>
      <a href="blogs.php?service=Electronic fetal monitoring"><button class="redirect_blog_srivice">Electronic fetal monitoring</button></a>
      <a href="blogs.php?service=Lactational consultation"><button class="redirect_blog_srivice">Lactational consultation </button></a>
  
    </div>
  </div>

  <!-- Blogs Section -->
  <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid row">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
              echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
            }
          } else {
            echo "<p>No blog posts found.</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- End Blog Section -->
<!-- Start Footer -->

<?php include "./includes/footer.php";
?>