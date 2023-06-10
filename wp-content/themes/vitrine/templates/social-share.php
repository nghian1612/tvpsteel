<?php

    if( ! isset($portfolioLoop)) { 

	    // try getting featured image -  pinterest icon 
	    $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	    if( ! $featured_img )
	    {
		    $featured_img = '';
	    }
	    else
	    {
		    $featured_img = $featured_img[0];
	    }

    } else {

        $featured_img = '';
    
    }

    if(isset($portfolioLoop)) { // comes From Gallery Loop 
        
        $galleryPageURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $URLForShare = $galleryPageURL .'#lg='. $portfolioLoop .'&slide=' . $count ;
    }

    if(isset($portfolioLoop)) { // comes From Gallery Loop 

        $facebookHref = 'http://www.facebook.com/sharer.php?u='. urlencode(esc_url($URLForShare));
        $googleHref = 'https://plus.google.com/share?url='. urlencode(esc_url($URLForShare));
        $twitterHref = 'https://twitter.com/intent/tweet?original_referer=' . urlencode(esc_url(get_permalink(get_the_ID()))) .'&amp;source=tweetbutton&amp;text='. urlencode(get_the_title()) .'&amp;url='. urlencode(esc_url($URLForShare));
        $pinterest = '';
		$email= '';

   } else {

        $facebookHref = "http://www.facebook.com/sharer.php?u=" . urlencode(esc_url(get_permalink(get_the_ID())));
        $googleHref = "https://plus.google.com/share?url=" . urlencode(esc_url(get_permalink(get_the_ID())));
        $twitterHref = "https://twitter.com/intent/tweet?original_referer=" . urlencode(esc_url(get_permalink(get_the_ID()))) . "&amp;source=tweetbutton&amp;text=" . urlencode(get_the_title()) . "&amp;url=" . urlencode(esc_url(get_permalink(get_the_ID())));
        $pinterest = "";
		$email = "";
    }
			$target = "_blank";

?>

<div class="social_links">
    <ul class="social_links_list">
        <!-- facebook Social share button -->
		<li>
            <a href="<?php echo esc_url($facebookHref); ?>"  title="<?php esc_attr_e('Share on Facebook!','vitrine') ?>">
                <i class="icon-facebook"></i>
            </a>
        </li>
                                    
        <!-- google plus social share button -->
        <li>
            <a href="<?php echo esc_url($googleHref); ?>"  title="<?php esc_attr_e('Share on Google+!','vitrine') ?>">
                <i class="icon-google-plus"></i>
            </a>
        </li>
		
        <!-- Mail To icon --> 
		<li>
			<a href="mailto:<?php echo '?subject=' . esc_html__('Check this ', 'vitrine') . get_the_permalink(); ?>" title="<?php esc_attr_e('Share by Mail!', 'vitrine') ?>">
				<i class="icon-envelope2"></i>
			</a>
        </li> 
		
        <!-- twitter icon  --> 
        <li>
            <a href="<?php echo esc_url($twitterHref); ?>" 
                title="<?php esc_attr_e('Share on Twitter!', 'vitrine') ?>">
                <i class="icon-twitter"></i>
            </a>
        </li>
                 
        <!-- pinterest icon --> 
        <li>
	        <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&amp;media=<?php echo esc_attr($featured_img); ?>
		        &amp;description=<?php echo urlencode(get_the_title()); ?>" 
		        class="pin-it-button" 
		        count-layout="horizontal">
		            <i class="icon-pinterest"></i>
	        </a>
        </li>
        
                        
    </ul>
</div>            
                