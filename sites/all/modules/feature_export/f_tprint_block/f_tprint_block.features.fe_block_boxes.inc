<?php
/**
 * @file
 * f_tprint_block.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function f_tprint_block_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Front Content';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'front_content';
  $fe_block_boxes->body = '    <!-- CORE : begin -->
    <div id="core">     
    <!-- CONTENT SECTION : begin -->
        <div class="container content-section deal">
          <div class="row">
            <div class="col-sm-3">

              <p><img src="sites/all/themes/custom/tprint/images/content_img_02.jpg" alt="" class="rounded-shadow" /></p>

            </div>
            <div class="col-sm-9">

              <h2>Deal of the week!</h2>
              <p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
              <p class="cta-button">
                <a href="offer" class="btn glyphicon glyphicon-list btn-default ">See Details</a>
              </p>

            </div>
          </div>
        </div>
      <!-- CONTENT SECTION : end -->
      
    <!-- TESTIMONIALS : begin -->
    <div id="testimonials">
      <div class="container">
        <div class="testimonials-inner">

          <!-- TESTIMONIAL LIST : begin -->
          <div class="testimonial-list">

            <!-- TESTIMONIAL 1 : begin -->
            <div class="testimonial">
              <p class="portrait"><img src="sites/all/themes/custom/tprint/images/portrait_01_200.jpg" alt="Jenny" /></p>
              <blockquote class="quote">
                <p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
                <footer><cite>Jenny - Toronto, Canada</cite></footer>
              </blockquote>
            </div>
            <!-- TESTIMONIAL 1 : end -->

            <!-- TESTIMONIAL 2 : begin -->
            <div class="testimonial">
              <p class="portrait"><img src="sites/all/themes/custom/tprint/images/portrait_02_200.jpg" alt="Jenny" /></p>
              <blockquote class="quote">
                <p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
                <footer><cite>Jenny - Toronto, Canada</cite></footer>
              </blockquote>
            </div>
            <!-- TESTIMONIAL 2 : end -->

            <!-- TESTIMONIAL 3 : begin -->
            <div class="testimonial">
              <p class="portrait"><img src="sites/all/themes/custom/tprint/images/portrait_03_200.jpg" alt="Jenny" /></p>
              <blockquote class="quote">
                <p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
                <footer><cite>Jenny - Toronto, Canada</cite></footer>
              </blockquote>
            </div>
            <!-- TESTIMONIAL 3 : end -->

          </div>
          <!-- TESTIMONIAL LIST : end -->

          <!-- NAVIGATION : begin -->
          <div class="navigation">
            <button class="btn btn-default prev glyphicon glyphicon-chevron-left"></button><button class="btn btn-default next glyphicon glyphicon-chevron-right"></button>
          </div>
          <!-- NAVIGATION : end -->

        </div>
      </div>
    </div>
    <!-- TESTIMONIALS : end -->
    
    <!-- CONTENT SECTION: begin -->
        <div class="container content-section">
          <div class="row">
            <div class="col-sm-6">

              <h2>About PrintPedia</h2>
              <p>Casa was made to make your travelling around the world more exciting and less expensive!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
              <p class="cta-button">
                <a href="about" class="btn glyphicon glyphicon-heart btn-default">Read More!</a>
              </p>

            </div>
            <div class="col-sm-6">

              <p><img src="sites/all/themes/custom/tprint/images/content_img_01.jpg" alt="" /></p>

            </div>
          </div>
        </div>
      <!-- CONTENT SECTION : end -->

    </div>
    <!-- CORE : end -->
';

  $export['front_content'] = $fe_block_boxes;

  return $export;
}
