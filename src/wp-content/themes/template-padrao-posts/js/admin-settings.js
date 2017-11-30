function upload_image_callback( obj ){
    window.send_to_editor = function(html) {            
        // The imagem URL
        imgurl = $('img', html).attr('src');
        
        // Change value for the target field
        $('.imagem').val(imgurl);
        $(".logo").attr('src',imgurl);
        
        // Remove
        tb_remove();
    }
}

/*------------------------------------------------------------------------*
 * Upload Image fields
/*------------------------------------------------------------------------*/
$('.imgup').click(function() {
    // Remove the actual 
    $('.imagem').val('');
    $(".logo").attr('src','');
   
    
    tb_show('Imagens', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
    
    // Callback
    upload_image_callback(this);
    
    return false;
});
