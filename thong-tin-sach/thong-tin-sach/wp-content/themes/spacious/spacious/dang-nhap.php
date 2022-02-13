<?php
/*
Template Name: Đăng Nhập
*/
?>

<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<div class="dang-nhap">
<?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
<div class="da-dang-nhap">
Bạn đã đăng nhập với tài khoản <a href="<?php echo $profile_url ?>"><?php echo $current_user->display_name; ?></a> Hãy truy cập <a href="/wp-admin">Quản trị viên</a> hoặc <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>">Đăng xuất tài khoản</a>
</div>
<?php } else { ?>

<div class="thong-bao">
<?php
$login = (isset($_GET['login']) ) ? $_GET['login'] : 0;
if ( $login === "failed" ) {
echo '<p>Sai tên đăng nhập hoặc mật khẩu!</p>';
} elseif ( $login === "empty" ) {
echo '<p>Bạn đã thoát tài khoản!</p>';
} elseif ( $login === "false" ) {
echo '<p>Bạn đã thoát tài khoản!</p>';
}
?>
</div>
<?php
$args = array(
'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
'form_id' => 'dangnhap',
'label_username' => __( 'Tên tài khoản' ),
'label_password' => __( 'Mật khẩu' ),
'label_remember' => __( 'Ghi nhớ' ),
'remember' => false,
'label_log_in' => __( 'Đăng nhập' ),
);
wp_login_form($args);
?>
</div>
<?php } ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>

<style>
dang-nhap{margin-top:150px;margin-bottom:150px;width:40%;max-width:1400px;margin-left:auto;margin-right:auto}
.dang-dang-nhap{margin-top:500px;}
@media (max-width: 600px) {
.dang-nhap{width:90%}
}
#user_login{width:100%}
#user_pass{width:100%}
</style>
