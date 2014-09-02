<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box  ">

 
    <div class="tit_2"><span><a href="search.php?intro=new" class="f6">New Arrivals</a></span>   
    <a href="search.php?intro=new" class="clear more right">See More »</a>  </div>
  
  
  
  
  
  
  
  <div class="blank"></div>
  
  
  <div id="show_new_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_73185200_1409215598');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_73185200_1409215598']):
?>
  <div class="goodsItem">
       
           <a href="<?php echo $this->_var['goods_0_73185200_1409215598']['url']; ?>"><img src="<?php echo $this->_var['goods_0_73185200_1409215598']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_73185200_1409215598']['name']); ?>" class="goodsimg" /></a><br />
           <p class="f1"><a href="<?php echo $this->_var['goods_0_73185200_1409215598']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_73185200_1409215598']['name']); ?>"><?php echo $this->_var['goods_0_73185200_1409215598']['short_style_name']; ?></a></p>
           
           
      <font class="market"><?php echo $this->_var['goods_0_73185200_1409215598']['market_price']; ?></font><br />
      
           <font class="f1">
           <?php if ($this->_var['goods_0_73185200_1409215598']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_73185200_1409215598']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_73185200_1409215598']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>
