<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package design
 */


add_action( 'addStyle', function () {

  // jquery-initialization
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );

  // styles-initialization
	wp_register_style('styles', get_template_directory_uri().'/css/style.css', '', '0.0000', false);
	wp_enqueue_style('styles');

  wp_register_style('media-styles', get_template_directory_uri().'/css/media.css', '', '0.0000', false);
	wp_enqueue_style('media-styles');

	wp_register_style('materialize', get_template_directory_uri().'/css/materialize.css', '', '0.0000', false);
	wp_enqueue_style('materialize');

	wp_register_style('fullpage', get_template_directory_uri().'/css/fullpage.min.css', '', '0.0000', false);
	wp_enqueue_style('fullpage');

  // scripts-initialization 
	wp_register_script( 'scripts', get_template_directory_uri().'/js/script.js', '', '0.0000', false);
	wp_enqueue_script( 'scripts' );

	wp_register_script( 'materialize-js', get_template_directory_uri().'/js/materialize.min.js', '', '0.0000', false);
	wp_enqueue_script( 'materialize-js' );

	wp_register_script( 'fullpage-js', get_template_directory_uri().'/js/fullpage.min.js', '', '0.0000', false);
	wp_enqueue_script( 'fullpage-js' );

	
	wp_register_script( 'lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js' );
	wp_enqueue_script( 'lottie' );

});

do_action( 'addStyle' );

