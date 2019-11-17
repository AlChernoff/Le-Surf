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