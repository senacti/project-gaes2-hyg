from django import template

register = template.Library()


@register.filter()
def price_fromat(value):
    return '${0:2f}'.format(value)
