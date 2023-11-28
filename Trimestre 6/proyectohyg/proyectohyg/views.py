from django.http import HttpResponse
from django.shortcuts import render
from django.shortcuts import redirect
from django.contrib.auth import login, authenticate, logout
from django.contrib import messages


def inicio(request):
    return render(request, 'inicio.html', {
        # context
    })


def contacto(request):
    return render(request, 'contacto.html', {
        # context
    })


def nosotros(request):
    return render(request, 'nosotros.html', {
        # context
    })


def dashboard_administrador(request):
    return render(request, 'DashboardAdmin.html', {
        # context
    })


def dashboard_cliente(request):
    return render(request, 'DashboardClient.html', {
        # context
    })


# def custom_login_view(request):
#     if request.method == 'POST':
#         username = request.POST.get('username')
#         password = request.POST.get('password')
#         user = authenticate(request, username=username, password=password)

#         if user is not None:
#             login(request, user)
#             messages.success(request, '¡Bienvenido, {}!'.format(user.username))
#             # Cambia esto por la URL que desees después del inicio de sesión
#             return redirect('DashboardAdmin.html')
#         else:
#             messages.error(request, 'Usuario o contraseña incorrectos')

#     return render(request, 'login.html', {})


def registro(request):
    return render(request, 'registro.html', {
        # context
    })


def logout_view(request):
    logout(request)
    messages.success(request, 'Sesión finalizada')
    return redirect('login')
