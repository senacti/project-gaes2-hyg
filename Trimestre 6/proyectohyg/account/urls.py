from django.urls import path
from . import views

urlpatterns = [
    path('', include(account.urls)),
    # path('login/' views.login_view., name='login_view'),
    # path('register/' views.register., name='register_view'),
]
