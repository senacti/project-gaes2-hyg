from django.contrib import admin
from .models import Sale,ProductSold,Products

@admin.register(Sale)
class SaleAdmin(admin.ModelAdmin):
    list_display=('dateandhour',)

@admin.register(ProductSold)
class ProductSoldAdmin(admin.ModelAdmin):
    list_display=('amount','code','name','price','product','sale')

# Register your models here.
