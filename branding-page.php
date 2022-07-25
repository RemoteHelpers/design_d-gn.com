<?php
/*
Template Name: Branding page
*/

  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
  wp_enqueue_script( 'jquery' );

  wp_register_style('styles', get_template_directory_uri().'/css/branding.css', '', '0.0000', false);
  wp_enqueue_style('styles');

  wp_register_style('styles-default', get_template_directory_uri().'/css/style.css', '', '0.0000', false);
  wp_enqueue_style('styles-default');

  wp_register_style('media-styles', get_template_directory_uri().'/css/media.css', '', '0.0000', false);
	wp_enqueue_style('media-styles');
  
  wp_register_style('materialize', get_template_directory_uri().'/css/materialize.css', '', '0.0000', false);
  wp_enqueue_style('materialize');
  
  wp_register_style('fullpage', get_template_directory_uri().'/css/fullpage.min.css', '', '0.0000', false);
  wp_enqueue_style('fullpage');
  
  wp_register_script( 'materialize-js', get_template_directory_uri().'/js/materialize.min.js', '', '0.0000', false);
  wp_enqueue_script( 'materialize-js' );
  
  wp_register_script( 'fullpage-js', get_template_directory_uri().'/js/fullpage.min.js', '', '0.0000', false);
  wp_enqueue_script( 'fullpage-js' );

  wp_register_script( 'script', get_template_directory_uri().'/js/script.js', '', '0.0000', false);
  wp_enqueue_script( 'script' );
  
  wp_register_script( 'lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js' );
  wp_enqueue_script( 'lottie' );

get_header();
?>


<div class="section brandind_page_1">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_1">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_1">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>

          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Let's make your brand recognizable.</h1>
          <p>We will help your brand stand out from the crowd, trust us</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_vp1yg7lp.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
          <a href="#page7">CONTACT US NOW</a>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_vp1yg7lp.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>BRANDING DESIGN</h1>
      <h1>BRANDING DESIGN</h1>
    </div>
  </div>
</div>
<div class="section brandind_page_2 brand_gradient">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_2">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_2">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>
          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Logo & Visual Identity.</h1>
          <p>Visual Audit <span>|</span> Collateral Design <span>|</span> Logo & Corporate Identity Guidelines & Systems
          </p>
          <p class="main_subtitle">A corporate identity that is designed to meet your business goals and appeal to your
            target market.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ud5wng5d.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ud5wng5d.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Logo & Visual Identity</h1>
      <h1>Logo & Visual Identity</h1>
    </div>
  </div>
</div>
<div class="section brandind_page_3 brandind_page_2">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_3">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_3">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>
          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Naming & Verbal Identity.</h1>
          <p>Brand Naming & Renaming <span>|</span> Key Messaging <br>
            Product Naming & Renaming <span>|</span> Brand Narrative</p>
          <p class="main_subtitle">We will deliver clear, consistent messaging that reflects your brand's identity.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_yb5aqahn.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_yb5aqahn.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Naming & Verbal Identity</h1>
      <h1>Naming & Verbal Identity</h1>
    </div>
  </div>
</div>
<div class="section brandind_page_4 brandind_page_2">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_4">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_4">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>
          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Brand Expression.</h1>
          <p>Presentation Ideation & Design <span>|</span> Email Campaign Concept Digital Document Design <span>|</span>
            Social Media Design and Templates Online Ad Banners</p>
          <p class="main_subtitle">A clear and compelling explanation of the main benefits of your brand with the help
            of modern design.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_4zfmrnqc.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <div class="ananas_animation">
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_4zfmrnqc.json" background="transparent"
              speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Brand expression</h1>
      <h1>Brand expression</h1>
    </div>
  </div>
