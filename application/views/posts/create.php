<h2><?=$title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
<form>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Add Title" >
    
  </div>
  <div class="form-group">
    <label>body</label>
    <textarea id="editor1" name="body" class="form-control" 
    placeholder="Add body">
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>