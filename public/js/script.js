$('.add-to-cart-btn').on('click',function(){

   $.ajax({
    url: BASE_URL + 'shop/add-to-cart',
    type:'GET',
    dataType: 'html',
    data:{pid: $(this).data('pid')}, //receive id of product which should be added to cart,
    success: function(response){
       window.location.reload()
    }
   });
});

$('.field-input-cms').on('focusin focusout',function(){
   $(this).next().toggleClass('text-black').toggleClass('text-muted  ');
});

String.prototype.toPermalink = function(){
   return this.toString().trim().toLowerCase().replace(/\s/g, '-');
}

$('.original-text').on('keyup',function(){
   $('.target-text').val($(this).val().toPermalink());
})

