<?php
global $fileLog;
?>

<h3><?php echo i18n('easyComments/LOG'); ?></h3>


<div style="width:100%;height:auto;padding:5px;background:#000;color:#fff;line-height:1.7;margin-bottom:10px;">

    <?php

    echo @file_get_contents($fileLog) == '' ? i18n_r('easyComments/NOTHINGHERE') : file_get_contents($fileLog); ?>



</div>


<form method="post">
    <input type="submit" name="deletelog" style="border:solid 1px;padding:5px 15px;background:#333;color:#fff;display:inline-block;border-radius:5px;text-decoration:none;" value="<?php echo i18n('easyComments/CLEARLOG'); ?>">
</form>
<br><br>


<h3><?php echo i18n('easyComments/ENTEREMAIL'); ?></h3>

<form method="post">

    <input type="text" style="width:100%;padding:10px;box-sizing:border-box;margin-bottom:5px;" value="<?php echo @file_get_contents(GSDATAOTHERPATH . 'easyCommentsMail.txt'); ?>" placeholder="" name="adminemail">

    <a href="https://www.hcaptcha.com/">Grab site key and secret key</a>
    <label style="margin-top:20px;"><?php echo i18n_r('easyComments/SECRETKEY');?></label>
    <input type="text"  name="secretkey" style="width:100%;padding:10px;box-sizing:border-box;margin-bottom:5px;"  value="<?php echo @file_get_contents(GSDATAOTHERPATH . 'secretkey.txt'); ?>">
    <label><?php echo i18n_r('easyComments/DOMAINKEY');?></label>
    <input type="text" name="sitekey" style="width:100%;padding:10px;box-sizing:border-box;margin-bottom:5px;" value="<?php echo @file_get_contents(GSDATAOTHERPATH . 'sitekey.txt'); ?>">

    <input type="submit" name="saveadminemail" style="border:solid 1px;padding:5px 15px;background:#333;color:#fff;display:inline-block;border-radius:5px;text-decoration:none;margin-bottom:20px;" value="<?php echo i18n('easyComments/SAVEEMAIL'); ?>">
</form>