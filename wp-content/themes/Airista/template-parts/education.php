<?php
/*

 * Template Name: Education Page
 
*/

get_header(); ?> 

    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/education-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg  viewBox="0 0 501.164 501.164" width="80px" height="80px">
  <g>
    <path d="m482.079,138.808l-203.364-87.158c-17.879-7.662-38.397-7.656-56.298,0.015l-203.32,87.138c-11.779,5.047-19.097,16.143-19.097,28.957 0,12.807 7.313,23.897 19.085,28.942l24.034,10.301c-0.025,0.248-0.038,0.5-0.038,0.754v113.734c-9.29,3.138-16,11.93-16,22.266 0,5.992 2.258,11.465 5.963,15.621-4.098,4.017-6.819,9.463-7.381,15.634l-5.758,63.342c-0.393,4.327 1.062,8.647 3.991,11.855 2.929,3.208 7.101,5.048 11.445,5.048h30.479c4.344,0 8.516-1.84 11.445-5.048 2.93-3.208 4.384-7.529 3.991-11.855l-5.758-63.342c-0.561-6.17-3.283-11.616-7.381-15.634 3.705-4.155 5.963-9.628 5.963-15.621 0-10.335-6.71-19.127-16-22.266v-108.076l41.038,17.588c-0.025,0.248-0.038,0.499-0.038,0.753v57.263c0,23.899 16.364,46.008 46.079,62.256 28.282,15.464 65.722,23.981 105.421,23.981s77.139-8.517 105.421-23.981c29.714-16.248 46.079-38.357 46.079-62.256v-57.263c0-0.254-0.013-0.505-0.038-0.752l80.024-34.296c11.779-5.048 19.097-16.145 19.097-28.958 0.001-12.807-7.312-23.897-19.084-28.942zm-415.89,301.286c-0.148,0.163-0.309,0.163-0.369,0.163h-30.479c-0.061,0-0.221,0-0.369-0.163-0.149-0.163-0.134-0.322-0.129-0.382l5.758-63.342c0.473-5.195 4.763-9.113 9.98-9.113 5.216,0 9.506,3.918 9.979,9.113l5.758,63.341c0.006,0.061 0.02,0.22-0.129,0.383zm-15.608-87.837c-4.687,0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5 8.5,3.813 8.5,8.5-3.813,8.5-8.5,8.5zm336.5-95.237c0,19.394-15.962,38.329-43.793,51.95-3.721,1.821-5.26,6.313-3.439,10.033 1.301,2.66 3.968,4.205 6.742,4.205 1.107,0 2.23-0.246 3.292-0.766 15.437-7.555 27.805-16.759 36.623-26.993-2.812,15.816-15.945,30.771-37.699,42.666-26.114,14.279-60.997,22.142-98.225,22.142s-72.111-7.863-98.225-22.142c-21.675-11.852-34.795-26.742-37.671-42.495 7.581,8.739 17.81,16.731 30.474,23.656 28.282,15.464 65.722,23.981 105.421,23.981 11.106,0 22.183-0.676 32.923-2.008 4.111-0.51 7.03-4.255 6.52-8.366-0.51-4.111-4.25-7.031-8.366-6.52-10.13,1.257-20.586,1.894-31.077,1.894-37.228,0-72.111-7.863-98.225-22.142-24.682-13.496-38.275-30.931-38.275-49.095v-19.604l108.368,46.445c8.934,3.829 18.526,5.743 28.123,5.743 9.608,0 19.22-1.919 28.175-5.757l108.334-46.429v19.602zm89.077-74.099l-203.321,87.137c-14.144,6.062-30.356,6.067-44.479,0.015l-155.39-66.597 142.379-24.762c6.404,7.579 19.455,12.542 35.234,12.542 22.519,0 39.5-10.103 39.5-23.5s-16.981-23.5-39.5-23.5c-20.452,0-36.334,8.334-39.077,19.9l-162.208,28.21c-0.476,0.083-0.931,0.212-1.367,0.377l-22.934-9.83c-6.259-2.68-9.995-8.346-9.995-15.153 0-6.814 3.741-12.486 10.006-15.171l203.32-87.138c7.079-3.033 14.674-4.55 22.267-4.55 7.58,0 15.158,1.512 22.213,4.535l203.364,87.158c6.258,2.682 9.994,8.348 9.994,15.155 0,6.816-3.741,12.487-10.006,15.172zm-250.077-15.164c0-2.185 8.424-8.5 24.5-8.5s24.5,6.315 24.5,8.5-8.424,8.5-24.5,8.5-24.5-6.316-24.5-8.5z"/>
    <path d="m306.574,337.083c0.559,0 1.127-0.063 1.695-0.194 5.66-1.308 11.236-2.826 16.573-4.515 3.949-1.249 6.138-5.463 4.889-9.412s-5.462-6.14-9.413-4.89c-4.96,1.569-10.15,2.982-15.425,4.201-4.036,0.932-6.552,4.959-5.62,8.995 0.802,3.469 3.888,5.815 7.301,5.815z"/>
  </g>
