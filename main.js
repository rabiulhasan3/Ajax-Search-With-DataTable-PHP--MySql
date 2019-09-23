$('#show').click(function(){
	var student_name = $('#student_name').val();
	$.ajax({
		url : 'server.php',
		type : 'post',
		data : {
			'student_name' : student_name
		},success:function(response){
				let output ='';
				for(let i in response){
					output +=`<tr>
						<td>${response[i].student_name}</td>
						<td>${response[i].math}</td>
						<td>${response[i].bangla}</td>
						<td>${response[i].english}</td>
					</tr>`;
				}
				console.log(output);
				document.querySelector('.student_info').innerHTML = output;
		}
	});
});




// fetch('server.php').then((res) => res.json())
// .then(response => {
// 	console.log(response)
// 	let output ='';
// 	for(let i in response){
// 		output +=`<tr>
// 			<td>${response[i].student_name}</td>
// 			<td>${response[i].math}</td>
// 			<td>${response[i].bangla}</td>
// 			<td>${response[i].english}</td>
// 		</tr>`;
// 	}
// 	console.log(output);
// 	document.querySelector('.tbody').innerHTML = output;
// }).catch(error => console.log(error));