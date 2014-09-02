 
<?php if ($this->_var['user_info']): ?>
 <b>·</b><a href="user.php"><span><?php echo $this->_var['lang']['hello']; ?>，</span><span class="f4_b"><?php echo $this->_var['user_info']['username']; ?></span></a>
 <b>·</b>
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>  

<?php else: ?>
 <a href="user.php">sign in</a>         <b>·</b>
 <a href="user.php">join Free</a> 
<?php endif; ?>