function json_decode_exclusive(str){
	var parse = JSON.parse(str);
	
	var c = parse.d.map(function(v,i){
		var a = [];
		parse.h.forEach(function(item,index){
			a[item] = v[index];
		});

		return a;
	});

	return c;	
}

// str = '{"h":["username","hair_color","height"],"d":[["ali","brown",1.2],["marc","blue",1.4],["joe","brown",1.7],["zehua","black",1.8]]}';
// console.log(json_decode_exclusive(str));