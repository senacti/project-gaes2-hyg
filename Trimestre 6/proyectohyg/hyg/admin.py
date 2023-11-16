from django.contrib import admin
from .models import Category, Products, Compra, Suppliers, Gastos
from account.models import User


@admin.register(Category)
class CategoryAdmin(admin.ModelAdmin):
    list_display = ('name', 'description',)
    list_editable = ('description',)


@admin.register(Products)
class ProductsAdmin(admin.ModelAdmin):
    list_display = ('name', 'price', 'category')
    list_editable = ('price',)
    search_fields = ('name',)
    list_filter = ('category',)
    list_per_page = 5


@admin.register(Compra)
class CompraAdmin(admin.ModelAdmin):
    list_display = ('id', 'supplier', 'product', 'datec',
                    'amountc', 'pricec', 'description',)
    list_editable = ('supplier',)


@admin.register(Suppliers)
class SuppliersAdmin(admin.ModelAdmin):
    list_display = ('id', 'name', 'email', 'phone',)


admin.site.register(User)
