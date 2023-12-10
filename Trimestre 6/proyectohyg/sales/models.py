from django.db import models
from hyg.models import Products
from django.db.models.signals import post_save
from django.dispatch import receiver



class Cliente(models.Model):
    nombre = models.CharField(max_length=255)
    email = models.EmailField()
    telefono = models.CharField(max_length=20, null=True, blank=True)

    def __str__(self):
        return self.nombre


class Venta(models.Model):
    cliente = models.ForeignKey('Cliente', on_delete=models.CASCADE)
    fecha = models.DateField()
    total = models.DecimalField(max_digits=10, decimal_places=2, default=0)  # Establecer un valor predeterminado

    def __str__(self):
        return f"Venta {self.id} - Cliente: {self.cliente.nombre}"

class DetalleVenta(models.Model):
    venta = models.ForeignKey(Venta, on_delete=models.CASCADE)
    producto = models.ForeignKey(Products, on_delete=models.CASCADE)
    cantidad = models.IntegerField() 
    subtotal = models.DecimalField(max_digits=10, decimal_places=2, default=0, editable=False,)
   

    def save(self, *args, **kwargs):
        # Calcula el subtotal al guardar el objeto si no se ha proporcionado manualmente
        if not self.subtotal:
            self.subtotal = self.producto.price * self.cantidad if self.producto else 0
        super().save(*args, **kwargs)

    def __str__(self):
        return f"DetalleVenta {self.id} - Venta: {self.venta.id}, Producto: {self.producto.name}, Subtotal: {self.subtotal}"
    

@receiver(post_save, sender=DetalleVenta)
def actualizar_venta(sender, instance, **kwargs):
    # Calcula el subtotal del detalle
    instance.subtotal = instance.producto.price * instance.cantidad
    instance.save()

    # Actualiza el total de la venta
    venta = instance.venta
    detalles = DetalleVenta.objects.filter(venta=venta)
    venta.total = sum(detalle.subtotal for detalle in detalles)
    venta.save()
            
            

