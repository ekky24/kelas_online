$(function() {
	function sukses_alert() {
		Swal.fire(
          'Sign Up Berhasil!',
          'Silahkan tunggu email konfirmasi dari admin.',
          'success'
        )
	}

	$('#post_kelas').change(function() {
		$('#post_sub_kelas').empty()
		$('#post_sub_kelas').append('<option disabled selected value> -- Pilih Sub Kelas -- </option>')
		$.ajax({
		    url: '/get_sub_kelas/' + $(this).val(),
		    type:"GET",
		    success:function(msg){
		    	$.each(msg, function(i, item) {
		    		$('#post_sub_kelas').append('<option value="' + item.id + '">' + item.nama + '</option>')
		        });
		    },
		    dataType:"json"
		});
	});
})