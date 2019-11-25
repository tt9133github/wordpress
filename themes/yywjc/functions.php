<?php

if ( ! function_exists( 'yywjc_setup' ) ) :
	function yywjc_setup() {

		if ( ! isset( $content_width ) ) {
			$content_width = 725;
		}

		load_theme_textdomain( 'basic', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );


		add_theme_support( 'custom-background', apply_filters( 'basic_custom_background_args', array( 'default-color' => 'ffffff' ) ) );
		add_theme_support( 'custom-header', array(
			'width'       => 1080,
			'height'      => 190,
			'flex-height' => true,
		) );

		register_nav_menus( array(
			'top'    => __( '主菜单', 'basic' ),
			'bottom' => __( '底部菜单', 'basic' )
		) );


		// logo
		$args = array();
		$lpos = get_theme_mod( 'display_logo_and_title' );
		if ( false === $lpos || 'image' == $lpos ) {
			$args['header-text'] = array( 'blog-name' );
		}
		add_theme_support( 'custom-logo', $args );

	}
endif;
add_action( 'after_setup_theme', 'yywjc_setup' );
function get_search_form_wphy( $echo = true ) {
	/**
	 * Fires before the search form is retrieved, at the start of get_search_form().
	 *
	 * @since 2.7.0 as 'get_search_form' action.
	 * @since 3.6.0
	 *
	 * @link https://core.trac.wordpress.org/ticket/19321
	 */
	do_action( 'pre_get_search_form' );

	$format = current_theme_supports( 'html5', 'search-form' ) ? 'html5' : 'xhtml';

	/**
	 * Filter the HTML format of the search form.
	 *
	 * @since 3.6.0
	 *
	 * @param string $format The type of markup to use in the search form.
	 *                       Accepts 'html5', 'xhtml'.
	 */
	$format = apply_filters( 'search_form_format', $format );

	$search_form_template = locate_template( 'searchform.php' );
	if ( '' != $search_form_template ) {
		ob_start();
		require( $search_form_template );
		$form = ob_get_clean();
	} else {
		if ( 'html5' == $format ) {
			$form = '<form role="search" method="get" id="searchform" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" value="' . get_search_query() . '" class="form-control search-field" placeholder="搜索" name="s" id="s" />
					
				</label>
				<button type="submit" class="search-submit"><i class="glyphicon glyphicon-search"></i></button>
			</form>';
			// $form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
				
			// 	<input type="submit" class="search-submit" value="" />
			// </form>';
		} else {
			$form = '<form role="search" method="get" id="searchform" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" value="' . get_search_query() . '" class="form-control search-field" placeholder="搜索" name="s" id="s" />
					
				</label>
				<button type="submit" class="search-submit"><i class="glyphicon glyphicon-search"></i></button>
			</form>';
		}
	}

	/**
	 * Filter the HTML output of the search form.
	 *
	 * @since 2.7.0
	 *
	 * @param string $form The search form HTML output.
	 */
	$result = apply_filters( 'get_search_form', $form );

	if ( null === $result )
		$result = $form;

	if ( $echo )
		echo $result;
	else
		return $result;

}
function par_pagenavi($range = 9){  
    global $paged, $wp_query;  
    if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}  
    if($max_page > 1){if(!$paged){$paged = 1;}  
    // if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}  
    previous_posts_link( $format = '&laquo;');  
    if($max_page > $range){  
        if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";  
        if($i==$paged)echo " class='current'";echo ">$i</a>";}}  
    elseif($paged >= ($max_page - ceil(($range/2)))){  
        for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";  
        if($i==$paged)echo " class='current'";echo ">$i</a>";}}  
    elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}  
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";  
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}  
    next_posts_link( $format = '&laquo;');  
    // if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}
	}  
}
// function sub_text($t,$len){

