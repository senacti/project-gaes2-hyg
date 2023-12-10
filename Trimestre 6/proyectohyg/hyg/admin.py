
from django.contrib import admin
from django.http import HttpResponse
from .models import Category, Products, Compra,  Suppliers, Gastos
from import_export import resources
from import_export.admin import ImportExportModelAdmin
from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import letter, landscape
from datetime import datetime
from reportlab.lib import colors
from reportlab.lib.utils import simpleSplit


@admin.register(Category)
class CategoryAdmin(admin.ModelAdmin):
    list_display = ('name', 'description',)
    list_editable = ('description',)


@admin.register(Products)
class ProductsAdmin(ImportExportModelAdmin):
    list_display = ('code', 'name', 'price', 'amount',
                    'category', 'expiration_date',)
    list_editable = ('price',)
    search_fields = ('name',)
    list_filter = ('category',)
    list_per_page = 9
    actions = ['generate_pdf']
    
    class ProductResource(resources.ModelResource):
        class Meta:
            model = Products
            fields = ('code', 'name', 'price', 'amount',
                    'category', 'expiration_date',)
          

    def generate_pdf(self, request, queryset):
        # Aquí llamamos a la función que genera el PDF
        pdf_response = self.generate_pdf_report(queryset)
        return pdf_response

    generate_pdf.short_description = "Generar PDF"

    def generate_pdf_report(self, queryset):
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reporte_productos.pdf"'

        # Create the PDF object with landscape orientation
        p = canvas.Canvas(response, pagesize=landscape(letter))

        # Coloca el logo una línea arriba del título
        logo_path = 'static/Iconos/iconopdf.png'
        p.drawImage(logo_path, 50, 550, width=100, height=50)
        
        date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        p.setFont("Helvetica", 8)
        p.drawRightString(770, 590, f"Generado el: {date_string}")

        # PDF Title
        p.setFont("Helvetica", 18)
        p.setFillColor(colors.darkblue) 
        p.drawString(100, 530, "Reporte de productos")  # Ajusta la coordenada Y aquí

        # Headers
        p.setFont("Helvetica", 10)
        p.setFillColor(colors.darkblue) 
        p.drawString(70, 500, "ID")
        p.drawString(130, 500, "Nombre")
        p.drawString(280, 500, "Precio")
        p.drawString(350, 500, "Cantidad")
        p.drawString(450, 500, "Categoria")
        p.drawString(570, 500, "Fecha de Vencimiento")
        p.drawString(700, 500, "Estado")
        p.setFillColor(colors.black)

        # Content
        y_position = 470
        rows_per_page = 20  # Ajusta este valor según tu límite de filas por hoja
        for i, product in enumerate(queryset):
            if i % rows_per_page == 0 and i != 0:
                # Si alcanza el límite de filas por hoja, crea una nueva página
                p.showPage()
                    # Coloca el logo una línea arriba del título
                logo_path = 'static/Iconos/iconopdf.png'
                p.drawImage(logo_path, 50, 550, width=100, height=50)
                
                date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
                p.setFont("Helvetica", 8)
                p.drawRightString(770, 590, f"Generado el: {date_string}")

        # PDF Title
                p.setFont("Helvetica", 16)
                p.setFillColor(colors.darkblue) 
                p.drawString(100, 530, "Reporte de productos")  # Ajusta la coordenada Y aquí

        # Headers
                p.setFont("Helvetica", 10)
                p.setFillColor(colors.darkblue) 
                p.drawString(70, 500, "ID")
                p.drawString(130, 500, "Nombre")
                p.drawString(280, 500, "Precio")
                p.drawString(350, 500, "Cantidad")
                p.drawString(450, 500, "Categoria")
                p.drawString(570, 500, "Fecha de Vencimiento")
                p.drawString(700, 500, "Estado")
                p.setFillColor(colors.black)
                y_position = 470  # Reinicia la posición Y para la nueva página

            p.drawString(70, y_position, str(product.id))
            p.drawString(130, y_position, product.name)
            p.drawString(280, y_position, str(product.price))
            p.drawString(350, y_position, str(product.amount))
            p.drawString(450, y_position, product.category.name)  
            p.drawString(600, y_position, str(product.expiration_date))
            p.drawString(700, y_position, str(product.status))
            y_position -= 20
        
       


        # Close the PDF object cleanly, and we're done.
        p.showPage()
        p.save()

        return response

