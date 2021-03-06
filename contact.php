<?php
//Template Name: Contact Template
get_header();
?>
<?php while (have_posts()) : the_post(); ?>

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="page_link">
            <a href="<?php echo esc_url(home_url()); ?>">Home</a>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
<?php endwhile; ?>

<!-- ================ contact section start ================= -->
<section class="contact-section area-padding">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style="height: 480px;"></div>
      <script>
        function initMap() {
          // The location of Kathmandu
          var kat = {
            lat: 27.722661,
            lng: 85.359006
          };

          var grayStyles = [{
              featureType: "all",
              stylers: [{
                  saturation: -90
                },
                {
                  lightness: 50
                }
              ]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{
                color: '#ccdee9'
              }]
            }
          ];
          // The map, centered at Kathmandu
          var map = new google.maps.Map(
            document.getElementById('map'), {
              zoom: 11,
              center: kat,
              styles: grayStyles,
              scrollwheel: false
            });
          // The marker, positioned at Kathmandu
          var marker = new google.maps.Marker({
            position: kat,
            map: map,

          });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key='apikey'&callback=initMap" async defer></script>
    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm">Send Message</button>
          </div>
        </form>


      </div>

      <div class="col-lg-4">
        <?php get_sidebar('splash'); ?>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->

<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>
        <h2>Thank you</h2>
        <p>Your message is successfully sent...</p>
      </div>
    </div>
  </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>
        <h2>Sorry !</h2>
        <p> Something went wrong </p>
      </div>
    </div>
  </div>
</div>
<!--================End Contact Success and Error message Area =================-->

<?php
get_footer();
