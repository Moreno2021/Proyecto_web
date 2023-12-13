@extends('adminlte::page')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Contenido principal -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">


                        <div>
                            <h2>Evidencias</h2>
                        </div>

                        <div>
                            <h3>Para entrar en la vista de las evidencias aparecerá un boton en la parte derecha encima de la tabla de las actividad llamada "Carpetas"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/0ca725f7-ced8-44a0-8395-9efacf778ae8/baf7d6a7-e9e4-40b8-9e29-182310b189c9.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8587&fp-y=0.1772&fp-z=2.8773&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=730&mark-y=310&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0yMDUmaD0xMDEmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para entrar en la vista de las evidencias aparecerá un boton en la parte derecha encima de la tabla de las actividad llamada &quot;Carpetas&quot;" />
                        </div>

                        <div>
                            <h3>Nos llevará a esta vista que seria para subir las evidencias </h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/bbcd1f14-cd02-4844-872f-23d46d97b99e/7daf18e9-ecf8-43f0-8a73-87cd8d6c5ddf.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5773&fp-y=0.5254&fp-z=1.0582&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=130&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDY3Jmg9NzM1JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Nos llevará a esta vista que seria para subir las evidencias " />
                        </div>

                        <div>
                            <h3>Al lado del boton "Subir" habrá un campo desplegable en las que estaran las 4 carpetas que seria de "Planear, Hacer, Verificar, Actuar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a3f3b074-5967-4fb6-a86a-609e397f63f6/1c7b29b7-8bb3-4fbc-a173-4a27627eb579.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.3435&fp-y=0.1038&fp-z=2.3411&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=421&mark-y=138&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0zNTcmaD04MyZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al lado del boton &quot;Subir&quot; habrá un campo desplegable en las que estaran las 4 carpetas que seria de &quot;Planear, Hacer, Verificar, Actuar&quot;" />
                        </div>

                        <div>
                            <h3>Al lado del campo desplegable estará la barra para subir los archivos dependiendo a la carpeta en la que se elija</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/c2170d14-9316-4e93-8654-3b30d31550cd/97415fb5-8541-4afd-af44-e8ffe7316eed.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5799&fp-y=0.0914&fp-z=1.2160&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=13&mark-y=49&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTc0Jmg9NjUmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al lado del campo desplegable estará la barra para subir los archivos dependiendo a la carpeta en la que se elija" />
                        </div>

                        <div>
                            <h3>Subimos este archivo como ejemplo "Formato_Identificacion_estilos_de_aprendizaje.xls" y le damos clic en el boton "Subir"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/1f7de00a-081d-4360-9104-023e9af7cde7/bf488f95-8102-4ed2-8776-bcb928200cba.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6952&fp-y=0.1038&fp-z=1.6901&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=18&mark-y=100&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTY0Jmg9NjAmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Subimos este archivo como ejemplo &quot;Formato_Identificacion_estilos_de_aprendizaje.xls&quot; y le damos clic en el boton &quot;Subir&quot;" />
                        </div>

                        <div>
                            <h3>En este caso pusimos que la carpeta fuera "Hacer" para subir el archivo y se sube correctamente</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/71346062-22f3-43b7-8c3e-5406dce825f9/8aedcf63-a1d4-456a-afd5-26612ab3018c.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5799&fp-y=0.2451&fp-z=1.2170&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=14&mark-y=123&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTczJmg9MTk0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En este caso pusimos que la carpeta fuera &quot;Hacer&quot; para subir el archivo y se sube correctamente" />
                        </div>

                        <div>
                            <h3>Abajo del archivo habrán dos botones, uno para descargar que seria el boton gris y el otro para eliminar que seria el boton rojo
                            </h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/f2f738cd-4377-4710-97e2-4b2420c09404/3e96cec1-a1cc-4c70-bc3b-289d4aa9014b.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.4169&fp-y=0.2518&fp-z=1.3393&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=241&mark-y=236&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz03MTgmaD0yNiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Abajo del archivo habrán dos botones, uno para descargar que seria el boton gris y el otro para eliminar que seria el boton rojo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection