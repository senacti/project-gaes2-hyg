from django.db import models

# Create your models here.


class Suppliers(models.Model):
    email = models.CharField(
        max_length=255, null=True, blank=True)
    name = models.CharField(max_length=255, null=True, blank=True)
    phone = models.CharField(max_length=255, null=True, blank=True)
    
    def __str__(self):
        return self.nombre
    
    class Meta:
        verbose_name = 'proveedor'
        verbose_name_plural = 'proveedores'
        db_table = 'proveedor'
        ordering = ['id'] 
    
class Compra(models.Model):
#    amount = cantidad, suppliers = proveedores
    amountc = models.IntegerField()
    datec= models.DateField(null=True, blank=True)
    pricec = models.IntegerField()
    productc = models.CharField(max_length=255, null=True, blank=True)
    suppliersc = models.CharField(max_length=255, null=True, blank=True)
    supplier = models.ForeignKey(
    Suppliers, on_delete=models.SET_NULL, null=True)
    
    class Meta:
        verbose_name = 'compra'
        verbose_name_plural = 'compras'
        db_table = 'compras'
        ordering = ['id'] 

class Gastos(models.Model):
    description = models.CharField(max_length=255, null=True)
    date = models.DateField(null=True)
    price = models.IntegerField()

    def __str__(self):
        return self.descripcion

    class Meta:
            verbose_name = 'gasto'
            verbose_name_plural = 'gastos'
            db_table = 'gastos'
            ordering = ['id'] 


class Products(models.Model):
    price = models.IntegerField()
    code = models.CharField(max_length=255, null=True)
    amount = models.FloatField(null=True)
    name = models.CharField(max_length=255, null=True)

    def __str__(self):
        return self.nombre
    
    class Meta:
            verbose_name = 'Producto'
            verbose_name_plural = 'Productos'
            db_table = 'Producto'
            ordering = ['id'] 