</div>
<div class="section brandind_page_5">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_5">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_5">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>

          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="price_screen">
        <div class="cards_price_wrapper">

          <div class="card_price">
            <div class="card_price_content">
              <h2>.Starter.</h2>
              <p>40 hours valid 30 days</p>
              <ul>
                <li>Visual Audit</li>
                <li>Logo & Corporate Identity</li>
                <li>Brand Naming & Renaming</li>
                <li>Wareframes</li>
                <li>StyleGuide</li>
                <li>Infographics</li>
                <li>Email Campaign Concept</li>
                <li>Social Media Design</li>
              </ul>
              <h1>€800/$840</h1>
            </div>
            <div class="price_link">
              <div class="price_link_image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
              </div>
              <a data-modal="cal_modal_1" class="price_btn" href="##">Set a call</a>
            </div>
          </div>
          <div data-modal="cal_modal_1" class="card_price_modal_calendly">
            <div class="card_price_modal_calendly_content">
              <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
              </div>
              <div class="calendly_close">
                <span></span>
              </div>
            </div>
          </div>

          <div class="card_price">
            <div class="card_price_content">
              <h2>.Optimal.</h2>
              <p>80 hours valid 30 days</p>
              <ul>
                <li><span>Starter</span> + Warframe</li>
                <li>Landing Page</li>
                <li>Userflow</li>
                <li>Animated Prototypes</li>
                <li>Package design</li>
                <li>Printed products</li>
                <li>Clothing design</li>
              </ul>
              <h1>€1100/$1200</h1>
            </div>
            <div class="price_link">
              <div class="price_link_image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
              </div>
              <a data-modal="cal_modal_2" class="price_btn" href="##">Set a call</a>
            </div>
          </div>
          <div data-modal="cal_modal_2" class="card_price_modal_calendly">
            <div class="card_price_modal_calendly_content">
              <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
              </div>
              <div class="calendly_close">
                <span></span>
              </div>
            </div>
          </div>

          <div class="card_price">
            <div class="card_price_content">
              <h2>.Advanced.</h2>
              <p>160 hours valid 30 days</p>
              <ul>
                <li><span>Optimal</span> + Corporate website</li>
                <li>Online store</li>
                <li>CRMsystem</li>
                <li>Websitedesign</li>
                <li>Interior design</li>
              </ul>
              <h1>€1400/$1500</h1>
            </div>
            <div class="price_link">
              <div class="price_link_image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
              </div>
              <a data-modal="cal_modal_3" class="price_btn" href="##">Set a call</a>
            </div>
          </div>
          <div data-modal="cal_modal_3" class="card_price_modal_calendly">
            <div class="card_price_modal_calendly_content">
              <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
              </div>
              <div class="calendly_close">
                <span></span>
              </div>
            </div>
          </div>

        </div>
        

        
        <div class="mobile_slider">
          <div class="design_swiper swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card_price">
                  <div class="card_price_content">
                    <h2>.Starter.</h2>
                    <p>40 hours valid 30 days</p>
                    <ul>
                      <li>Visual Audit</li>
                      <li>Logo & Corporate Identity</li>
                      <li>Brand Naming & Renaming</li>
                      <li>Wareframes</li>
                      <li>StyleGuide</li>
                      <li>Infographics</li>
                      <li>Email Campaign Concept</li>
                      <li>Social Media Design</li>
                    </ul>
                    <h1>€800/$840</h1>
                  </div>
                  <div class="price_link">
                    <div class="price_link_image">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                    </div>
                    <a data-modal="mobile_modal_1" class="price_btn" href="">Set a call</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card_price">
                  <div class="card_price_content">
                    <h2>.Optimal.</h2>
                    <p>80 hours valid 30 days</p>
                    <ul>
                      <li><span>Starter</span> + Warframe</li>
                      <li>Landing Page</li>
                      <li>Userflow</li>
                      <li>Animated Prototypes</li>
                      <li>Package design</li>
                      <li>Printed products</li>
                      <li>Clothing design</li>
                    </ul>
                    <h1>€1100/$1200</h1>
                  </div>
                  <div class="price_link">
                    <div class="price_link_image">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                    </div>
                    <a data-modal="mobile_modal_2" class="price_btn" href="">Set a call</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card_price">
                  <div class="card_price_content">
                    <h2>.Advanced.</h2>
                    <p>160 hours valid 30 days</p>
                    <ul>
                      <li><span>Optimal</span> + Corporate website</li>
                      <li>Online store</li>
                      <li>CRMsystem</li>
                      <li>Websitedesign</li>
                      <li>Interior design</li>
                    </ul>
                    <h1>€1400/$1500</h1>
                  </div>
                  <div class="price_link">
                    <div class="price_link_image">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                    </div>
                    <a data-modal="mobile_modal_3" class="price_btn" href="">Set a call</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>


        <div data-modal="mobile_modal_1" class="card_price_modal_calendly">
          <div class="card_price_modal_calendly_content">
            <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment"></div>
            <div class="calendly_close">
              <span></span>
            </div>
          </div>
        </div>

        <div data-modal="mobile_modal_2" class="card_price_modal_calendly">
          <div class="card_price_modal_calendly_content">
            <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment"></div>
            <div class="calendly_close">
              <span></span>
            </div>
          </div>
        </div>
        
        <div data-modal="mobile_modal_3" class="card_price_modal_calendly">
          <div class="card_price_modal_calendly_content">
            <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment"></div>
            <div class="calendly_close">
              <span></span>
            </div>
          </div>
        </div>


        <p class="price_text">*services may vary depending on your needs and may be
          discussed with sales manager
        </p>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>PRICING</h1>
      <h1>PRICING</h1>
    </div>
  </div>
