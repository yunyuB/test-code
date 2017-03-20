<div class="section_about"><a name="about"></a>
      <div class="container">
                <div class="about_txt_wrap"><?php  print $fields["field_about_section_text"]->content; ?></div>

                <div class="about_logo">
                       <div class="about_img1"><?php  print $fields["field_about_image_1"]->content; ?></div>
                       <div class="about_img2"><?php  print $fields["field_about_image_2"]->content; ?></div>
                       <div class="about_img3"><?php  print $fields["field_about_image_3"]->content; ?></div>	
                </div>

                <div class="feature_boxes">
                      <?php  print $fields["field_feature_boxes"]->content; ?>
                </div>

                <div class="feature_boxes_digits">
                      <?php  print $fields["field_feature_boxes_digits"]->content; ?>
                </div>

      </div> 
</div>


 <div class="news_section"><a name="news"></a>
      <div class="news_section_wrapper"><div class="bottom_triangle"></div>
          <div class="news_intro"><?php  print $fields["field_news_intro"]->content; ?></div>

          <div class="news_content container">
          	<?php print views_embed_view('news', 'block'); ?>

          </div>

      </div>
 </div>


<div class="section_sep"></div>

 <div class="team_section"><a name="team"></a>
      <div class="team_section_wrapper"><div class="team_triangle"></div>         
          <div class="team_content container">

            <?php print views_embed_view('team', 'block'); ?>

          </div>

      </div>
 </div>


 <div class="addresses_section"><a name="contact"></a>
    <div class="address_section_content container"><div class="bottom_triangle"></div> 
          <?php  print $fields["field_addresses"]->content; ?>
   
    </div>
 </div>



 


<div class="section_sep links"></div>

 <div class="links_section"><a name="links"></a>
        <h2>LINKS</h2>
        <div class="about_logo">
            <?php  print $fields["field_link_1_1"]->content; ?> 
            <?php  print $fields["field_link_2_1"]->content; ?> 
            <?php  print $fields["field_link_3_1"]->content; ?> 
        </div>
 </div>