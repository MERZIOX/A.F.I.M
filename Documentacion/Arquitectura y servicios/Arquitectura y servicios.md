# Arquitectura y servicios AFIM
---
Para AFIM (Aplicativo de facturación e inventariado multitenant), se propone utilizar una arquitectura basada en la nube, utilizando la nube de AWS y sus respectivos servicios. Al utilizar un tipo de arquitectura basada en la nube se asegura que nuestro software sea escalable y más economico que una arquitectura monolitica, teniendo en cuenta el volumen e datos que manejará este aplicativo.

El aplicativo estará corriendo sobre un servidor web de amazzon llamado ECS(Elastic Container Service), el cual a su vez estará conectado con el servicio de almacenamiendo S3, donde serán almacenadas todas las imagenes y archivos que se requieran.

Implementaremos tambíen el uso de Amazon RDS(Amazon relational database service) para tener una base de datos solida que permita escalabilidad.

El servicio SQS(Simple Queue Service) será el encarcado de manejar las colas de facturas, con el modelo FIFO(First in, first out).

Y para las notificaciónes push y notificaciónes SMS será de mucha ayuda el servicio SNS(Simple Notification Service).

___

![](https://github.com/KelvinMR1997/A.F.I.M/blob/main/Documentacion/Arquitectura%20y%20servicios/AFIM%20Arquitectura%20y%20servicios.jpeg)