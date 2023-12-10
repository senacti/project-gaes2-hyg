from django.contrib import admin
from import_export.admin import ImportExportModelAdmin
from import_export import resources
from django.http import HttpResponse
from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import landscape, letter
from reportlab.lib import colors
from datetime import datetime
from .models import Product



    

class ProductAdmin(ImportExportModelAdmin):
    fields = ('title', 'description', 'price', 'image','expiration_date','status')
    list_display = ('title', 'description', 'price', 'image','expiration_date','status')
    actions = ['generate_pdf']
 
    
    
    class ProductResource(resources.ModelResource):
        class Meta:
            model = Product
            fields = ('title', 'description', 'price', 'slug', 'created_at', 'image')
            
            
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
        p.drawString(280, 500, "Descripcion")

        p.drawString(500, 500, "Precio")
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
                p.drawString(280, 500, "Descripcion")

                p.drawString(500, 500, "Precio")
                p.drawString(570, 500, "Fecha de Vencimiento")
                p.drawString(700, 500, "Estado")
                p.setFillColor(colors.black)
                y_position = 470  # Reinicia la posición Y para la nueva página

            p.drawString(70, y_position, str(product.id))
            p.drawString(130, y_position, product.title)
            p.drawString(280, y_position, str(product.description))
            p.drawString(500, y_position, str(product.price))
            p.drawString(570, y_position, str(product.expiration_date))
            p.drawString(700, y_position, str(product.status))
            y_position -= 20
        
       


        # Close the PDF object cleanly, and we're done.
        p.showPage()
        p.save()

        return response

   

admin.site.register(Product, ProductAdmin)
