<?php

function  display($tplPath, $tplVars = null)
{
   //组合模板路径，拼接模板文件
   $tplFilePath = rtrim(TPL_PATH,'/').'/'.$tplPath;
   
   //检测文件是否存在
   if(!file_exists($tplFilePath)){
	    exit('模板文件不存在');
   }
    
   //编译模板文件
   $php = compile($tplFilePath);

   //组合一个新的缓存目录拼接文件
   $cacheFilePath = rtrim(TPL_CACHE,'/').'/'.str_replace('.','_',$tplPath).'.php';
   
   //检测目录的权限
   if(!check_cache_dir(TPL_CACHE)){
	   exit('没有权限写入');
   }   
   //并且写入
   file_put_contents($cacheFilePath,$php);
   
   //分配变量 并且包含缓存文件
   if(is_array($tplVars)){
       //先把数组打开extract();
       extract($tplVars);
       include $cacheFilePath;	   
   }
}

//检测缓存目录是否有权限
function check_cache_dir($path)  //cache
{
	//判断是否是文件夹 文件路径是否存在
	if(!is_dir($path) || !file_exists($path)){
          return mkdir($path, 0777, true);		
	}
	//判断是否可读可以写
	if(!is_writable($path) || !is_readable($path)){
          return chmod($path, 0777);		
	}
	 return true;
}
//编译模板文件函数
function compile($path)
{
	//把模板文件里面的内容拿出来
	$file = file_get_contents($path);
	//规则
	$keys = [
	    '{$%%}'           =>  '<?=$\1;?>',
		'{if %%}'         =>  '<?php if(\1):?>',
		'{/if}'           =>  '<?php endif;?>',
		'{else}'          =>  '<?php else: ?>',
		'{elseif %%}'     =>  '<?php elseif(\1);?>',
		'{else if %%}'     =>  '<?php elseif(\1);?>',
		'{foreach %%}'     =>  '<?php foreach(\1);?>',
		'{/foreach %%}'     =>  '<?php endforeach;?>',
		'{while %%}'     =>  '<?php while(\1);?>',
		'{/while %%}'     =>  '<?php endwhile;?>',
		'{for %%}'     =>  '<?php for(\1);?>',
		'{/for %%}'     =>  '<?php endfor;?>',
		'{continue}'     =>  '<?php continue;?>',
		'{break}'     =>  '<?php break;?>',
		'{$%%++}'     =>  '<?php $\1++;?>',
		'{$%%--}'     =>  '<?php $\1--;?>',
		'{/*}'     =>  '<?php /*',
		'{*/}'     =>  '*/?>',
		'{section}'     =>  '<?php',
		'{/section}'     =>  '?>',
		'{$%% = $%%}'           =>  '<?php $\1 = $\2;?>',
		'{default}'           =>  '<?php default;?>',
		'{include %%}'           =>  '<?php include "\1";?>',
	];
	foreach ($keys as $key => $val){
		  $pattern = '#'.str_replace('%%','(.+)',preg_quote($key, '#')).'#imsU';
		  
		  $replace = $val;
		  
		  if(stripos($pattern,'include')){
               //处理 包含的问题
               $file = preg_replace_callback($pattern,'parseInclude', $file);			   	   
		  }else{
			   $file = preg_replace($pattern, $replace, $file); 
		  }
		  //var_dump($file);die;
	}
	return $file;
}