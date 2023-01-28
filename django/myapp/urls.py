from django.contrib import admin
from . import views
from django.urls import path

urlpatterns = [
    path('admin', admin.site.urls),
    path('blog', views.index_sample, name='index'),
    path('', views.start, name='start'),
    path('bin.html', views.bin, name='bin'),
    path('web.html', views.web, name='web'),

]
