<?php
/**
 * Plugin Name:       Go up on click
 * Description:       A simple plugin to create scroll back to top button.
 * Author:            Alex George
 */

if ( ! class_exists( 'go_up' ) ) {

	class go_up {

		protected static $instance;
		public static function instance() {
			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		/**
		 * Scrollup_Master constructor.
		 */
		public function __construct() {
			add_action( 'wp_head', array( $this, 'inline_styles' ), 8 );
			add_action( 'wp_footer', array( $this, 'go_up_icon' ), 1 );

		}

		/**
		 * Plugin inline style
		 */
		public function inline_styles() {

			?>
	
            <style type="text/css">

            .btnWrap{
            	width:100%;
            }
						.myBtn {
						  display: none;
						  position: fixed;
						  bottom: 10px;
						  left: 20px;
						  z-index: 1000;
						  font-size: 18px;
						  border: none;
						  outline: none;
						  background-color: red;
						  color: white;
						  cursor: pointer;
						  padding: 15px;
						  border-radius: 70px;
						  margin:auto;
						  margin-left: 44%;
						}
						.myBtn:hover {
		  background-color: #FFA500;
		}
            </style>
			<?php
		}

		/**
		 * Scroll to top icon
		 */
		public function go_up_icon() {


			?>


<div class="btnWrap">
 <button onclick="topFunction()" id="myBtn" class="myBtn" title="Go to top" >Click to go up</button>
</div>
           


            <script type='text/javascript'>

// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function() {scrollFunction()};

				function scrollFunction() {
				  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				    document.getElementById("myBtn").style.display = "block";
				  } else {
				    document.getElementById("myBtn").style.display = "none";
				  }
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
				  document.body.scrollTop = 0;
				  document.documentElement.scrollTop = 0;
				}

            </script>
            <?php
		}

	}
}

add_action( 'plugins_loaded', array( 'go_up', 'instance' ) );
