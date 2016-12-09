<?php 
/**
 * @Author: joker
 * @Date:   2016-08-31 10:06:59
 * @Last Modified by:   joker
 * @Last Modified time: 2016-08-31 10:08:27
 */
 ?>
<script type="text/javascript" src="<?=base_url_common('js/qaptcha/jquery-ui.js')?>"></script>
<script type="text/javascript" src="<?=base_url_common('js/qaptcha/jquery.ui.touch.js')?>"></script>
<script type="text/javascript" src="<?=base_url_common('js/qaptcha/QapTcha.jquery.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url_common('js/qaptcha/QapTcha.jquery.css')?>">
<div class="QapTcha"></div>

<script>
	 $(function(){
      $('.QapTcha').QapTcha({
          autoSubmit:true,
          PHPfile : "<?php echo base_url_lang('qaptcha/index') ?>",
          txtLock:"",
          txtUnlock:""
      });
      $("#form").validate({
          invalidHandler:function(){
                  $('.Slider').animate({'left':0}).draggable("enable").css('cursor', 'e-resize')
          }
      });
  })
</script>