@admin.register(Compra)
class CompraAdmin(ImportExportModelAdmin):
    list_display = ('id', 'supplier', 'product', 'datec',
                    'amountc', 'pricec', 'description',)
    list_editable = ('supplier', 'product',)
    search_fields = ('supplier', 'product',)
    list_per_page = 9
    actions = ['generate_pdf']
    
    class CompraResource(resources.ModelResource):
        class Meta:
            model = Compra
            fields = ('id', 'supplier', 'product', 'datec',
                    'amountc', 'pricec', 'description',)
    
    def generate_pdf(self, request, queryset):
      
        pdf_response_products = self.generate_pdf_report(queryset)
        

        queryset_compra = Compra.objects.all()  
        pdf_response_compra = self.generate_pdf_report_compras(queryset_compra)


        pdf_response_products.write(pdf_response_compra)

     
        return pdf_response_compra

    generate_pdf.short_description = "Generar PDF"

    def generate_pdf_report(self, queryset):
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reporte_productos.pdf"'

        # Resto del código para generar el PDF de Products
        # ...

        return response

    def generate_pdf_report_compras(self, queryset_compra):
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reporte_compras.pdf"'

        # Create the PDF object with landscape orientation
        p = canvas.Canvas(response, pagesize=landscape(letter))

        # Coloca el logo una línea arriba del título
        logo_path = 'static/Iconos/iconopdf.png'
        p.drawImage(logo_path, 50, 550, width=100, height=50)
        
        date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        p.setFont("Helvetica", 8)
        p.drawRightString(770, 590, f"Generado el: {date_string}")

        # PDF Title
        p.setFont("Helvetica", 18)
        p.setFillColor(colors.darkblue) 
        p.drawString(100, 530, "Reporte de compras")  # Ajusta la coordenada Y aquí

        # Headers
        p.setFont("Helvetica", 10)
        p.setFillColor(colors.darkblue) 
        p.drawString(70, 500, "ID")
        p.drawString(120, 500, "Descripción")
        p.drawString(320, 500, "Cantidad")
        p.drawString(400, 500, "Fecha")
        p.drawString(500, 500, "Precio")
        p.drawString(580, 500, "Proveedor")
        p.drawString(680, 500, "Producto")
        p.setFillColor(colors.black)

        # Content
        y_position = 470
        rows_per_page = 20  # Ajusta este valor según tu límite de filas por hoja
        for i, compra in enumerate(queryset_compra):
            if i % rows_per_page == 0 and i != 0:
                # Si alcanza el límite de filas por hoja, crea una nueva página
                p.showPage()
                
                logo_path = 'static/Iconos/iconopdf.png'
                p.drawImage(logo_path, 50, 550, width=100, height=50)
                
                date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
                p.setFont("Helvetica", 8)
                p.drawRightString(770, 590, f"Generado el: {date_string}")

                # PDF Title
                p.setFont("Helvetica", 18)
                p.setFillColor(colors.darkblue) 
                p.drawString(100, 530, "Reporte de compras")  # Ajusta la coordenada Y aquí

                # Headers
                p.setFont("Helvetica", 10)
                p.setFillColor(colors.darkblue) 
                p.drawString(70, 500, "ID")
                p.drawString(120, 500, "Descripción")
                p.drawString(320, 500, "Cantidad")
                p.drawString(400, 500, "Fecha")
                p.drawString(500, 500, "Precio")
                p.drawString(580, 500, "Proveedor")
                p.drawString(680, 500, "Producto")
                p.setFillColor(colors.black)
                y_position = 470  # Reinicia la posición Y para la nueva página

            p.drawString(70, y_position, str(compra.id))
            p.drawString(120, y_position, compra.description)
            p.drawString(330, y_position, str(compra.amountc))
            p.drawString(400, y_position, str(compra.datec))
            p.drawString(500, y_position, str(compra.pricec))
            p.drawString(580, y_position, compra.supplier.name)  
            p.drawString(680, y_position, compra.product.name)
            y_position -= 20
            
            
        
        # Resto del código para completar el PDF de Compra
        # ...

        # Close the PDF object cleanly, and we're done.
        p.showPage()
        p.save()

        return response
    
    
