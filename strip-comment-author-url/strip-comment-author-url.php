<?php
/**
 * Plugin Name:       Strip comment author's URL
 * Plugin URI:        https://www.zuotijia.me/strip-comment-author-url/
 * Description:       Automatically clears the comment author's URL when the administrator approves a comment.
 * Version:           1.0.0
 * Author:            John Guoy
 * Author URI:        https://www.zuotijia.me/strip-comment-author-url/
 * License:           GPL v2 or later
 * Text Domain:       strip-comment-author-url
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // 防止直接访问
}

/**
 * 审核通过时清除作者网址
 */
add_action( 'transition_comment_status', 'strip_comment_author_url_on_approval', 10, 3 );

function strip_comment_author_url_on_approval( $new_status, $old_status, $comment ) {
    // 只在从“未审核”变为“已审核”时触发（支持 bulk 审核）
    if ( 'approved' === $new_status && 'approved' !== $old_status ) {
        wp_update_comment( array(
            'comment_ID'         => $comment->comment_ID,
            'comment_author_url' => '',
        ) );
    }
}
