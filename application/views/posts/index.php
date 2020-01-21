<h2>Actualités</h2>
<?php foreach($posts as $post) :?>
 <h5>
 <?php echo $post['title'];  ?>
 </h5>
 <small class="post-date">Posted on:<?php echo $post['created_at'] ?> </small></br>
 <!--<?php echo $post['body']; ?>-->
 <br><br>
 <p><a class="btn btn-secondary" href="<?php echo site_url('/posts/'.$post['id']);?>">plus d'information</a></p>
<?php endforeach; ?>