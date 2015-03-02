$(document).ready(function(){
			function formSwitched() {
				var $switch = $(this);
				var formHidden = $switch.data('form-hidden');
				if (typeof formHidden == 'undefined') formHidden = "0";

				if(formHidden == '1'){
					$switch.html('Свернуть форму');
					$switch.data('form-hidden', '0');
				}else {
					$switch.html('Развернуть форму');
					$switch.data('form-hidden', '1');
				}
			}

			$('#formHide').on('click',function(){
				var link = this;
				$('#formBanner').toggle(3000, function(){
					formSwitched.apply(link);
				});

			});
		});//end ready