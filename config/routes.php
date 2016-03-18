<?php

namespace NoahBuscher\Macaw\Macaw;

Macaw::get('test', function(){
	echo "成功！";
});

Macaw::get('(:all)', function($fu){
	echo '未匹配路由<br>'.$fu;
});

Macaw::dispatch();