<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function hotel_theme_setup() {
	
	/* Load the primary menu. */
	remove_action( 'omega_before_header', 'omega_get_primary_menu' );	
	add_action( 'omega_header', 'omega_get_primary_menu' );
	add_action( 'omega_header', 'hotel_intro');
	add_filter( 'omega_site_description', 'hotel_site_description' );

	/* Add support for a custom header image. */
	add_theme_support(
		'custom-header',
		array( 'header-text' => false,
			'flex-width'    => true,
			'uploads'       => true,
			'default-image' => get_stylesheet_directory_uri() . '/images/header.png' ) );

	/* Custom background. */
	add_theme_support( 
		'custom-background',
		array( 'default-color' => 'e6dabb' )
	);

	add_action('init', 'hotel_init', 1);

}

add_action( 'after_setup_theme', 'hotel_theme_setup', 11 );

/* disable site description */

function hotel_site_description($desc) {
	$desc = "";
	return $desc;
}

function hotel_init() {
	if(!is_admin()){
		wp_enqueue_script("tinynav", get_stylesheet_directory_uri() . '/js/tinynav.js', array('jquery'));
	} 
}

/* display custom header image */

function hotel_intro() {
	echo "<div class='intro'>";
	if(is_front_page()) {					
		if (get_header_image()) {
			echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="' . get_bloginfo( 'description' ) . '" />';
		}
	} else {		
		// get title		
		$id = get_option('page_for_posts');
		if ( is_day() || is_month() || is_year() || is_tag() || is_category() || is_singular('post' ) || is_home() ) {
			$the_title = get_the_title($id);
		} else {
			$the_title = get_the_title(); 
		}
		
		if (( 'posts' == get_option( 'show_on_front' )) && (is_day() || is_month() || is_year() || is_tag() || is_category() || is_singular('post' ) || is_home())) {
			echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="' . $the_title . '" />';	
		} elseif(is_home() || is_singular('post' ) ) {
			if ( has_post_thumbnail($id) ) {
				echo get_the_post_thumbnail( $id, 'full' );
			} elseif (get_header_image()) {
				echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="' . $the_title . '" />';	
			}
		} elseif ( has_post_thumbnail() && is_singular('page' ) ) {	
			the_post_thumbnail();
		} elseif (get_header_image()) {
			echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="' . $the_title . '" />';	
		}
	}       
	echo "</div>";	
}

add_action( 'rest_api_init', 'register_api_hooks' );

function register_api_hooks() {
	register_rest_route(
		'custom-plugin', '/login/',
		array(
			'methods'  => 'GET',
			'callback' => 'login',
		)
	);
}

function login($request){
	session_start();
	$creds = array();
	$creds['user_login'] = $request["username"];
	$creds['user_password'] =  $request["password"];
	// $creds['remember'] = true;

	$_SESSION['se_login'] = $creds['user_login'];
	$_SESSION['se_password'] = $creds['user_password'];

	// echo $_SESSION['se_login'];
	// echo $_SESSION['se_password'];


	$user = wp_signon( $creds, false );

	if ( is_wp_error($user) )
		echo $user->get_error_message();
		// echo "hello";

	return $user;
}

// add_action( 'after_setup_theme', 'custom_login' );

function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');

add_filter('allowed_http_origins', 'add_allowed_origins');

function add_allowed_origins($origins) {
    $origins[] = 'https://www.yourdomain.com/';
    return $origins;
}
add_filter( 'something', 'regis_options' );













add_action( 'rest_api_init', 'register_api_hooks_booking' );
function register_api_hooks_booking() {
	register_rest_route(
		'custom-plugin', '/hotel/',
		array(
			'methods'  => 'POST',
			'callback' => 'Hotel_booking',
		)
	);
}
function Hotel_booking($request){
	$nm=$_POST['post_title'];//hotel name
	$ph_no=$_POST['post_mime_type'];//user mobile_no
	$usern=$_POST['post_content'];//username
	$dt=$_POST['post_date'];
	$dtr=$_POST['post_date_gmt'];
	$adt=$_POST['post_parent'];
	$child=$_POST['post_password'];
	
	$pinged = $_POST['pinged'];

	
	if($ph_no == "" || !preg_match("/^[0-9]{10}$/", $ph_no))
	{

		$required = "BAD Request";
		http_response_code(400);
		echo $required;
		exit;
  // echo "All Fields Are Reqiuired";
	}
	else{

		$con = mysqli_connect('localhost','root','','tourism');

		$qy= "INSERT INTO wp_posts (post_title, post_mime_type, post_content, post_date,  post_date_gmt , post_parent , post_password , pinged )
		VALUES ('$nm','$ph_no','$usern','$dt','$dtr','$adt','$child','$pinged')";

		if ($con->query($qy) === TRUE) {
			$abc =mysqli_insert_id($con);

			echo "ID  :".$abc . "Hotel_Name  :".$nm."MobileNo.  :".$ph_no."Name  :".$usern."Chaking_Date  :".$dt."Checkout_Date  :".$dtr."Adult_Person  :".$adt."Children_Person  :".$child;
		} 
		else {
			echo "Error: " . $qy . "<br>" . $con->error;
		}
	}
	
}






add_action( 'rest_api_init', 'logoutfn' );

function logoutfn() {
  register_rest_route(
    'custom-plugin', '/logout/',
    array(
      'methods'  => 'GET',
      'callback' => 'logout')
  );
}
function logout(){
	
 session_destroy();
}



add_action( 'rest_api_init', 'Book_hotel' );

function Book_hotel() {
  register_rest_route(
    'custom-plugin', '/book/',
    array(
      'methods'  => 'GET',
      'callback' => 'hotel_room')
  );
}


function hotel_room($data){

	$pinged = $_GET['pinged'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourism";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
         $sql = "SELECT post_title, post_mime_type, post_content, post_date, post_date_gmt, post_parent, post_password FROM wp_posts WHERE pinged = $pinged";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	echo json_encode($row);
              $sql = "SELECT post_title, post_mime_type, post_content, post_date, post_date_gmt, post_parent, post_password FROM wp_posts WHERE pinged = $pinged";
                    echo "Hotel Name: "   . $row["post_title"]. "\n".
                         "phone:"   . $row["post_mime_type"]. "\n".
                         "username: "  . $row["post_content"].  "\n". 
                         "date:". $row["post_date"]."\n" ;
            }
        } else 
        {
            echo "This User is not valid to see his bookings"; 
        }
}