</svg>
                
              <!-- <img src="images/education-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
			    <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
	            <?php endwhile; ?>
                
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
        </div>
    
  
    
   
    <div class="education-main">
        <div class="education-grey">
            <div class="container">
                <div class="education-white">
                    <h2><?php the_field('prioritze_school_safety',69);?></h2>
                    
                    <div class="edu-white-left">
					<?php if ( has_post_thumbnail() ) {
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'first-education-image' );
				     ?>
                     <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                     <?php
                      } else { ?>
                     <img src="http://placehold.it/597x381&amp;text=No image found" alt="<?php the_title(); ?>"/>
                     <?php } ?>	
					
                    </div>
                    
                    <div class="edu-white-right">
                        <?php the_field('with_a_variety_of_technologies',69);?>
                    
                    </div>
                    
                    
                </div>
            </div>
        
        </div>
        
        <div class="go-beyond-sec">
            <div class="container">
                <div class="go-beyond-left">
                    <div class="go-beyond-left-inner">
                       <?php the_field('go_beyond_security',69);?>
                    <div class="go-beyond-left-list">
                    <?php the_field('airista_flow_solutions_help',69);?>
                    
                    </div>
                    
                    </div>
                    
                </div>
                <?php 
		        $edu = get_post_meta($post->ID,"education_second_image",true);
				$thumb = wp_get_attachment_image_src($edu, 'education-image');
		        if($thumb==""){
			    ?>
                <div class="go-beyond-right" style="background-image:url(http://placehold.it/658x946&amp;text=658x946);)">
			
			    <?php }	else{  ?>
                <div class="go-beyond-right" style="background-image:url(<?php echo $url = $thumb['0'];?>);">
		        <?php } ?>
                
                
                </div>
            </div>
            
            <div class="container">
                <ul class="go-bey-end-list">
				
                    <li>
					<?php $file = get_post_meta($post->ID, 'file', true); ?>
					<?php if ($file): ?>
					<p><?php the_field('healthcare_brochure',69);?></p>
                    <a href="<?php echo wp_get_attachment_url($file); ?>" class="org-btn">download</a>
				    <?php endif; ?>
                    </li>
                    
                    <li>
					<?php $hospital = get_post_meta($post->ID, 'hospital_assets_file_upload', true); 
				     if ($hospital): ?>
					<p><?php the_field('hospital_assets',69);?></p>
                     <a href="<?php echo wp_get_attachment_url($hospital); ?>" class="org-btn">download</a>
					 <?php endif; ?>
                    </li>
                    
                    <li><p><?php the_field('hospital_leverages',69);?></p>
                    <a href="#" class="org-btn">download</a>
                    </li>
                </ul>
            
            </div>
        
        </div>
    
    </div>   

<?php
get_footer();