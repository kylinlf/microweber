<?   

only_admin_access();

 	
	 $update_api = new \mw\Update();
 
	

 d($_POST);
 ?>apply_updates
 
 
 <?  if(isset($_POST['mw_version'])){ ?>
  
 <h2>Installing new version of Microweber: <? print  $_POST['mw_version'] ?></h2>
<textarea>
<? $iudates = $update_api -> install_version($_POST['mw_version']); 
d($iudates);
?>
</textarea>
 
<? }  ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <? 
 if(isset($_POST['modules'])){ ?>
 <? if(isarr($_POST['modules'])): ?>
  <? foreach($_POST['modules']  as $item): ?> 
 <h2>Installing module: <? print  $item ?></h2>
<textarea>
<? $iudates = $update_api -> install_module($item); 
d($iudates);
?>
</textarea>
 <? endforeach ; ?>
<? endif; ?>
<? }  ?>



 <? 
 if(isset($_POST['elements'])){ ?>
 <? if(isarr($_POST['elements'])): ?>
  <? foreach($_POST['elements']  as $item): ?> 
 <h2>Installing layouts: <? print  $item ?></h2>
<textarea>
<? $iudates = $update_api -> install_element($item); 
d($iudates);
?>
</textarea>
 <? endforeach ; ?>
<? endif; ?>
<? }  ?>



 <? 
 if(isset($_POST['module_templates'])){ ?>
 <? if(isarr($_POST['module_templates'])): ?>
  <? foreach($_POST['module_templates']  as $k=> $item): ?> 
 <h2>Installing module template: <? print  $item ?> (for <em><? print $k ?></em>)</h2>
<textarea>
<? $iudates = $update_api -> install_module_template($k,$layout_file); 
d($iudates);
?>
</textarea>
 <? endforeach ; ?>
<? endif; ?>
<? }  ?>