get_header();
?>

  <div class="section first_section">
    <header>
      <div class="container">
        <div class="main_page_container">
          <div class="header_wrapper">
            <div class="header_logo">
              <?php the_custom_logo(); ?>
            </div>
            <nav>
              <div class="burger">
                <p>menu</p>
                <span></span>
              </div>

              <div class="burger_content">
                <div class="burger_content_wrapper">
                  <div class="burger_info">
                    <div class="container">
                      <div class="burger_info_top">
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
                        <span class="close_burger"></span>
                      </div>
                      <div class="burger_text_wrapper">
                        <div class="burger_info_text">
                          <div>
                            <ul>
                              <a href="##">
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
                              <a href="##">
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
                              <a href="##">
                                <li>Branding</li>
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
                        <a href="tel:+380997101033">
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
                  <div class="mobile_burger_logo">
                    <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                        fill="#FBFBFB" fill-opacity="0.05" />
                      <path
                        d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                        fill="#FBFBFB" fill-opacity="0.05" />
                      <path
                        d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                        fill="#FBFBFB" fill-opacity="0.05" />
                    </svg>
                  </div>
                </div>
              </div>

              <a href="#contact_id">get consultation</a>
            </nav>
          </div>
          <main>
            <p>UKRAINE</p>
            <h1>.DESIGN STUDIO.</h1>
            <ul class="main_list">
              <li>WEB DESIGN</li>
              <li>GRAPHIC DESIGN</li>
              <li>BRANDING</li>
            </ul>
            <span>Leave your visuals to our professional remote team</span>
          </main>
        </div>
      </div>
    </header>
    <div class="first_section_circles">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="ticker">
      <div>
        <h1>DGN</h1>
      </div>
    </div>
  </div>
  <div class="section second_section">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>

            </div>
            <a href="#contact_id">get consultation</a>
          </nav>
        </div>
        <div class="main_info_section_wrapper">
          <div class="main_info_text">
            <h1>.BRANDING DESIGN.</h1>
            <p>We will make your brand bright and recognizable all over the world, just trust us.</p>
            <div class="mobile_info_image">
              <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_vp1yg7lp.json" background="transparent"
                speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
            </div>
            <a href="<?php the_permalink(17); ?>" target="_blank">MORE INFORMATION</a>
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
  <div class="section graphic">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>
            </div>
            <a href="#contact_id">get consultation</a>
          </nav>
        </div>
        <div class="main_info_section_wrapper">
          <div class="main_info_text">
            <h1>.GRAPHIC DESIGN.</h1>
            <p>Our graphic designers create art in a new format that incorporates the old traditions.</p>
            <div class="mobile_info_image">
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_eqf3fknf.json" background="transparent"
                speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
            </div>
            <a href="<?php the_permalink(22); ?>" target="_blank">MORE INFORMATION</a>
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
  <div class="section web">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>

            </div>
            <a href="#contact_id">get consultation</a>
          </nav>
        </div>
        <div class="main_info_section_wrapper">
          <div class="main_info_text">
            <h1>.WEB DESIGN.</h1>
            <p>Every site developed by our web designers is appealing even across the prism of the old monitor.</p>
            <div class="mobile_info_image">
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_claxxda0.json" background="transparent"
                speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
            </div>
            <a href="<?php the_permalink(24); ?>" target="_blank">MORE INFORMATION</a>
          </div>
          <div class="main_info_image">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_claxxda0.json" background="transparent"
              speed="1" style="width: 90%; height: 90%;" loop autoplay></lottie-player>
          </div>
        </div>
      </div>
    </header>
    <div class="ticker_section">
      <div>
        <h1>WEB DESIGN</h1>
        <h1>WEB DESIGN</h1>
      </div>
    </div>
  </div>
  <div class="section pricing">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>

            </div>
            <a href="#contact_id">get consultation</a>
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
                  <li>Warlrames</li>
                  <li>StyleGuide</li>
                  <li>Infographics</li>
                  <li>Email Campaign Concept</li>
                  <li>Social Media Design</li>
                </ul>
                <h1>€800/$840</h1>
              </div>
              <div class="price_link">
                <div class="price_link_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                </div>
                <a data-modal="cal_modal_1" class="price_btn" href="##">Set a call</a>
              </div>
            </div>
            <div data-modal="cal_modal_1" class="card_price_modal_calendly">
              <div class="card_price_modal_calendly_content">
                <!-- <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
                    </div> -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/asven0099/design-consultation"></div>
                <div class="calendly_close">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                </div>
                <a data-modal="cal_modal_2" class="price_btn" href="##">Set a call</a>
              </div>
            </div>
            <div data-modal="cal_modal_2" class="card_price_modal_calendly">
              <div class="card_price_modal_calendly_content">
                <!-- <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
                    </div> -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/asven0099/design-consultation"></div>
                <div class="calendly_close">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                </div>
                <a data-modal="cal_modal_3" class="price_btn" href="##">Set a call</a>
              </div>
            </div>
            <div data-modal="cal_modal_3" class="card_price_modal_calendly">
              <div class="card_price_modal_calendly_content">
                <!-- <div class="calendly-inline-widget" data-url="https://calendly.com/sales-rhs/set-appointment">
                    </div> -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/asven0099/design-consultation"></div>
                <div class="calendly_close">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                </div>
              </div>
            </div>

          </div>
          <div class="mobile_cards_price_wrapper">
            <div class="slide">
              <div class="card_price">
                <div class="card_price_content">
                  <h2>.Starter.</h2>
                  <p>40 hours valid 30 days</p>
                  <ul>
                    <li>Visual Audit</li>
                    <li>Logo & Corporate Identity</li>
                    <li>Brand Naming & Renaming</li>
                    <li>Warlrames</li>
                    <li>StyleGuide</li>
                    <li>Infographics</li>
                    <li>Email Campaign Concept</li>
                    <li>Social Media Design</li>
                  </ul>
                  <h1>€800/$840</h1>
                </div>
                <div class="price_link">
                  <div class="price_link_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                  </div>
                  <a href="##">Set a call</a>
                </div>
              </div>
            </div>
            <div class="slide">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                  </div>
                  <a href="##">Set a call</a>
                </div>
              </div>
            </div>
            <div class="slide">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card_arrow.png" alt="">
                  </div>
                  <a href="##">Set a call</a>
                </div>
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
  <div class="section portfolio">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>

            </div>
            <a href="#contact_id">get consultation</a>
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
            <button class="filter_btn" data-tab="#tab_1">Branding</button>
            <button class="filter_btn" data-tab="#tab_2">GRAPHIC DESIGN</button>
            <button class="filter_btn" data-tab="#tab_3">web design</button>
          </div>


          <!-- defaults cards -->
          <div class="default_wrapper tab_item active">
            <div class="portfolio_cards-default">
              <div class="left_column_wrapper">
                <div class="top_wrapper">
                  <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_1.png"
                    data-modal="popup_1" class="card branding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_1.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Branding</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_2.png"
                    data-modal="popup_2" class="card branding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_2.png" alt="">
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
                  <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_4.jpg"
                    data-modal="popup_4" class="card graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_4.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Graphic design</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>
                  <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_5.jpg"
                    data-modal="popup_5" class="card web">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_5.png" alt="">
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
                <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_3.jpg"
                  data-modal="popup_3" class="card graphic">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_3.png" alt="">
                  <div class="card_hover">
                    <ul>
                      <li>Graphic design</li>
                    </ul>
                    <p>We will make your brand bright and recognizable all over the world, just trust us.
                    </p>
                  </div>
                </a>
                <a data-fslightbox="default" href="<?php echo get_template_directory_uri(); ?>/img/main_page/main_6.jpg"
                  data-modal="popup_6" class="card web">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/main_page/prev_main_6.png" alt="">
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
          </div>


          <!-- branding -->
          <div class="branding_wrapper tab_item" id="tab_1">
            <div class="vertical_wrapper_portfolio">
              <div class="portfolio_cards-branding">
                <div class="left_column_wrapper">
                  <div class="top_wrapper">
                    <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_1.png"
                      data-modal="brand_popup_1" class="card branding">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_1.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_2.png"
                      data-modal="brand_popup_2" class="card branding">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_2.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="bottom_wrapper">
                    <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_4.png"
                      data-modal="brand_popup_4" class="card graphic">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_4.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
                        </ul>
                        <p>We will make your brand bright and recognizable all over the world, just trust us.
                        </p>
                      </div>
                    </a>

                    <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_5.png"
                      data-modal="brand_popup_5" class="card web">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_5.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_3.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Branding</li>
                      </ul>
                      <p>We will make your brand bright and recognizable all over the world, just trust us.
                      </p>
                    </div>
                  </a>

                  <a data-fslightbox="brand" href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_6.png"
                    data-modal="brand_popup_6" class="card web">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_6.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Branding</li>
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
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_7.png"
                        data-modal="brand_popup_7" class="card branding">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_7.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>
                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_8.png"
                        data-modal="brand_popup_8" class="card branding">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_8.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_10.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
                            </ul>
                            <p>We will make your brand bright and recognizable all over the world, just trust us.
                            </p>
                          </div>
                        </a>
                        <a data-fslightbox="brand"
                          href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_11.png"
                          data-modal="brand_popup_11" class="card">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_11.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_13.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
                            </ul>
                            <p>We will make your brand bright and recognizable all over the world, just trust us.
                            </p>
                          </div>
                        </a>
                        <a data-fslightbox="brand"
                          href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_14.jpg"
                          data-modal="brand_popup_14" class="card">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_14.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_16.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
                            </ul>
                            <p>We will make your brand bright and recognizable all over the world, just trust us.
                            </p>
                          </div>
                        </a>
                        <a data-fslightbox="brand"
                          href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_17.png"
                          data-modal="brand_popup_17" class="card">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_17.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_19.png" alt="">
                          <div class="card_hover">
                            <ul>
                              <li>Branding</li>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                              </a>
                            </div>
                            <div class="popup_content">
                              <div class="popup_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_19.jpg"
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_9.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
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
                              <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                            </a>
                          </div>
                          <div class="popup_content">
                            <div class="popup_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_9.jpg" alt="sort1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_12.jpg"
                        data-modal="brand_popup_12" class="card brand_card_12">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_12.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
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
                              <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                            </a>
                          </div>
                          <div class="popup_content">
                            <div class="popup_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_12.jpg"
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_15.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
                          </ul>
                          <p>We will make your brand bright and recognizable all over the world, just trust us.
                          </p>
                        </div>
                      </a>

                      <a data-fslightbox="brand"
                        href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_18.png"
                        data-modal="brand_popup_18" class="card card_brand_18">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_18.png" alt="">
                        <div class="card_hover">
                          <ul>
                            <li>Branding</li>
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
                              <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                            </a>
                          </div>
                          <div class="popup_content">
                            <div class="popup_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_18.png"
                                alt="sort1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_21.jpg"
                      data-modal="brand_popup_21" class="card card_brand_21">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_21.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_21.jpg" alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>

                    <a data-fslightbox="brand"
                      href="<?php echo get_template_directory_uri(); ?>/img/branding/brand_20.jpg"
                      data-modal="brand_popup_20" class="card card_brand_20">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/branding/prev_brand_20.png" alt="">
                      <div class="card_hover">
                        <ul>
                          <li>Branding</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/branding/brand_20.jpg" alt="sort1">
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

          <!-- graphic design -->
          <div class="graphic_wrapper tab_item" id="tab_2">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_2.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_4.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_5.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_3.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_6.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_7.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_8.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_10.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_11.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_13.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_14.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_16.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_17.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_19.png" alt="">
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
                              <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                            </a>
                          </div>
                          <div class="popup_content">
                            <div class="popup_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_19.jpg" alt="sort1">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_9.png" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_9.jpg" alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>

                    <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_12.jpg"
                      data-modal="brand_popup_12" class="card brand_card_12">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_12.png" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_12.jpg" alt="sort1">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_15.jpg"
                    data-modal="graph_popup_15" class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_15.png" alt="">
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_15.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_18.jpg"
                    data-modal="graph_popup_18" class="card card_brand_18">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_18.png" alt="">
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_18.jpg" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_21.png"
                    data-modal="graph_popup_21" class="card card_brand_21 card_graph_21">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_21.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_21.png" alt="sort1">
                        </div>
                      </div>
                    </div>
                  </div>

                  <a data-fslightbox="graph" href="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_20.png"
                    data-modal="graph_popup_20" class="card card_brand_20 card_graph_20">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/prev_graph_20.png" alt="">
                    <div class="card_hover">
                      <ul>
                        <li>Branding</li>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                        </a>
                      </div>
                      <div class="popup_content">
                        <div class="popup_img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/graphic/graph_20.png" alt="sort1">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_2.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_4.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_5.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_3.png" alt="">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_6.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_7.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_8.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_10.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_11.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_13.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_14.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_9.png" alt="">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/web/prev_web_12.png" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="">
                          </a>
                        </div>
                        <div class="popup_content">
                          <div class="popup_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/web/web_12.jpg" alt="sort1">
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
  <div id="contact_id" class="section contact">
    <header>
      <div class="container">
        <div class="header_wrapper">
          <div class="header_logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav>

            <div class="burger">
              <p>menu</p>
              <span></span>
            </div>
            <div class="burger_content">
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
                            <a href="##">
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
                            <a href="##">
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
                            <a href="##">
                              <li>Branding</li>
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
                      <a href="tel:+380997101033">
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
                <div class="mobile_burger_logo">
                  <svg viewBox="0 0 375 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-8 2.99453H56.0252C70.5004 2.99453 83.2436 5.67714 94.2547 11.0424C105.389 16.2828 113.988 23.8315 120.05 33.6885C126.236 43.5455 129.329 55.1494 129.329 68.5C129.329 81.8506 126.236 93.4545 120.05 103.311C113.988 113.168 105.389 120.78 94.2547 126.145C83.2436 131.385 70.5004 134.005 56.0252 134.005H-8V2.99453ZM54.1694 99.5683C63.5721 99.5683 71.0572 96.8857 76.6246 91.5205C82.3157 86.0305 85.1613 78.357 85.1613 68.5C85.1613 58.643 82.3157 51.0319 76.6246 45.6667C71.0572 40.1767 63.5721 37.4317 54.1694 37.4317H35.7969V99.5683H54.1694Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M231.245 64.944H269.289V120.343C261.618 125.708 252.71 129.826 242.565 132.695C232.42 135.565 222.461 137 212.687 137C198.83 137 186.396 134.13 175.385 128.391C164.374 122.526 155.714 114.416 149.404 104.06C143.218 93.5792 140.125 81.7259 140.125 68.5C140.125 55.2741 143.218 43.4831 149.404 33.127C155.714 22.6462 164.436 14.536 175.571 8.79645C186.829 2.93215 199.511 0 213.615 0C226.358 0 237.74 2.18351 247.761 6.55054C257.906 10.7928 266.319 17.0314 273 25.2664L244.978 50.1585C236.812 40.551 227.1 35.7473 215.842 35.7473C206.191 35.7473 198.521 38.6794 192.83 44.5437C187.139 50.408 184.293 58.3934 184.293 68.5C184.293 78.357 187.077 86.2801 192.644 92.2691C198.335 98.2582 205.882 101.253 215.285 101.253C220.852 101.253 226.172 100.192 231.245 98.071V64.944Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                    <path
                      d="M416 2.99453V134.005H379.997L330.633 74.4891V134.005H287.95V2.99453H323.952L373.317 62.5109V2.99453H416Z"
                      fill="#FBFBFB" fill-opacity="0.05" />
                  </svg>
                </div>
              </div>

            </div>
            <a href="##">get consultation</a>
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


        </div>
      </div>



      <footer>
        <div class="container">
          <div class="footer_links">
            <a href="tel:+380997101033" target="_blank" title="+380997101033">Whatsapp</a>
            <a href="mailto:sales@d-gn.com" target="_blank" title="sales@d-gn.com">sales@d-gn.com</a>
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