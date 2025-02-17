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
<section class="cs_page_heading cs_bg_filed cs_center" data-src="assets/img/service.png">
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
<!-- <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color">
          <span class="cs_shape_left"></span>OUR LARGEST BLOG<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Latest Posts & Articles</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_posts_grid cs_style_1">
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_1.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">May 02</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">Medical Of This Working Health Blog</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_2.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">April 12</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">There Is Only One Thing That Is Hospital.</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_3.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">Jan 02</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">This Working World and Infection Prevention.</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_4.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">June 02</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">Medical Of This Working Health Blog</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_5.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">May 22</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">This Working World and Infection Prevention.</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail position-relative">
            <img src="assets/img/post_6.jpeg" alt="Post Thumbnail">
            <div class="cs_post_category position-absolute">Medical</div>
          </a>
          <div class="cs_post_content position-relative">
            <div class="cs_post_meta_wrapper">
              <div class="cs_posted_by cs_center position-absolute">Feb 10</div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                <span>By: Admin</span>
              </div>
              <div class="cs_post_meta_item">
                <img src="assets/img/icons/post_comment_icon.png" alt="Icon">
                <span>Comment</span>
              </div>
            </div>
            <h3 class="cs_post_title"><a href="blog-details.html">Medical Of This Working Health Blog</a></h3>
            <p class="cs_post_subtitle">Medical standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
            <a href="blog-details.html" class="cs_post_btn">
              <span>Read More</span>
              <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            <div class="cs_post_shape position-absolute"></div>
          </div>
        </article>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section> -->
<main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-5">
      <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
      <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
      <a href="blogs.php?service=Wisdom Tooth Removal"><button class="redirect_blog_srivice">Wisdom Tooth Removal</button></a>
      <a href="blogs.php?service=Bad Breath Treatment"><button class="redirect_blog_srivice">Bad Breath Treatment</button></a>
      <a href="blogs.php?service=Gum Treatment"><button class="redirect_blog_srivice"> Gum Treatment</button></a>
      <a href="blogs.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning </button></a>
      <a href="blogs.php?service=Orthodontic Treatment"><button class="redirect_blog_srivice">Orthodontic Treatment</button></a>
      <a href="blogs.php?service=Dental Crown & Bridge"><button class="redirect_blog_srivice"> Dental Crown & Bridge</button></a>
      <a href="blogs.php?service=Invisible Aligners"><button class="redirect_blog_srivice">Invisible Aligners </button></a>
      <a href="blogs.php?service=Dental Veneers"><button class="redirect_blog_srivice">Dental Veneers</button></a>
      <a href="blogs.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
      <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
      <a href="blogs.php?service=Dentures"><button class="redirect_blog_srivice">Dentures </button></a>
      <a href="blogs.php?service=Fluoride Application & Dental Sealant"><button class="redirect_blog_srivice">Fluoride Application & Dental Sealant</button></a>
      <a href="blogs.php?service=Full Mouth Rehabilitation Treatment"><button class="redirect_blog_srivice"> Full Mouth Rehabilitation Treatment</button></a>

      <!-- <a href="blogs.php?service=Laser Gum"><button class="redirect_blog_srivice">Laser & Gum</button></a>
      <a href="blogs.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
      <a href="blogs.php?service=Tooth Cleaning"><button class="redirect_blog_srivice">Tooth Cleaning</button></a>
      <a href="blogs.php?service=Gum Depigment"><button class="redirect_blog_srivice">Gum Depigment</button></a>
      <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs.php?service=Laser Gum Surgery"><button class="redirect_blog_srivice">Laser Gum Surgery</button></a>
      <a href="blogs.php?service=Mouth Ulcers"><button class="redirect_blog_srivice">Mouth Ulcers</button></a>
      <a href="blogs.php?service=Precancerous Lesion"><button class="redirect_blog_srivice">Precancerous Lesion</button></a>
      <a href="blogs.php?service=Laser Crown Lengthening"><button class="redirect_blog_srivice">Laser Crown Lengthening</button></a> -->
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