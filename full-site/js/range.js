 $("#floor").ionRangeSlider({
    type: "double",
    grid: true,
    min: 1,
    max: 1000,
    from: 1,
    to: 1000,
    hide_min_max: true,
		onChange: function(data){
			$('.range_results').addClass('blured');
		},
	 onFinish: function(data){
		 $('.range_results').removeClass('blured');
		 	 updateInputs (data, 1) 
	 },
    grid: false
});
$("#room").ionRangeSlider({
	 type: "double",
	 grid: true,
	 min: 1,
	 max: 1000,
	 from: 1,
	 to: 1000,
	 hide_min_max: true,
	 onChange: function(data){
		 $('.range_results').addClass('blured');
	 },
	onFinish: function(data){
		$('.range_results').removeClass('blured');
			 updateInputs (data, 0) 
	},
	 grid: false
});
$("#size").ionRangeSlider({
	 type: "double",
	 grid: true,
	 min: 1,
	 max: 1000,
	 from: 1,
	 to: 1000,
	 hide_min_max: true,
	 onChange: function(data){
		 $('.range_results').addClass('blured');
	 },
	onFinish: function(data){
		$('.range_results').removeClass('blured');
			 updateInputs (data, 2) 
	},
	 grid: false
});


$('tbody tr[data-href]').addClass('clickable').click( function() {
  window.location = $(this).attr('data-href');
});

$('tbody tr').mouseenter(function(){
  $(this).find('.box-img').fadeIn(100);
  $(this).find('.box-img img').attr('src', $(this).attr('data-img'));
  })

$('tbody tr').mouseleave(function(){
  $(this).find('.box-img').fadeOut(100);
})



	var slider=[
		$("#room").data("ionRangeSlider"),
		$("#floor").data("ionRangeSlider"),
		$("#size").data("ionRangeSlider")
	]

tmas=['room','floor','size'];


function updateInputs (data, id) {
	
 	 function update() {
                data[i].style.display = '';

                for (m = 0; m < tmas.length; m++) {
                    if (minmax[tmas[m]][0] > parseFloat(data[i].dataset[tmas[m]])) {
                        minmax[tmas[m]][0] = data[i].dataset[tmas[m]]
                    }
                    if (minmax[tmas[m]][1] < parseFloat(data[i].dataset[tmas[m]])) {
                        minmax[tmas[m]][1] = data[i].dataset[tmas[m]]
                    }
                }
            }

            var minmax = {
                room: [1000, 0],
                floor: [1000, 0],
                size: [1000, 0]
            }

            var vals = [];
            for (var ii = 0; ii < tmas.length; ii++) {
                vals[ii] = $("#" + tmas[ii]).data("ionRangeSlider");
            }      //console.log(minmax.size[0]);

            data = $('.filter');
            var n = 0;

            for (i = 0; i < data.length; i++) {

                if (id == 0 && data[i].dataset.room >= vals[0].old_from && data[i].dataset.room <= vals[0].old_to &&
                    data[i].dataset.floor >= vals[1].old_from && data[i].dataset.floor <= vals[1].old_to
                ) {

                    update()
                }

                else if (id == 1 && data[i].dataset.floor >= vals[1].old_from && data[i].dataset.floor <= vals[1].old_to

                    && data[i].dataset.size >= vals[2].old_from && data[i].dataset.size <= vals[2].old_to
                    && data[i].dataset.room >= vals[0].old_from && data[i].dataset.room <= vals[0].old_to


                ) {

                    update()
                }
                else if (id == 2 && data[i].dataset.size >= vals[2].old_from && data[i].dataset.size <= vals[2].old_to &&
                    data[i].dataset.floor >= vals[1].old_from && data[i].dataset.floor <= vals[1].old_to
                ) {

                    update()
                }
                else {
                    data[i].style.display = 'none';
                    n++;
                }

            }

            for (var i = 0; i < tmas.length; i++) {

                if (i == 1) {
                    continue;
                }
                if (id == 1) {
                    continue;
                }
                if (id != i) {
                    slider[i].update({
                        from: Math.floor(minmax[tmas[i]][0]),
                        to: Math.ceil(minmax[tmas[i]][1]),
                    });

                }
            }
		
	 if (n==data.length) {	 $('.not_found').css("display", "block");	} 
	 else { $('.not_found').css("display", "none");}
	 
	}
