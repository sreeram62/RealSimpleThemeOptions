<script>
jQuery(document).ready(function() {
alert("loaded");
jQuery('#wp_so_header_logo_upload_buttom').click(function() {
 formfield = jQuery('#wp_so_header_logo_upload').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
});

window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#wp_so_header_logo_upload').val(imgurl);
 tb_remove();
}

});

</script>
