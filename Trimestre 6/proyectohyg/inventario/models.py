from django.db import models


class Proveedor(models.Model):
    correo_electronico = models.CharField(
        max_length=255, null=True, blank=True)
    nombre = models.CharField(max_length=255, null=True, blank=True)
    telefono = models.CharField(max_length=255, null=True, blank=True)


class Compra(models.Model):
    """
    Modelo para representar compras realizadas.
    """
    cantidadc = models.IntegerField()
    fechac = models.DateField(null=True, blank=True)
    precioc = models.IntegerField()
    productoc = models.CharField(max_length=255, null=True, blank=True)
    proveedorc = models.CharField(max_length=255, null=True, blank=True)
    proveedor = models.ForeignKey(
        Proveedor, on_delete=models.SET_NULL, null=True)


class Venta(models.Model):
    fechayhora = models.DateTimeField(null=True)

    def __str__(self):
        return str(self.id)


class ProductoVendido(models.Model):
    cantidad = models.FloatField(null=True)
    codigo = models.CharField(max_length=255, null=True)
    nombre = models.CharField(max_length=255, null=True)
    precio = models.FloatField(null=True)
    venta = models.ForeignKey(Venta, on_delete=models.CASCADE, null=True)

    def __str__(self):
        return self.nombre


class Role(models.Model):

    name = models.CharField(max_length=45)

    def __str__(self):
        return self.name


class User(models.Model):
    email = models.CharField(max_length=45)
    first_name = models.CharField(max_length=20)
    last_name = models.CharField(max_length=20)
    password = models.CharField(max_length=64)

    def __str__(self):
        return self.email


class UserRole(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    role = models.ForeignKey(Role, on_delete=models.CASCADE)

    def __str__(self):
        return f"{self.user} - {self.role}"


class Gastos(models.Model):
    descripcion = models.CharField(max_length=255, null=True)
    fecha = models.DateField(null=True)
    valor = models.IntegerField()

    def __str__(self):
        return self.descripcion


class Producto(models.Model):
    precio = models.IntegerField()
    codigo = models.CharField(max_length=255, null=True)
    existencia = models.FloatField(null=True)
    nombre = models.CharField(max_length=255, null=True)

    def __str__(self):
        return self.nombre