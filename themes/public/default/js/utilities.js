var utilities = {
	getCombo : function (id) {
		var val = $('#'+id).multipleSelect('getSelects');
		if(typeof val === 'object'){
			val = "";
		}
		return val;
	}
};