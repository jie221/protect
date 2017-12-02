/*
	序列化form表单
*/
function serializeData(id)
{
	var data = $("#"+id).serializeArray();
	var postArr = {};
	$(data).each(function(i){
		postArr[this.name] = this.value;
	})
	return postArr;
}