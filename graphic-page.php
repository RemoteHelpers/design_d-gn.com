<?php
/*
Template Name: Graphic design page
*/

  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
  wp_enqueue_script( 'jquery' );

  wp_register_style('styles', get_template_directory_uri().'/css/style.css', '', '0.0000', false);
	wp_enqueue_style('styles');

  wp_register_style('graphic-styles', get_template_directory_uri().'/css/graphic.css', '', '0.0000', false);
	wp_enqueue_style('graphic-styles');

  wp_register_style('media-styles', get_template_directory_uri().'/css/media.css', '', '0.0000', false);
	wp_enqueue_style('media-styles');
  
  wp_register_style('materialize', get_template_directory_uri().'/css/materialize.css', '', '0.0000', false);
  wp_enqueue_style('materialize');
  
  wp_register_style('fullpage', get_template_directory_uri().'/css/fullpage.min.css', '', '0.0000', false);
  wp_enqueue_style('fullpage');

  wp_register_script( 'scripts', get_template_directory_uri().'/js/script.js', '', '0.0000', false);
  wp_enqueue_script( 'scripts' );
  
  wp_register_script( 'materialize-js', get_template_directory_uri().'/js/materialize.min.js', '', '0.0000', false);
  wp_enqueue_script( 'materialize-js' );
  
  wp_register_script( 'fullpage-js', get_template_directory_uri().'/js/fullpage.min.js', '', '0.0000', false);
  wp_enqueue_script( 'fullpage-js' );

  wp_register_script( 'lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js' );
  wp_enqueue_script( 'lottie' );


get_header();
?>



<div class="section graphic_1">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_1">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Your unique and efficient design.</h1>
          <p>Get services from remote specialists who will visualize your ideas.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_eqf3fknf.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
          <a href="#page8">CONTACT US NOW</a>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_eqf3fknf.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>GRAPHIC DESIGN</h1>
      <h1>GRAPHIC DESIGN</h1>
    </div>
  </div>
</div>
<div class="section graphic_2 text_correction">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_2">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Art & illustrations.</h1>
          <p>Clothing design <span>|</span> Stock images <span>|</span> Infographics Concept projects <span>|</span>
            Lettering</p>
          <p class="main_subtitle">Get services from remote specialists who will visualize your ideas.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_2uckcxbq.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_2uckcxbq.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Art & illustrations</h1>
      <h1>Art & illustrations</h1>
    </div>
  </div>
</div>
<div class="section graphic_3 text_correction">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_3">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Printed products.</h1>
          <p>Books and reference books <span>|</span> Newspapers and magazines Newsletters <span>|</span> Catalogs and
            instructions </p>
          <p class="main_subtitle">Acquire design solutions for your printing merchandise from the creative team of
            remote specialists.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_rh5f594b.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_rh5f594b.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Printed products</h1>
      <h1>Printed products</h1>
    </div>
  </div>
</div>
<div class="section graphic_4 text_correction">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_4">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Package design.</h1>
          <p>Labels <span>|</span> Boxes <span>|</span> Food containers <br> Packages and bags </p>
          <p class="main_subtitle">Our employees will take care of complex assembly processes using their skills to make
            a catchy image for your packaging.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_d0uidtr3.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_d0uidtr3.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Package design</h1>
      <h1>Package design</h1>
    </div>
  </div>
</div>
<div class="section graphic_5 text_correction">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_5">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
        </nav>
      </div>
      <div class="main_info_section_wrapper">
        <div class="main_info_text">
          <h1>.Environment Design.</h1>
          <p>Printed signs <span>|</span> Museum exhibitions <span>|</span> Office styling Shop interior</p>
          <p class="main_subtitle">Use our services to enhance your brand perception and provide valuable information to
            employees and customers.</p>
          <div class="mobile_info_image">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_g2vkael0.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="main_info_image">
          <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_g2vkael0.json" background="transparent"
            speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </header>
  <div class="ticker_section">
    <div>
      <h1>Environment Design</h1>
      <h1>Environment Design</h1>
    </div>
  </div>
