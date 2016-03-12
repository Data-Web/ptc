<div class="paddings">
  <form method="post" action="" method="post" enctype="multipart/form-data" name="account_form">
    <input type="hidden" name="create_new_record" value="no">

    <table id="tb-list" border="1" bordercolor="#CCCCCC">
      <tbody>
        <tr style="background:none !important;color:inherit">
          <td>Name</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['label1'] ? $post['label1']  : $this->input->post('label1'); ?>" size="100%" name="label1" class="name-title" />
            <?php echo form_error('label1'); ?>  
          </td>     
        </tr>
        
        <tr style="background:none !important;color:inherit">
          <td>Link</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['label2'] ? $post['label2']  : $this->input->post('label2'); ?>" size="100%" name="label2" class="name-title" />
            <?php echo form_error('label2'); ?>  
          </td>     
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>User</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['label3'] ? $post['label3']  : $this->input->post('label3'); ?>" size="100%" name="label3" class="name-title" />
            <?php echo form_error('label3'); ?>  
          </td>     
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>Password</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['label4'] ? $post['label4']  : $this->input->post('label4'); ?>" size="100%" name="label4" class="name-title" />
            <?php echo form_error('label4'); ?>  
          </td>     
        </tr>

        <tr style="background:none !important;color:inherit">
          <td>Code</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['label5'] ? $post['label5']  : $this->input->post('label5'); ?>" size="100%" name="label5" class="name-title" />
            <?php echo form_error('label5'); ?>  
          </td>     
        </tr>
      </tbody>
    </table><br/>
    <div align="center">
      <p><input name="ok" type="submit" value="Lưu lại" class="btn_submit_bachnx"></p>
    </div>
  </form>
</div>

<style type="text/css">
  .seo_info{
    width: 100%;
    resize: none;
    height: 50px;
    text-indent: 3px;
  }
  table td{
    padding-left: 3px;
    font-size: 14px;
  }
  select, input {
    padding: 5px;
  }
</style>
