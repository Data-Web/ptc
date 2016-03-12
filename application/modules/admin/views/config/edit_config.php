<?php 
  $roles = $this->session->userdata['roles'];
?>
<div class="paddings">
  <?php if(isset($roles['config']['view']) && $roles['config']['view']): ?>
  <ul class="css-tabs">
    <li><a href="<?php echo base_url('/admin/config'); ?>" class="<?php echo isset($current) && $current == 'vi' ? 'current' : ''; ?>" name="0">Tiếng việt</a></li>
    <li><a href="<?php echo base_url('/admin/config/english'); ?>" class="<?php echo isset($current) && $current == 'en' ? 'current' : ''; ?>" name="1">Tiếng anh</a></li>
  </ul>
  <?php if(isset($roles['config']['edit']) && $roles['config']['edit']): ?>
    <form action="" method="post" enctype="multipart/form-data" name="account_form">
  <?php endif; ?>
    <input type="hidden" name="create_new_record" value="no">
    <table id="tb-list" border="1" bordercolor="#CCCCCC">
      <tbody>
        <tr style="background:none !important;color:inherit">
          <td>Dòng chữ chạy</td>
          <td>
            <input type="text" value="<?php echo isset($config['marquee']) ? $config['marquee'] : ''; ?>" size="60" name="marquee">
          </td>
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>Hotline</td>
          <td>
            <input type="text" value="<?php echo isset($config['hotline']) ? $config['hotline'] : ''; ?>" size="60" name="hotline">
          </td>
        </tr>
        
        <tr style="background:none !important;color:inherit">
          <td>Miền bắc</td>
          <td>
            <?php
              $value = isset($config['mienbac']) ? $config['mienbac'] : '';
              $fck = new FCKeditor('mienbac');
              $fck->ToolbarSet = "Basic";
              $fck->BasePath = sBASEPATH;
              $fck->Value  = $value ;
              $fck->Width  = '100%';
              $fck->Height = 200;
              $fck->Create();
            ?>
          </td>
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>Link Facebook</td>
          <td>
            <input type="text" value="<?php echo isset($config['facebook']) ? $config['facebook'] : ''; ?>" size="60" name="facebook">
          </td>
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>Link Youtube</td>
          <td>
            <textarea type="text"  size="60" name="youtube"><?php echo isset($config['youtube']) ? htmlentities($config['youtube']) : ''; ?></textarea>
          </td>
        </tr>

        <tr>
          <td>Tiêu đề website</td>
          <td>
            <input type="text" size="60" name="config_title" value="<?php echo isset($config['config_title']) ? $config['config_title'] : "";?>">
          </td>
        </tr>

        <tr>
          <td>Meta description</td>
          <td>
            <textarea name="config_des"><?php echo isset($config['config_des']) ? $config['config_des'] : ""; ?></textarea>
          </td>
        </tr>
        <tr>
          <td>Meta keyword</td>
          <td>
            <textarea name="config_key"><?php echo isset($config['config_key']) ? $config['config_key'] : ""; ?></textarea>
          </td>
        </tr>
        <tr>
          <td>Logo website</td>
          <td>
            <input type="file" name="image" />
            <?php echo isset($config['logo']) && $config['logo'] != null ? '<img src="'.$config['logo'].'" />' : ''; ?>
          </td>
        </tr>
        <tr>
          <td>Site map</td>
          <td>
            <input type="file" name="sitemap" />
          </td>
        </tr>
      </tbody>
    </table>
    <br />
    <?php if(isset($roles['config']['edit']) && $roles['config']['edit']): ?>
    <div align="center">
      <input type="hidden" name="update" value="yes">
      <input type="hidden" name="lang" value="">
      <input name="ok" type="submit" value="Cập nhật thông tin" class="btn_submit_bachnx">
    </div>
    <?php endif; ?>
    <br />
  </form>
  <?php endif; ?>
</div>
<style type="text/css">
  input[type='text']{
    padding: 5px;
    width: 90%;
  }
  textarea {
    padding: 5px;
    width: 90%;
    height: 60px;
    resize: none;
  }

  a:active{outline:0}:focus{-moz-outline-style:none}ul.css-tabs{margin:0!important;padding:0;height:24px;border-bottom:1px solid #DDD}ul.css-tabs li{float:left;padding:0;margin:0;list-style-type:none}ul.css-tabs a{float:left;font-size:12px;display:block;padding:2px 10px;text-decoration:none;border:1px solid #CCC;border-bottom:0;height:18px;background-color:#CFC;color:#333;margin-right:2px;position:relative;top:1px;outline:0;-moz-border-radius:4px 4px 0 0}ul.css-tabs a:hover{background-color:#f7f7f7;color:#333}ul.css-tabs a.current{background-color:#C00;border-bottom:1px solid #ddd;color:#FFF;cursor:default}.css-panes div{display:none;border:1px solid #DDD;border-width:0 1px 1px 1px;min-height:150px;padding:15px 20px;background-color:#FFF}
</style>
