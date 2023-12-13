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
                            <h2>Plan de trabajo</h2>
                        </div>

                        <div>
                            <h3>Para entrar al plan de trabajo de cada proyecto, en la parte derecha de cada proyecto aparecerá este boton verde con el icono de un ojito</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/9ec3461f-53e9-4c74-8974-f1b444f3a923/c71087bc-e5ea-4892-bbbb-3f4d52475fed.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.7681&fp-y=0.2835&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=544&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para entrar al plan de trabajo de cada proyecto, en la parte derecha de cada proyecto aparecerá este boton verde con el icono de un ojito" />
                        </div>

                        <div>
                            <h3>Al darle clic al boton verde nos redireccionará a esta vista que seria plan de trabajo</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/2a3f88ce-b401-4bed-8b12-e860a7d366f8/7bfed75f-af8d-4a30-9444-7850c944a7dc.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5799&fp-y=0.1734&fp-z=1.3009&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=56&mark-y=53&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDg4Jmg9MjI3JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al darle clic al boton verde nos redireccionará a esta vista que seria plan de trabajo" />
                        </div>

                        <div>
                            <h3>Para registrar una actividad le daremos clic al boton que dice "Registrar Actividad" y aparecerá este cuadro con los campos a diligenciar</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/51b84e6d-1cdc-4dec-ae01-515f02651db5/e1b3ff3e-564f-4fa5-979f-da1c03fe5680.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para registrar una actividad le daremos clic al boton que dice &quot;Registrar Actividad&quot; y aparecerá este cuadro con los campos a diligenciar" />
                        </div>

                        <div>
                            <h3>Si le damos clic al boton "Guardar" con los campos incorrectos aparecerá estas alertas en los campos requeridos</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/304f26dd-fa6d-4a7f-ac6b-033dddd00d5d/99852e20-c3a8-41e4-806c-4b8787c9f780.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Si le damos clic al boton &quot;Guardar&quot; con los campos incorrectos aparecerá estas alertas en los campos requeridos" />
                        </div>

                        <div>
                            <h3>Si colocamos una fecha y hora inicial mayor a la fecha y hora final este sera la alerta que aparecerá en el campo</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/c8fc4fef-6a13-41e9-966c-08d369236155/dc330888-83d5-4f9a-b9d8-4a294df5cbbd.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.4268&fp-z=1.6587&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=299&mark-y=340&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDMmaD01OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Si colocamos una fecha y hora inicial mayor a la fecha y hora final este sera la alerta que aparecerá en el campo" />
                        </div>

                        <div>
                            <h3>Ya con los campos correctos si le damos clic al boton "Guardar" el registro se guardará correctamente en la tabla</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/fe7d1b3e-250d-4cf0-bb37-7bfa109c94a7/40f97bdf-5339-4801-937b-e81d402da024.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5799&fp-y=0.2015&fp-z=1.3009&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=56&mark-y=53&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDg4Jmg9MjgxJmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Ya con los campos correctos si le damos clic al boton &quot;Guardar&quot; el registro se guardará correctamente en la tabla" />
                        </div>

                        <div>
                            <h3>Para editar una actividad le daremos al boton gris que esta en la parte derecha de cada actividad</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/846921c7-9d4e-4b9f-9a2f-2d4cf9e89d82/cd9bb06f-bf78-4e12-8572-84de3110e457.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8422&fp-y=0.2991&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=586&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para editar una actividad le daremos al boton gris que esta en la parte derecha de cada actividad" />
                        </div>

                        <div>
                            <h3>Editamos los campos que consideremos necesarios para la actividad</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/7144d155-28d7-4947-973f-a6e8f36f59b9/fa3c1aa3-8197-42f5-b147-0ac2003a763f.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.5161&fp-z=1.6587&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=299&mark-y=340&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDMmaD01OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Editamos los campos que consideremos necesarios para la actividad" />
                        </div>

                        <div>
                            <h3>Y le daremos clic al boton "Guardar" para que se editen los campos y se mostraran en la tabla correctamente editados</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/71f1ab88-071d-40fe-baef-ee6feae1de4c/34253594-fff8-4275-82f9-8ad35972b145.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6233&fp-y=0.6064&fp-z=2.8021&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=504&mark-y=320&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xOTEmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y le daremos clic al boton &quot;Guardar&quot; para que se editen los campos y se mostraran en la tabla correctamente editados" />
                        </div>

                        <div>
                            <h3>Para eliminar una actividad estará un boton rojo en la parte derecha de la actividad que queremos eliminar</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/d942223e-0a70-42b0-b9b9-8f5b4ef12033/8a54e040-8809-4d90-9141-54701f224569.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8709&fp-y=0.2991&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=687&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para eliminar una actividad estará un boton rojo en la parte derecha de la actividad que queremos eliminar" />
                        </div>

                        <div>
                            <h3>Aparecera una alerta como esta y le daremos al boton rojo que dice "Si, eliminar" y la actividad se eliminara correctamente de la tabla</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/0cd7209c-0fb9-4e86-9398-f2adc15c87d0/42038280-e13d-44f8-a7ad-07fff12a2054.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.5005&fp-z=1.5168&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=298&mark-y=168&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDUmaD00MDImZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aparecera una alerta como esta y le daremos al boton rojo que dice &quot;Si, eliminar&quot; y la actividad se eliminara correctamente de la tabla" />
                        </div>

                        <div>
                            <h3>Y aparecerá una alerta confirmando que la actividad se ha eliminado correctamente</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/d70289a0-88e2-4a7f-9539-d9870bb75b77/ba65a7ef-7644-4c9b-a9fe-165729b0981c.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5802&fp-y=0.1350&fp-z=1.3096&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=60&mark-y=101&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDgxJmg9NTgmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y aparecerá una alerta confirmando que la actividad se ha eliminado correctamente" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection