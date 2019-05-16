// Add new input fields

	$(document).ready(function(){
		var i=1;
		$('#add').click(function(){
			i++;
            $('#dynamic_field').append('<tr id="row'+i+'">\
            <td>\
            <select class="browser-default custom-select" name="name[]">\
              <option selected>Products</option>\
              <option value="1">One</option>\
              <option value="2">Two</option>\
              <option value="3">Three</option>\
            </select>\
            </td>\
            <td><input type="text" name="name[]" placeholder="Total Products in year" class="form-control name_list" /></td>\
            <td><input type="text" name="name[]" placeholder="Materials" class="form-control name_list" /></td>\
            <td><button type="button" name="remove" id="'+i+'" class="btn_remove"><i class="fas fa-trash pr-2"></i></button></td>\
            </tr>');
		});

		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id");
			$('#row'+button_id+'').remove();
		});


	});

