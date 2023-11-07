from django.http import HttpResponse
from django.shortcuts import render


def index(request):
    return render(request,'index.html',{
        #context
    })

def contacto(request):
    return render(request,'contacto.html',{
        #context
    })

def nosotros(request):
    return render(request,'nosotros.html',{
        #context
    })

def dashboard_administrador(request):
    return render(request,'DashboardAdmin.html',{
        #context
    })

def login(request):
    return render(request,'login.html',{
        #context
    })

def registro(request):
    return render(request,'registro.html',{
        #context
    })



