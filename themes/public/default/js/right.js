getRight = function(){	
	var nodes=$("#tree").getCheckedNodes();
	var $parent = '';
	if(nodes !=null){
		strValue = '{';
		current = '';
		for(node in nodes){
		//	console.log(nodes);
			value = nodes[node].split('-');	
			//console.log(strValue);
			if(value.length > 1 && !isNaN(value[0])){
				/*if(value[2]!=undefined && $parent!=value[2]){
					if(strValue.length>0) strValue = strValue.substring(0,strValue.length-1); 
					strValue+='},"'+value[2]+'":{"view":""}';
					$parent = value[2];
				}*/
				if(value[0]!=current){
					
					if(current.length > 0){
						strValue = strValue.substring(0,strValue.length-1);
						strValue+='},';
					}
					current = value[0];	
					strValue+='"'+value[0]+'":{"'+value[1]+'":""';

					if(node<(nodes.length-1)) strValue+=',';
					
				}
				else{
					strValue+='"'+value[1]+'":""';
					if(node<(nodes.length-1)) strValue+=',';
				
				}
			}
		}
		strValue+='}}';
		if(strValue=='{}}'){
			strValue ='';
		}
		//edit
		if(strValue.substr(0,2) == '},'){
			strValue = '{' + strValue.substr(2);
			strValue = strValue.replace(/}"/g,'},"');
		}
		return strValue;
	}
}