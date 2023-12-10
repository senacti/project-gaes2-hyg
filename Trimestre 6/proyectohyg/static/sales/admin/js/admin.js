(function($){
    $(document).ready(function(){
        function updateSubtotal() {
            var cantidad = parseInt($('#id_cantidad').val()) || 0;
            var price = parseFloat($('#id_producto').find(':selected').data('price')) || 0;
            var subtotal = cantidad * price;
            $('#id_subtotal').val(subtotal.toFixed(2));
        }

        // Llamar a la función al cargar la página
        updateSubtotal();

        // Vincular el evento input en la cantidad y el cambio en el producto
        $('#id_cantidad, #id_producto').on('input change', function(){
            updateSubtotal();
        });
    });
})(django.jQuery);