$(window).on("load", function() {
	var imgs = new Array(); 

    $(".carousel-inner-img").each(function() {  
       var imgsrc = $(this).attr('data-ebookName');
       imgs.push(imgsrc);
    });

    $('#ebook-download .ebook-title').html(imgs[0].split('-').join(' '));
    $('#ebook-download #inputEbook').val(imgs[0]);
    
    $('#carousel-ebooks .carousel-control').on('click', function (e) {
        if($(this).hasClass('left')){
            if($('#carousel-ebooks .active').index() == 0){
                $('#ebook-download .ebook-title').html(imgs[imgs.length-1].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[imgs.length-1]);
            }else{
                $('#ebook-download .ebook-title').html(imgs[$('#carousel-ebooks .active').index()-1].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[$('#carousel-ebooks .active').index()-1]);
            }
        }

        if($(this).hasClass('right')){
            if($('#carousel-ebooks .active').index() == imgs.length-1){
                $('#ebook-download .ebook-title').html(imgs[0].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[0]);
            }else{
                $('#ebook-download .ebook-title').html(imgs[$('#carousel-ebooks .active').index()+1].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[$('#carousel-ebooks .active').index()+1]);
            }
        }
    });
});