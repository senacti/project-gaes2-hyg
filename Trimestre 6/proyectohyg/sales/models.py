from django.db import models
from hyg.models import Products

# Create your models class Venta(models.Model):
class Sale(models.Model):
    dateandhour = models.DateTimeField(null=True)
    products = models.ManyToManyField(Products, through='ProductSold')

    def __str__(self):
        return str(self.id)
    
    class Meta:
        verbose_name = 'venta'
        verbose_name_plural = 'ventas'
        db_table = 'ventas'
        ordering = ['id'] 


class ProductSold(models.Model):
    amount = models.FloatField(null=True)
    code = models.CharField(max_length=255, null=True)
    name = models.CharField(max_length=255, null=True)
    price = models.FloatField(null=True)
    product = models.ForeignKey(Products, on_delete=models.CASCADE)
    sale = models.ForeignKey(Sale, on_delete=models.CASCADE)

    def __str__(self):
        return self.name

    class Meta:
        verbose_name = 'ProductoVendido'
        verbose_name_plural = 'ProductosVendidos'
        db_table = 'ProductoVendido'
        ordering = ['id'] 

