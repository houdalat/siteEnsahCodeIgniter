<h2><?php echo $post['title']?></h2>
<small class="post-date">Posted on:<?php 
echo $post['created_at'] ?> </small></br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-default pull-" href="edit/<?php echo $post['id']; ?>">Edit</a> 
<?php echo form_open('/posts/delete/'.$post['id']); ?>
   <input type="submit" value="delete" 
   class="btn btn-dash-danger">

</form>

    