</div>
<div class="section brandind_page_6">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_6">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_6">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>

          </div>
          <a href="#">get consultation</a>
        </nav>
      </div>
      <div class="portfolio_wrapper">
        <div class="portfolio_title">
          <h1>.PORTFOLIO.</h1>
        </div>
        <div class="title_ticker">
          <div>
            <h1>PORTFOLIO</h1>
            <h1>PORTFOLIO</h1>
          </div>
        </div>
        <div class="portfolio_btns">
          <button class="filter_btn active" data-tab="#tab_1">Illustration</button>
          <button class="filter_btn" data-tab="#tab_2">GRAPHIC DESIGN</button>
          <button class="filter_btn" data-tab="#tab_3">web design</button>
        </div>


        <!-- branding -->
        <div class="portfolio_cards_wrapper tab_item active" id="tab_1">
					<?php if( have_rows('portfolio-illustration', 'option') ): ?>
            <div class="portfolio_items_wrapper">
            <?php while( have_rows('portfolio-illustration', 'option') ): the_row(); ?>
              <div class="portfolio_card">
                <a data-fslightbox="default" href="<?php the_sub_field('fullsize_image_portfolio', 'option'); ?>" class="card">
                  <img src="<?php the_sub_field('preview_image_portfolio', 'option'); ?>" alt="">
                  <div class="card_hover">
                    <ul>
                      <li><?php the_sub_field('title_portfolio', 'option'); ?></li>
                    </ul>
                    <p><?php the_sub_field('description_porfolio', 'option'); ?></p>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
            </div>
					<?php endif; ?>
          <span class="moreBtn">Show more</span>
        </div>

          <!-- graphic design -->
        <div class="portfolio_cards_wrapper tab_item" id="tab_2">
          <?php if( have_rows('portfolio-graphic', 'option') ): ?>
            <div class="portfolio_items_wrapper">
            <?php while( have_rows('portfolio-graphic', 'option') ): the_row(); ?>
              <div class="portfolio_card">
                <a data-fslightbox="default" href="<?php the_sub_field('fullsize_image_portfolio', 'option'); ?>" class="card">
                  <img src="<?php the_sub_field('preview_image_portfolio', 'option'); ?>" alt="">
                  <div class="card_hover">
                    <ul>
                      <li><?php the_sub_field('title_portfolio', 'option'); ?></li>
                    </ul>
                    <p><?php the_sub_field('description_porfolio', 'option'); ?></p>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
            </div>
					<?php endif; ?>
          <span class="moreBtn">Show more</span>
        </div>

        <!-- web design -->
        <div class="portfolio_cards_wrapper tab_item" id="tab_3">
          <?php if( have_rows('portfolio-web', 'option') ): ?>
              <div class="portfolio_items_wrapper">
              <?php while( have_rows('portfolio-web', 'option') ): the_row(); ?>
                <div class="portfolio_card">
                  <a data-fslightbox="default" href="<?php the_sub_field('fullsize_image_portfolio', 'option'); ?>" class="card">
                    <img src="<?php the_sub_field('preview_image_portfolio', 'option'); ?>" alt="">
                    <div class="card_hover">
                      <ul>
                        <li><?php the_sub_field('title_portfolio', 'option'); ?></li>
                      </ul>
                      <p><?php the_sub_field('description_porfolio', 'option'); ?></p>
                    </div>
                  </a>
                </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
            <span class="moreBtn">Show more</span>
        </div>

      </div>
    </div>
  </header>