@admin.register(Gastos)   
class GastosAdmin(ImportExportModelAdmin):
    list_display = ('id', 'description', 'date', 'price',)
    list_editable = ('description', 'date', 'price',)
    search_fields = ('description',)
    list_per_page = 9

    actions = ['generate_pdf']
    
    class GastosResource(resources.ModelResource):
        class Meta:
            model = Gastos
            fields = ('id', 'description', 'date', 'price',)
            
    def generate_pdf(self, request, queryset):
        # Aquí llamamos a la función que genera el PDF
        pdf_response = self.generate_pdf_report(queryset)
        return pdf_response

    generate_pdf.short_description = "Generar PDF"

    def generate_pdf_report(self, queryset):
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reporte_gastos.pdf"'

        # Create the PDF object, using the response object as its "file."
        p = canvas.Canvas(response, pagesize=letter)

        logo_path = 'static/Iconos/iconopdf.png'
        p.drawImage(logo_path, 50, 730, width=100, height=50)
        
        date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        p.setFont("Helvetica", 8)
        p.drawRightString(600, 730, f"Generado el: {date_string}")

        # PDF Title
        p.setFont("Helvetica", 16) 
        p.setFillColor(colors.darkblue) 
        p.drawString(100, 700, "Reporte de gastos")

        # Headers
        p.setFont("Helvetica", 10)
        p.setFillColor(colors.darkblue) 
        p.drawString(70, 675, "ID")
        p.drawString(150, 675, "Descripción")
        p.drawString(450, 675, "Fecha")
        p.drawString(530, 675, "Precio")
        p.setFillColor(colors.black)

        # Content
        y_position = 645
        rows_per_page = 20  # Ajusta este valor según tu límite de filas por hoja
        for i, gasto in enumerate(queryset):
            if i % rows_per_page == 0 and i != 0:
                # Si alcanza el límite de filas por hoja, crea una nueva página
                p.showPage()
                logo_path = 'static/Iconos/iconopdf.png'
                p.drawImage(logo_path, 50, 730, width=100, height=50)
                
                date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
                p.setFont("Helvetica", 8)
                p.drawRightString(300, 730, f"Generado el: {date_string}")

                # PDF Title
                p.setFont("Helvetica", 16) 
                p.setFillColor(colors.darkblue) 
                p.drawString(150, 730, "Reporte de gastos")

                # Resto del código para el encabezado de la nueva página
                p.setFont("Helvetica", 16)
                p.drawString(100, 800, "Reporte de gastos")
                p.setFont("Helvetica", 10)
                p.drawString(70, 780, "ID")
                p.drawString(150, 780, "Descripción")
                p.drawString(450, 780, "Fecha")
                p.drawString(530, 780, "Precio")
                y_position = 760  # Reinicia la posición Y para la nueva página

            # Ajusta el ancho máximo del texto y divide automáticamente el texto en varias líneas
            

            # Dibuja cada línea por separado
            
            p.drawString(70, y_position, str(gasto.id))
            p.drawString(150, y_position, gasto.description)
            p.drawString(440, y_position, str(gasto.date))
            p.drawString(530, y_position, str(gasto.price))
            y_position -= 20

        # Close the PDF object cleanly, and we're done.
        p.showPage()
        p.save()

        return response

@admin.register(Suppliers)
class SuppliersAdmin(ImportExportModelAdmin):
    list_display = ('id', 'name', 'email', 'phone',)
    list_editable = ('email', 'phone',)
    actions = ['generate_pdf']
    
    class SuppliersResource(resources.ModelResource):
        class Meta:
            model = Suppliers
            fields = ('id', 'name', 'email', 'phone',)
            
    def generate_pdf(self, request, queryset):
        # Aquí llamamos a la función que genera el PDF
        pdf_response = self.generate_pdf_report(queryset)
        return pdf_response

    generate_pdf.short_description = "Generar PDF"

    def generate_pdf_report(self, queryset):
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reporte_proveedores.pdf"'

        # Create the PDF object, using the response object as its "file."
        p = canvas.Canvas(response, pagesize=letter)

        logo_path = 'static/Iconos/iconopdf.png'
        p.drawImage(logo_path, 50, 730, width=100, height=50)

        date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        p.setFont("Helvetica", 8)
        p.drawRightString(600, 730, f"Generado el: {date_string}")

        # PDF Title
        p.setFont("Helvetica", 16)
        p.setFillColor(colors.darkblue)
        p.drawString(100, 700, "Reporte de proveedores")

        # Headers
        p.setFont("Helvetica", 10)
        p.setFillColor(colors.darkblue)
        p.drawString(70, 675, "ID")
        p.drawString(150, 675, "Nombre")
        p.drawString(280, 675, "Email")
        p.drawString(480, 675, "Teléfono")
        p.setFillColor(colors.black)

        # Content
        y_position = 645
        rows_per_page = 20  # Ajusta este valor según tu límite de filas por hoja
        for i, supplier in enumerate(queryset):
            if i % rows_per_page == 0 and i != 0:
                # Si alcanza el límite de filas por hoja, crea una nueva página
                p.showPage()
                logo_path = 'static/Iconos/iconopdf.png'
                p.drawImage(logo_path, 50, 730, width=100, height=50)

                date_string = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
                p.setFont("Helvetica", 8)
                p.drawRightString(300, 730, f"Generado el: {date_string}")

                # PDF Title
                p.setFont("Helvetica", 16)
                p.setFillColor(colors.darkblue)
                p.drawString(150, 730, "Reporte de proveedores")

                # Resto del código para el encabezado de la nueva página
                p.setFont("Helvetica", 16)
                p.drawString(100, 800, "Reporte de proveedores")
                p.setFont("Helvetica", 10)
                p.drawString(70, 780, "ID")
                p.drawString(150, 780, "Nombre")
                p.drawString(280, 780, "Email")
                p.drawString(480, 780, "Teléfono")
                y_position = 760  # Reinicia la posición Y para la nueva página

            p.drawString(70, y_position, str(supplier.id))
            p.drawString(150, y_position, supplier.name)
            p.drawString(280, y_position, supplier.email)
            p.drawString(480, y_position, supplier.phone)
            y_position -= 20

        # Close the PDF object cleanly, and we're done.
        p.showPage()
        p.save()

        return response
