from django.http import HttpResponse
from django.shortcuts import render
from django.contrib.auth.decorators import login_required


def index(request):
    return render(request, 'index.html', {
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


def login(request):
    return render(request, 'login.html', {
        # context
    })


def registro(request):
    return render(request, 'registro.html', {
        # context
    })


@login_required
def dashboard_administrador(request):
    return render(request, 'DashboardAdmin.html', {
        # context
    })
