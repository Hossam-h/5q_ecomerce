
	<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>
    @yield('js')

    @livewireScripts

	<script>
		
		  $(document).ready(function() {
            $('input[name="search"]').on('keyup', function() {
				
             var product = $(this).val();
			
			//  console.log(product);

                if (product) {

                    $.ajax({
                        url: "{{URL::to('/live_search')}}",
                        type: "GET",
						data:{
							product:product,
						},
                        success: function(data) {
                        console.log(data);


                             $('ul[name="select_product"]').empty();
                            for (var key in data) {
								console.log();
                                var pr_id= data[key].id;

                                $('ul[name="select_product"]').append(' <li class="level-1" value="' + key + '">'  + data[key].name + '</li');
								
                            }

                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
	</script>
</body>
</html>