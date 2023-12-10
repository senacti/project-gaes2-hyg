(function($){
    $(document).ready(function(){
        function updateSubtotalAndTotal() {
            var cantidad = parseInt($('#id_cantidad').val()) || 0;
            var price = parseFloat($('#id_producto').find(':selected').data('price')) || 0;
            var subtotal = cantidad * price;
            $('#id_subtotal').val(subtotal.toFixed(2));

            // Actualizar el total en el formulario de Venta
            var detalles = $('#detalleventa_set-group .form-row:not(.empty-form)');
            var total = 0;
            detalles.each(function(){
                var detalleSubtotal = parseFloat($(this).find('[name$=subtotal]').val()) || 0;
                total += detalleSubtotal;
            });
            $('#id_total').val(total.toFixed(2));
        }

        // Llamar a la función al cargar la página
        updateSubtotalAndTotal();

        // Vincular el evento input en la cantidad y el cambio en el producto
        $('#id_cantidad, #id_producto').on('input change', function(){
            updateSubtotalAndTotal();
        });
    });
})(django.jQuery);