//     $text = $t;
//     return strlen($text)<=$len ? $text : (substr($text,0,$len).chr(0)."...");
// }
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){ 
		return false;
		$first_img = get_bloginfo('template_directory')."/images/cont5.png";
	}
	return $first_img;
}
function catch_blog_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){ 
		// $first_img = get_bloginfo('template_directory')."/images/left.png";
		return false;
	}
	return $first_img;
}
function get_category_root_id($cat)
{

$this_category = get_category($cat); // 取得当前分类

while($this_category->category_parent) // 若当前分类有上级分类时，循环

{

$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）

}

return $this_category->term_id; // 返回根分类的id号

}
add_action('wp_ajax_get_patient_list','get_patient_list');
function get_patient_list(){
     if(!is_user_logged_in()){
         exit(json_encode(array('error'=>1,'msg'=>'请登录后再管理患者信息')));
     }
     global $wpdb;
     $uid = get_current_user_id();
     if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
         exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
     }
    $patients = array();
     foreach($wpdb->get_results('select * from wp_patients where uid='.$uid,ARRAY_A) as $value){
          $patients[$value['pid']] = $value;
     }
     exit(json_encode($patients));
}
add_action('wp_ajax_add_patient','add_patient');
function add_patient(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    $patient =array(
        'uid'    => $uid,
        'p_name' => trim($_POST['p_name']),
        'gender' => trim($_POST['gender']),
        'age'    => intval($_POST['age']),
        'p_phone'=> trim($_POST['p_phone']),
        'address'=> trim($_POST['address']),
        'dateline'=>time()
    );
     foreach($patient as $key=>$value){
         if(empty($value)){
             exit(json_encode(array('error'=>3,'msg'=>'不得为空','k'=>$key)));
         }
     }
     if(!preg_match('/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/',$patient['p_phone'])){
         exit(json_encode(array('error'=>4,'msg'=>'非法手机号','k'=>'p_phone')));
     }
     if(!$wpdb->insert("wp_patients",$patient,array('%d','%s','%s','%d','%s','%s','%d'))){
         exit(json_encode(array('error'=>5,'msg'=>'患者保存失败')));
     }
    $pid = $wpdb->insert_id;
    exit(json_encode(array('msg'=>'添加成功','pid'=>$pid,'patient'=>$wpdb->get_row('select * from wp_patients where pid='.$pid,ARRAY_A))));
}
add_action('wp_ajax_delete_patient','delete_patient');
function delete_patient(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    $pid = intval($_POST['pid']);
    if(!$wpdb->query('select * from wp_patients where pid='.$pid)){
        exit(json_encode(array('error'=>3,'msg'=>'该患者不存在,不需要删除')));
    }
    if(!$wpdb->delete('wp_patients',array('pid'=>$pid),array('%d'))){
        exit(json_encode(array('error'=>4,'msg'=>'该患者删除失败')));
    }
    exit(json_encode(array('msg'=>'删除成功','pid'=>$pid)));
}
add_action('wp_ajax_reserving_patient','reserving_patient');
// 获取患者列表、医生列表、科室列表
function reserving_patient(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    $pid = intval($_POST['pid']);
    // 患者列表
    $patients = array();
    foreach($wpdb->get_results('select * from wp_patients where uid='.$uid,ARRAY_A) as $value){
        $patients[$value['pid']] = $value;
    }
    //科室列表
    $offices = array();
    if(!$offices = wp_cache_get('offices')){
        $o = fetch_all('getOfficeList');
        foreach($o['list'] as $value){
            $offices[$value['officesID']] = $value;
        }
        wp_cache_set('offices',$offices);
    }
    //医生列表
    $doctors = array();
    if(!$doctors = wp_cache_get('doctors')){
        $oo = fetch_all('getDoctorList');
        foreach($oo['list'] as $value){
            $doctors[$value['officesID']][$value['doctorID']] = $value;
        }
        wp_cache_set('doctors',$doctors);
    }
    if(!$rnum = $wpdb->get_var('select max(rnum) from wp_reserve')){
        $rnum = 'w800000';
    }else{
        $rnum = intval(substr($rnum,1));
        $rnum = 'w'.($rnum+1) ;
    }
    exit(json_encode(array('patients'=>$patients,'offices'=>$offices,'doctors'=>$doctors,'rnum'=>$rnum,'pid'=>$pid)));
}
add_action('wp_ajax_reserving_now','reserving_now');
function reserving_now(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    $pid = intval($_POST['pid']);
    if(!$patient = $wpdb->get_row('select * from wp_patients where pid='.$pid)){
        exit(json_encode(array('error'=>3,'msg'=>'未发现此患者')));
    }
    $appoint = array(
        'appoint.id'=>0,
        'appoint.appNo'=>trim($_POST['rnum']),
        'appoint.appType'=>0,
        'appoint.appointDate'=>strtotime($_POST['rtime']),
        'appoint.officeID'=>trim($_POST['oid']),
        'appoint.doctorID'=>trim($_POST['did']),
        'appoint.status'=>0,
        'appoint.yyfs'=>0,
        'appoint.name'=>$patient->p_name,
        'appoint.sex'=>$patient->gender=='男'?0:1,
        'appoint.age'=>$patient->age,
        'appoint.tel'=>$patient->p_phone,
        'appoint.address'=>$patient->address
    );
//    exit(json_encode($appoint));
    $result = fetch_all('insertAppoint',$appoint);
    if($result['status']){
        $wpdb->insert("wp_reserve",array('uid'=>$uid,'pid'=>$pid,'rnum'=>$appoint['appoint.appNo'],'rtime'=>$appoint['appoint.appointDate'],'oid'=>$appoint['appoint.officeID'],'did'=>$appoint['appoint.doctorID'],'status'=>$appoint['appoint.status']),array('%d','%d','%s','%d','%s','%s','%d'));
        exit(json_encode(array('msg'=>'预约成功')));
    }else{
        exit(json_encode(array('error'=>4,'msg'=>'预约失败,'.$result['err'])));
    }
}
function fetch_all($action, $args = array())
{
        $url = '212680m5y1.iok.la:16205/'. $action;
     $args['appoint.appointDate'] = date('Y-m-d H:m:s',$args['appoint.appointDate']);
//     $url = '212680m5y1.iok.la:16205/'. $action. ($args ? '&' . http_build_query($args) : '');
    return get($url,$args);
}
function get($url,$args)
{
    if ($data = json_decode(dzz_file_get_contents($url,$args), true)) {
        return $data;
    }
    return array();
}
function dzz_file_get_contents($source, $args,$redirect = 0, $proxy = '')
{
    if (function_exists('curl_init') !== false) {
//        exit(json_encode(array('error'=>'3333')));
        return curl_file_get_contents($source,$args,$redirect, $proxy);
    } else {
//        $query = http_build_query($args);
//        $query = json_encode($args);
//        $options['http'] = array(
//            'timeout'=>60,
//            'method' => 'POST',
//            'header' => 'Content-Type: application/json; charset=utf-8',
//            'content' => $query
//        );
//        $context = stream_context_create($options);
//        return file_get_contents($source,false,$context);
                return file_get_contents($source);
//
    }
}
function curl_file_get_contents($durl, $args,$redirect = 0, $proxy = '')
{
    set_time_limit(0);
//    $json_data = json_encode($args);
        $json_data = $args;
//    exit($json_data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $durl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    if ($proxy) {
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_USERAGENT, '');
    curl_setopt($ch, CURLOPT_REFERER, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl,CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type:application/json;charset=utf-8',
//            'Content-Length: '.strlen($json_data)
//        )
//    );
    if ($redirect) $r = curl_redir_exec($ch);
    else $r = curl_exec($ch);
    curl_close($ch);
//    exit('xxxx'.$json_data);
    return $r;
}
function curl_redir_exec($ch, $debug = "")
{
    static $curl_loops = 0;
    static $curl_max_loops = 20;
    set_time_limit(0);
    if ($curl_loops++ >= $curl_max_loops) {
        $curl_loops = 0;
        return FALSE;
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $debbbb = $data;
    list($header, $data) = explode("\n\n", $data, 2);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_code == 301 || $http_code == 302) {
        $matches = array();
        preg_match('/Location:(.*?)\n/', $header, $matches);
        $url = @parse_url(trim(array_pop($matches)));
        if (!$url) {
            //couldn't process the url to redirect to
            $curl_loops = 0;
            return $data;
        }
        $last_url = parse_url(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL));
        /*    if (!$url['scheme'])
                $url['scheme'] = $last_url['scheme'];
            if (!$url['host'])
                $url['host'] = $last_url['host'];
            if (!$url['path'])
                $url['path'] = $last_url['path'];*/
        $new_url = $url['scheme'] . '://' . $url['host'] . $url['path'] . ($url['query'] ? '?' . $url['query'] : '');
        curl_setopt($ch, CURLOPT_URL, $new_url);
        //    debug('Redirecting to', $new_url);

        return curl_redir_exec($ch);
    } else {
        $curl_loops = 0;
        return $debbbb;
    }
}

