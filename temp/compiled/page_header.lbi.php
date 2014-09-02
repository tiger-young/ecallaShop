<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
 
 <div class="block clearfix " style=" z-index:999999999;   position:relative" >
 <div class="f_l">
 
 
 
 <a id="logo" href="index.php"  >
	<img src="themes/ecmoban_choies/images/logo.gif" />
 
	</a>
 
 
 
 <form  id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"    >
   <input name="keywords" type="text" id="keyword" class="searchArea" maxlength="120" value="start your search here..." onclick="javascript:this.value='';"    />
 <button class="searchBtn"   type="submit"></button> 
   </form>
 
 
 
 </div>
 
 
 <div style=" float:right">
 
 <div class="f_r log"> 

 
 <div style="float:right;     ">
 <div class="t">
 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
 
    <?php if ($this->_var['navigator_list']['top']): ?>
   
    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
    
    
    
      <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
        
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
   <?php endif; ?>    
    </div>
	<div style=" clear:both"></div>  
    <div class="b">
	
 
	  
<div class="buy_car_bg_box" style="float:right; padding-top:5px; padding-left:0;  ">  
<div class="buy_car_bg "   >
<div  id="ECS_CARTINFO">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</div>
</div> 
</div>  



	   </div>  
 </div>  
 
 
 
   
 </div>
 
 
 
 
 
</div>
<div  class="blank"  ></div>

 
 

 
 </div>
<div class="blank5"></div>

<div id="mainNav" class="clearfix block"  >

<ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a class="a1" href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> id="cur"<?php endif; ?>>HOME</a>
</ul>  
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> id="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
  
 
	
	
  </ul>  
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

 <div class="blank"></div>

 

 


