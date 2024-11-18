<?php
wp_head();
$post_id = get_the_ID(); 
$start_date = get_field('start_date');
$end_date = get_field('end_date');
$description = get_field('description');
$cover_image = get_field('cover_image');
$cover_image_url = $cover_image['url'];
$application_link = get_field('application_link');
if( !empty( $application_link ) ): 
     $application_link['url'];
endif;
?>

<main class="main">
   <section class="section banner banner-section" style="background-image: <?php  echo $cover_image_url; ?>;">
      <div class="container banner-column">
         <img class="banner-image" src="<?php echo $cover_image_url; ?>" alt="Illustration">
         <div class="banner-inner">
            <h1 class="heading-xl">Deer Test Jade</h1>
       
            <p class="paragraph">
                     <?php echo $description; ?>
            </p>
            <div class="date">
                <div>
                    <h3 class="heading-sm"> Start Date</h3>
                    <p class="paragraph">
                       <?php echo $start_date; ?>
                    </p>
                </div>
                <div >
                    <h3 class="heading-sm"> End Date</h3>
                    <p class="paragraph">
                       <?php echo $end_date ; ?>
                    </p>
                </div>
                
            </div>
            <a href="<?php echo esc_url( $application_link['url'] ); ?>">
                    <button class="btn btn-darken btn-inline">
                        View Site Portfolio<i class="bx bx-right-arrow-alt"></i>
                    </button>
             </a>
         </div>
      </div>
   </section>
</main>


