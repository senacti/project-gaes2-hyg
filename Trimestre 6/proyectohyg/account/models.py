from django.db import models
from django.contrib.auth.models import AbstractUser

# Create your models here.


class User(AbstractUser):
    is_admin = models.BooleanField('Is admin', default=False)
    is_customer = models.BooleanField('Is customer', default=True)
    is_employee = models.BooleanField('Is employee', default=False)
    address = models.CharField(
        'Address', max_length=255, blank=True, null=True)
    phone = models.CharField('Phone', max_length=15, blank=True, null=True)
    cell_phone = models.CharField(
        'Cell Phone', max_length=15, blank=True, null=True)