</div>
<div class="section graphic_6">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_6">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
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
<div class="section graphic_7">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_7">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger">
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
          <a href="#page8">get consultation</a>
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
          <button class="filter_btn" data-tab="#tab_1">Illustration</button>
          <button class="filter_btn active" data-tab="#tab_2">GRAPHIC DESIGN</button>
          <button class="filter_btn" data-tab="#tab_3">web design</button>
        </div>



        <!-- branding -->
        <div class="branding_wrapper tab_item" id="tab_1">
          <div class="vertical_wrapper_portfolio">

            <div class="portfolio_cards-branding">
              <div class="left_column_wrapper">
                <div class="top_wrapper">
                  <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_1.png"
                    data-modal="brand_popup_1" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_1.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_2.png"
                    data-modal="brand_popup_2" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_2.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                </div>

                <div class="bottom_wrapper">
                  <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_4.png"
                    data-modal="brand_popup_4" class="card graphic">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_4.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_5.png"
                    data-modal="brand_popup_5" class="card web">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_5.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="aside_wrapper">
                <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_3.jpg"
                  data-modal="brand_popup_3" class="card">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_3.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Illustration</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>

                <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_6.png"
                  data-modal="brand_popup_6" class="card web">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_6.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Illustration</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
              </div>
            </div>


            <div class="more">
              <!-- more block -->



              <!-- new cards in block "more" -->
              <div class="portfolio_cards-branding new_cards">
                <div class="left_column_wrapper">
                  <div class="top_wrapper">
                    <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/art_notebook.jpg"
                      data-modal="brand_popup_1" class="card branding">
                      <img data-src="/wp-content/uploads/2022/07/art_notebook.jpg">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/dog.png" data-modal="brand_popup_2"
                      class="card branding">
                      <img data-src="/wp-content/uploads/2022/07/dog.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="bottom_wrapper">
                    <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/jumppark-scaled.jpg"
                      data-modal="brand_popup_4" class="card graphic">
                      <img data-src="/wp-content/uploads/2022/07/jumppark-scaled.jpg" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/mental.jpg" data-modal="brand_popup_5"
                      class="card web">
                      <img data-src="/wp-content/uploads/2022/07/mental.jpg" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="aside_wrapper">
                  <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/music.jpg" data-modal="brand_popup_3"
                    class="card">
                    <img data-src="/wp-content/uploads/2022/07/music.jpg" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>


                  <a data-fslightbox="brand" href="/wp-content/uploads/2022/07/serpanok-scaled.jpg"
                    data-modal="brand_popup_6" class="card web">
                    <img data-src="/wp-content/uploads/2022/07/prev_serpanok.jpg" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="portfolio_cards-branding">
                <div class="left_column_wrapper">
                  <div class="top_wrapper">
                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_7.png"
                      data-modal="brand_popup_7" class="card branding">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_7.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_8.png"
                      data-modal="brand_popup_8" class="card branding">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_8.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="bottom_wrapper bottom_brand">
                    <div class="bottom_wrapper_10_11">
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_10.png"
                        data-modal="brand_popup_10" class="card brand_card_10">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_10.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_11.png"
                        data-modal="brand_popup_11" class="card">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_11.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                    </div>

                    <div class="bottom_wrapper_13_14">
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_13.jpg"
                        data-modal="brand_popup_13" class="card">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_13.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_14.jpg"
                        data-modal="brand_popup_14" class="card">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_14.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                    </div>
                    <div class="bottom_wrapper_16_17">
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_16.jpg"
                        data-modal="brand_popup_16" class="card">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_16.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_17.png"
                        data-modal="brand_popup_17" class="card">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_17.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                    </div>
                    <div class="bottom_wrapper_19">
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_19.jpg"
                        data-modal="brand_popup_19" class="card brand_popup_19">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_19.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <a data-fslightbox="brand"
                        href="/wp-content/uploads/2022/07/сlothes_store.png "
                        data-modal="brand_popup_19" class="card brand_popup_20">
                        <img data-src="/wp-content/uploads/2022/07/сlothes_store.png " alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Illustration</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <div data-modal="brand_popup_19" class="popup js-modal">
                        <div class="popup_body">
                          <div class="popup_title">
                            <div class="header_logo">
                              <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
                            <a class="popup_close" href="##">
                              <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                            </a>
                          </div>
                          <div class="popup_content">
                            <div class="popup_img">
                              <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_19.jpg"
                                alt="sort1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aside_wrapper">
                  <div class="aside_wrapper_9_12">
                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_9.jpg"
                      data-modal="brand_popup_9" class="card graphic">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_9.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                    <div data-modal="brand_popup_9" class="popup js-modal">
                      <div class="popup_body">
                        <div class="popup_title">
                          <div class="header_logo">
                            <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                          <a class="popup_close" href="##">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_9.jpg" alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>

                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_12.jpg"
                      data-modal="brand_popup_12" class="card brand_card_12">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_12.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                    <div data-modal="brand_popup_12" class="popup js-modal">
                      <div class="popup_body">
                        <div class="popup_title">
                          <div class="header_logo">
                            <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                          <a class="popup_close" href="##">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_12.jpg"
                              alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="aside_wrapper_15_18">
                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_15.jpg"
                      data-modal="brand_popup_15" class="card brand_card_15">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_15.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_18.png"
                      data-modal="brand_popup_18" class="card card_brand_18">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_18.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Illustration</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                    <div data-modal="brand_popup_18" class="popup js-modal">
                      <div class="popup_body">
                        <div class="popup_title">
                          <div class="header_logo">
                            <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                          <a class="popup_close" href="##">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_18.png"
                              alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="brand"
                    href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_21.jpg"
                    data-modal="brand_popup_21" class="card card_brand_21">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_21.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <div data-modal="brand_popup_21" class="popup js-modal">
                    <div class="popup_body">
                      <div class="popup_title">
                        <div class="header_logo">
                          <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a class="popup_close" href="##">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_21.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="brand"
                    href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_20.jpg"
                    data-modal="brand_popup_20" class="card card_brand_20">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_20.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Illustration</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <div data-modal="brand_popup_20" class="popup js-modal">
                    <div class="popup_body">
                      <div class="popup_title">
                        <div class="header_logo">
                          <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a class="popup_close" href="##">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_20.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- end more block -->

          </div>

          <div class="show_more_cards">
            <span class="moreBtn">Show more</span>
          </div>
        </div>

        <!-- graphic design -->
        <div class="graphic_wrapper tab_item active" id="tab_2">
          <div class="portfolio_cards-graphic">
            <div class="left_column_wrapper">
              <div class="top_wrapper">
                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_1.jpg"
                  data-modal="graphic_popup_1" class="card branding">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_1.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_2.jpg"
                  data-modal="graphic_popup_2" class="card branding">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_2.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
              </div>

              <div class="bottom_wrapper">
                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_4.jpg"
                  data-modal="graphic_popup_4" class="card graphic">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_4.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>

                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_5.jpg"
                  data-modal="graphic_popup_5" class="card web">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_5.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="aside_wrapper">
              <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_3.jpg"
                data-modal="graphic_popup_3" class="card graphic">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_3.png" alt="">
                <div class="card_hover">
                  <ul>
                    <li>Graphic design</li>
                  </ul>
                  <p>We will make your brand bright and recognizable all over the world, just trust us.
                  </p>
                </div>
              </a>

              <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_6.png"
                data-modal="graphic_popup_6" class="card web">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_6.png" alt="">
                <div class="card_hover">
                  <ul>
                    <li>Graphic design</li>
                  </ul>
                  <p>We will make your brand bright and recognizable all over the world, just trust us.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="more">
            <div class="portfolio_cards-branding">
              <div class="left_column_wrapper">
                <div class="top_wrapper">
                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_7.jpg"
                    data-modal="graph_popup_7" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_7.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Graphic design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_8.png"
                    data-modal="graph_popup_8" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_8.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Graphic design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                </div>

                <div class="bottom_wrapper bottom_brand">
                  <div class="bottom_wrapper_10_11">
                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_10.jpg"
                      data-modal="graph_popup_10" class="card brand_card_10">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_10.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_11.png"
                      data-modal="graph_popup_11" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_11.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="bottom_wrapper_13_14">
                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_13.jpg"
                      data-modal="graph_popup_13" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_13.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_14.jpg"
                      data-modal="graph_popup_14" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_14.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="bottom_wrapper_16_17">
                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_16.png"
                      data-modal="graph_popup_16" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_16.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_17.png"
                      data-modal="graph_popup_17" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_17.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="bottom_wrapper_19">
                    <a data-fslightbox="graph"
                      href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_19.jpg"
                      data-modal="graph_popup_19" class="card brand_popup_19">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_19.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Graphic design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                    <div data-modal="graph_popup_19" class="popup js-modal">
                      <div class="popup_body">
                        <div class="popup_title">
                          <div class="header_logo">
                            <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                          <a class="popup_close" href="##">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_19.jpg" alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aside_wrapper">
                <div class="aside_wrapper_9_12">
                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_9.jpg"
                    data-modal="brand_popup_9" class="card graphic">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_9.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Graphic design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <div data-modal="brand_popup_9" class="popup js-modal">
                    <div class="popup_body">
                      <div class="popup_title">
                        <div class="header_logo">
                          <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a class="popup_close" href="##">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_9.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_12.jpg"
                    data-modal="brand_popup_12" class="card brand_card_12">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_12.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Graphic design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <div data-modal="brand_popup_12" class="popup js-modal">
                    <div class="popup_body">
                      <div class="popup_title">
                        <div class="header_logo">
                          <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a class="popup_close" href="##">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_12.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_15.jpg"
                  data-modal="graph_popup_15" class="card">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_15.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <div data-modal="graph_popup_15" class="popup js-modal">
                  <div class="popup_body">
                    <div class="popup_title">
                      <div class="header_logo">
                        <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
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
                      <a class="popup_close" href="##">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                      </a>
                    </div>
                    <div class="popup_content">
                      <div class="popup_img">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_15.jpg" alt="sort1">
                      </div>
                    </div>
                  </div>
                </div>

                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_18.jpg"
                  data-modal="graph_popup_18" class="card card_brand_18">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_18.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <div data-modal="graph_popup_18" class="popup js-modal">
                  <div class="popup_body">
                    <div class="popup_title">
                      <div class="header_logo">
                        <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
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
                      <a class="popup_close" href="##">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                      </a>
                    </div>
                    <div class="popup_content">
                      <div class="popup_img">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_18.jpg" alt="sort1">
                      </div>
                    </div>
                  </div>
                </div>

                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_21.png"
                  data-modal="graph_popup_21" class="card card_brand_21 card_graph_21">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_21.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Illustration</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <div data-modal="graph_popup_21" class="popup js-modal">
                  <div class="popup_body">
                    <div class="popup_title">
                      <div class="header_logo">
                        <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
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
                      <a class="popup_close" href="##">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                      </a>
                    </div>
                    <div class="popup_content">
                      <div class="popup_img">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_21.png" alt="sort1">
                      </div>
                    </div>
                  </div>
                </div>

                <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_20.png"
                  data-modal="graph_popup_20" class="card card_brand_20 card_graph_20">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_20.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Illustration</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <div data-modal="graph_popup_20" class="popup js-modal">
                  <div class="popup_body">
                    <div class="popup_title">
                      <div class="header_logo">
                        <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
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
                      <a class="popup_close" href="##">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                      </a>
                    </div>
                    <div class="popup_content">
                      <div class="popup_img">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_20.png" alt="sort1">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="show_more_cards">
            <span class="moreBtn">Show more</span>
          </div>
        </div>

        <!-- web design -->
        <div class="web_wrapper tab_item" id="tab_3">
          <div class="portfolio_cards-web">
            <div class="left_column_wrapper">
              <div class="top_wrapper">
                <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_1.jpg" data-fslightbox="web"
                  data-modal="web_popup_1" class="card branding">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_1.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>web design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_2.jpg" data-fslightbox="web"
                  data-modal="web_popup_2" class="card branding">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_2.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>web design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
              </div>

              <div class="bottom_wrapper">
                <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_4.png" data-fslightbox="web"
                  data-modal="web_popup_4" class="card graphic">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_4.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>web design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_5.jpg" data-fslightbox="web"
                  data-modal="web_popup_5" class="card web">
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_5.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Web design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="aside_wrapper">
              <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_3.jpg" data-fslightbox="web"
                data-modal="web_popup_3" class="card graphic">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_3.png" alt="">
                <div class="card_hover">
                  <ul>
                    <li>web design</li>
                  </ul>
                  <p>We will make your brand bright and recognizable all over the world, just trust us.
                  </p>
                </div>
              </a>

              <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_6.jpg" data-fslightbox="web"
                data-modal="web_popup_6" class="card web">
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_6.png" alt="">
                <div class="card_hover">
                  <ul>
                    <li>Web design</li>
                  </ul>
                  <p>We will make your brand bright and recognizable all over the world, just trust us.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="more">
            <div class="portfolio_cards-web">
              <div class="left_column_wrapper">
                <div class="top_wrapper">
                  <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_7.jpg" data-fslightbox="web"
                    data-modal="web_popup_7" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_7.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>web design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_8.jpg" data-fslightbox="web"
                    data-modal="web_popup_8" class="card branding">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_8.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>web design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                </div>

                <div class="bottom_wrapper bottom_brand">
                  <div class="bottom_wrapper_10_11">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_10.png" data-fslightbox="web"
                      data-modal="web_popup_10" class="card brand_card_10">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_10.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>web design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_11.jpg" data-fslightbox="web"
                      data-modal="web_popup_11" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_11.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>web design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="bottom_wrapper_13_14">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_13.jpg" data-fslightbox="web"
                      data-modal="web_popup_13" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_13.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>web design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_14.png" data-fslightbox="web"
                      data-modal="web_popup_14" class="card">
                      <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_14.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>web design</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="aside_wrapper">
                <div class="aside_wrapper_9_12">
                  <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_9.jpg" data-fslightbox="web"
                    data-modal="web_popup_9" class="card graphic">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_9.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>web design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a href="<?php echo get_template_directory_uri(); ?>/img/web/web_12.jpg" data-fslightbox="web"
                    data-modal="web_popup_12" class="card brand_card_12">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_12.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>web design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <div data-modal="web_popup_12" class="popup js-modal">
                    <div class="popup_body">
                      <div class="popup_title">
                        <div class="header_logo">
                          <svg width="164" height="51" viewBox="0 0 164 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a class="popup_close" href="##">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img data-src="<?php echo get_template_directory_uri(); ?>/img/web/web_12.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="show_more_cards">
            <span class="moreBtn">Show more</span>
          </div>
        </div>

      </div>
    </div>
  </header>
</div>
<div class="section graphic_8">
  <header>
    <div class="container">
      <div class="header_wrapper">
        <div class="header_logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav>

          <div class="burger" data-id="menu_8">
            <p>menu</p>
            <img data-src="/wp-content/uploads/2022/07/burger_lines.png" alt="burger"><span></span>
          </div>
          <div class="burger_content" data-id="menu_8">
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
          <a href="#page8">get consultation</a>
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