</div>
<div class="section brandind_page_7">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_7">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger.png" alt="burger">
          </div>
          <div class="burger_content" data-id="menu_7">
            <div class="burger_content_wrapper">
              <div class="burger_info">
                <div class="container">
                  <div class="burger_info_top">
                    <div class="header_logo">
                      <svg width="164" height="51" viewBox="0 0 164 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="164" height="51" fill="black" />
                        <path
                          d="M37 11.6339H50.5902C53.6628 11.6339 56.3677 12.2017 58.705 13.3374C61.0685 14.4467 62.8937 16.0446 64.1805 18.1311C65.4936 20.2177 66.1501 22.674 66.1501 25.5C66.1501 28.326 65.4936 30.7823 64.1805 32.8688C62.8937 34.9554 61.0685 36.5665 58.705 37.7022C56.3677 38.8115 53.6628 39.3661 50.5902 39.3661H37V11.6339ZM50.1963 32.0765C52.1922 32.0765 53.781 31.5086 54.9628 30.3729C56.1708 29.2108 56.7748 27.5865 56.7748 25.5C56.7748 23.4135 56.1708 21.8024 54.9628 20.6667C53.781 19.5046 52.1922 18.9235 50.1963 18.9235H46.2965V32.0765H50.1963Z"
                          fill="white" />
                        <path
                          d="M87.7831 24.7473H95.8585V36.474C94.2302 37.6097 92.3394 38.4813 90.186 39.0888C88.0326 39.6963 85.9185 40 83.8439 40C80.9026 40 78.2633 39.3925 75.9261 38.1776C73.5888 36.9362 71.7505 35.2195 70.4112 33.0273C69.0981 30.8087 68.4416 28.2996 68.4416 25.5C68.4416 22.7004 69.0981 20.2045 70.4112 18.0123C71.7505 15.7937 73.602 14.077 75.9655 12.862C78.3553 11.6207 81.0471 11 84.0408 11C86.7458 11 89.1618 11.4622 91.289 12.3866C93.4424 13.2846 95.2282 14.6052 96.6463 16.3484L90.6981 21.6175C88.9648 19.5838 86.9033 18.5669 84.5135 18.5669C82.4652 18.5669 80.837 19.1876 79.6289 20.429C78.4209 21.6703 77.8169 23.3607 77.8169 25.5C77.8169 27.5865 78.4078 29.2637 79.5895 30.5314C80.7976 31.7992 82.3995 32.4331 84.3954 32.4331C85.5771 32.4331 86.7064 32.2086 87.7831 31.7596V24.7473Z"
                          fill="white" />
                        <path
                          d="M127 11.6339V39.3661H119.358L108.88 26.7678V39.3661H99.8195V11.6339H107.462L117.94 24.2322V11.6339H127Z"
                          fill="white" />
                      </svg>
                    </div>
                    <span class="close_burger"></span>
                  </div>
                  <div class="burger_text_wrapper">
                    <div class="burger_info_text">
                      <div>
                        <ul>
                          <a href="<?php the_permalink(22); ?>">
                            <li>Graphic design</li>
                          </a>
                        </ul>
                        <p>digital-graphics</p>
                        <p>avatar-creating</p>
                        <p>infographics</p>
                        <p>banners</p>
                        <p>social-media-design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(24); ?>">
                            <li>Web-design</li>
                          </a>
                        </ul>
                        <p>web design</p>
                        <p>website-design</p>
                        <p>landing</p>
                        <p>UI/UX design</p>
                        <p>mobile design</p>
                      </div>

                      <div>
                        <ul>
                          <a href="<?php the_permalink(17); ?>">
                            <li>Illustration</li>
                          </a>
                        </ul>
                        <p>brandbook</p>
                        <p>presentation</p>
                        <p>logo</p>
                        <p>mascot</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="burger_media">
                <div class="burger_media_wrapper">
                  <h1>Social Media.</h1>
                  <h2>Have an idea?
                    Let us visualise it!</h2>
                  <div class="media_icons">
                    <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 0.25C9.54169 0.25 0.166687 9.60417 0.166687 21.125C0.166687 31.5417 7.79169 40.1875 17.75 41.75V27.1667H12.4584V21.125H17.75V16.5208C17.75 11.2917 20.8542 8.41667 25.625 8.41667C27.8959 8.41667 30.2709 8.8125 30.2709 8.8125V13.9583H27.6459C25.0625 13.9583 24.25 15.5625 24.25 17.2083V21.125H30.0417L29.1042 27.1667H24.25V41.75C29.1593 40.9747 33.6296 38.4698 36.854 34.6876C40.0785 30.9054 41.8445 26.0951 41.8334 21.125C41.8334 9.60417 32.4584 0.25 21 0.25Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank">
                      <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M38 9.25C32 -5.96046e-07 19.75 -2.75 10.25 3C0.999998 8.75 -2 21.25 4 30.5L4.5 31.25L2.5 38.75L10 36.75L10.75 37.25C14 39 17.5 40 21 40C24.75 40 28.5 39 31.75 37C41 31 43.75 18.75 38 9.25ZM32.75 28.5C31.75 30 30.5 31 28.75 31.25C27.75 31.25 26.5 31.75 21.5 29.75C17.25 27.75 13.75 24.5 11.25 20.75C9.75 19 9 16.75 8.75 14.5C8.75 12.5 9.5 10.75 10.75 9.5C11.25 9 11.75 8.75 12.25 8.75H13.5C14 8.75 14.5 8.75 14.75 9.75C15.25 11 16.5 14 16.5 14.25C16.75 14.5 16.75 15 16.5 15.25C16.75 15.75 16.5 16.25 16.25 16.5C16 16.75 15.75 17.25 15.5 17.5C15 17.75 14.75 18.25 15 18.75C16 20.25 17.25 21.75 18.5 23C20 24.25 21.5 25.25 23.25 26C23.75 26.25 24.25 26.25 24.5 25.75C24.75 25.25 26 24 26.5 23.5C27 23 27.25 23 27.75 23.25L31.75 25.25C32.25 25.5 32.75 25.75 33 26C33.25 26.75 33.25 27.75 32.75 28.5Z"
                          fill="black" />
                      </svg>
                    </a>
                    <a href="mailto:sales@d-gn.com">
                      <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.5 0C9.17816 0 0 9.17816 0 20.5C0 31.8218 9.17816 41 20.5 41C31.8218 41 41 31.8218 41 20.5C41 9.17816 31.8218 0 20.5 0ZM10.0098 12.5698H30.9902V15.5202L20.5 21.501L10.0098 15.5201V12.5698ZM10.0098 17.407L15.3525 20.4525L10.0098 26.0529V17.407ZM30.9902 17.407V26.0529L25.6475 20.4524L30.9902 17.407ZM16.8214 21.2908L20.5 23.3878L24.1786 21.2908L30.9902 28.4302H10.0098L16.8214 21.2908Z"
                          fill="black" />
                      </svg>
                    </a>


                  </div>
                </div>
              </div>

            </div>

          </div>
          <a href="#page7">get consultation</a>
        </nav>
      </div>
      <div class="contact_wrapper">
        <div class="portfolio_title">
          <h1>.CONTACT US.</h1>
        </div>
        <div class="title_ticker">
          <div>
            <h1>CONTACT US</h1>
            <h1>CONTACT US</h1>
          </div>
        </div>


        <form id="form">

          <div class="input_name_wrapper">
            <input class="input js_input input_name" type="text" name="client_name" placeholder="Your name">
            <div class="error_name">Please, enter your name</div>
          </div>
          <div class="input_phone_wrapper">
            <input class="input js_input input_phone" type="tel" name="client_phone" placeholder="Your phone number">
            <div class="error_name">Please, enter your Phone number</div>
          </div>
          <div class="input_phone_wrapper">
            <input class="input js_input input_email" type="email" name="client_email" placeholder="Email adress">
            <div class="error_name">Please, enter your Email adress</div>
          </div>

          <!-- multiselect -->
          <div class="input-field">
            <select multiple>
              <option value="1">Branding</option>
              <option value="2">Graphic design</option>
              <option value="3">Web design</option>
            </select>
            <div class="error_name">Please, choose the Service</div>
          </div>

          <input hidden type="text" value="Remote Helpers" name="global_company_name">
          <input hidden type="text" value="d-gn.com" name="project_company">

          <button class="submitBtn" type="submit">GET A FREE CONSULTATION</button>
        </form>

        <div class="thank_you_modal">
          <div class="thank_you_modal_content">
            <div class="close_modal">
              <img data-src="/wp-content/uploads/2022/07/close_thank_you_modal.png" alt="">
            </div>
            <h1>.Thank you.</h1>
            <p>We get your letter! <br>
              Nearest time we'll answer to you</p>
            <div class="thank_you_modal_done">
              <img data-src="/wp-content/uploads/2022/07/thank_you.png" alt="">
            </div>
          </div>
        </div>


      </div>
    </div>



    <footer>
      <div class="container">
        <div class="footer_links">
          <a href="https://api.whatsapp.com/send?phone=380997101033" target="_blank" title="+380997101033">Whatsapp</a>
          <a href="mailto:sales@d-gn.com" title="sales@d-gn.com">sales@d-gn.com</a>
          <a href="https://www.facebook.com/Designers-102131022517952" target="_blank">Facebook</a>
        </div>
        <div class="privacy">
          <p>2022 © All rights reserved <br> <a href="<?php the_permalink(10); ?>" target="_blank">Privacy Policy</a>
          </p>
        </div>
      </div>
    </footer>



  </header>
</div>


<?php
get_footer();