add_action('wp_ajax_get_reserve_list','get_reserve_list');
function get_reserve_list(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    //科室列表
    $offices = array();
    if(!$offices = wp_cache_get('offices')){
        $o = fetch_all('getOfficeList');
        foreach($o['list'] as $value){
            $offices[$value['officesID']] = $value;
        }
        wp_cache_set('offices',$offices);
    }
    //医生列表
    $doctors = array();
    if(!$doctors = wp_cache_get('doctors')){
        $oo = fetch_all('getDoctorList');
        foreach($oo['list'] as $value){
            $doctors[$value['officesID']][$value['doctorID']] = $value;
        }
        wp_cache_set('doctors',$doctors);
    }
    $reserves = array();
    foreach($wpdb->get_results('select r.*,p.* from wp_reserve r left join wp_patients p on p.pid=r.pid  where r.uid='.$uid,ARRAY_A) as $value){
        $value['rtime'] = date('Y-m-d H:m',$value['rtime']);
        $value['oname'] = $offices[$value['oid']]['officesName'];
        $value['dname'] = $doctors[$value['oid']][$value['did']]['doctorName'];
        $reserves[$value['id']] = $value;
    }
    exit(json_encode(array('list'=>$reserves,'phone'=>$phone)));
}
add_action('wp_ajax_delete_reserve','delete_reserve');
function delete_reserve(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    $uid = get_current_user_id();
    if(!$phone = $wpdb->get_var('select mobile from wp_xh_social_channel_mobile where user_id='.$uid)){
        exit(json_encode(array('error'=>2,'msg'=>'未绑定手机号')));
    }
    $id = intval($_POST['id']);
    $rnum = trim($_POST['rnum']);
    $result = fetch_all('backAppoint',array('appoint.appNo'=>$rnum));
    if($result['status'] && $wpdb->query('DELETE FROM wp_reserve where id='.$id)){
        exit(json_encode(array('msg'=>'取消成功')));
    }else{
        exit(json_encode(array('error'=>3,'msg'=>'取消失败,'.$result['err'])));
    }
}
function get_data(){
    if(!is_user_logged_in()){
    	header("Location:/wp-login.php?r=admin&redirect_to=".urlencode('http://www.mtyk120.com/?page_id=559'));
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
   $current_zhouyi = (strtotime(date('Y-m-d',time())) - ((date('w') == 0 ? 7 : date('w')) - 1) * 24 * 3600);
   $zhouyi = isset($_GET['zhouyi'])?intval($_GET['zhouyi']):$current_zhouyi;
   $zhouri = $zhouyi + 86400*6;
   $data = array();
   foreach($wpdb->get_results('select * FROM wp_doctors_setting where dateline>='.$zhouyi.' and dateline<='.($zhouri+86400),ARRAY_A) as $k=>$v){
       $data[$v['did']][$v['dateline']] = $v;
   }
    return array('current_zhouyi'=>$current_zhouyi,'zhouyi'=>$zhouyi,'zhouri'=>$zhouri,'data'=>$data);
}

add_action('wp_ajax_timesetting','timesetting');
function timesetting(){
    if(!is_user_logged_in()){
        exit(json_encode(array('error'=>1,'msg'=>'请登录后再添加患者信息')));
    }
    global $wpdb;
    if(!$did = trim($_POST['did'])){
        exit(json_encode(array('error'=>2,'msg'=>'没有指定医生')));
    }
    if(!$oid = trim($_POST['oid'])){
        exit(json_encode(array('error'=>3,'msg'=>'没有指定科室')));
    }
    $arr = $_POST['arr'];
    foreach($arr as $k=>$v){
         if($id = $wpdb->get_var('select id from %t where did='.$did.' and oid='.$oid.' and dateline='.$k)){
             $wpdb->update('',array('status'=>$v),array('id'=>$id));
         }else{
             $wpdb->insert('wp_doctors_setting',array('oid'=>$oid,'did'=>$did,'status'=>$v,'dateline'=>$k,'dateline_end'=>$k+60*30));
         }
    }
    exit(json_encode(array('success'=>1,'msg'=>'保存成功')));
}
?>
