<form action="<?php echo base_url(uri_string()); ?>" method="get" id="form-filter">
  <div class="filter-bar">
    <select name="language" id="language">
      <option value="">Tất cả ngôn ngữ</option>
      <option value="1" <?php echo isset($_REQUEST['language']) && $_REQUEST['language'] == 1 ? 'selected' : ''; ?>>Tiếng việt</option>
      <option value="2" <?php echo isset($_REQUEST['language']) && $_REQUEST['language'] == 2 ? 'selected' : ''; ?>>Tiếng anh</option>
    </select>
  </div>
</form>