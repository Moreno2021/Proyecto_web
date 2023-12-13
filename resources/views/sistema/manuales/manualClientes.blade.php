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
                            <h2>Clientes</h2>
                        </div>

                        <div>
                            <h3>En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice "Clientes"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/e1fd5cda-e3d2-4b54-aa79-1a1e32487026/9bf2b494-1e10-4eae-bf03-1a9207312937.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.0861&fp-y=0.1357&fp-z=2.1423&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=7&mark-y=184&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz00MjkmaD04NSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice &quot;Clientes&quot;" />
                        </div>

                        <div>
                            <h3>Y nos redirije a esta vista donde se muestran los clientes creados</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/998c33a5-c88f-48cb-9b48-eb01237378b5/8453e4c6-6b37-4a00-8985-aaafea7de362.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5773&fp-y=0.5254&fp-z=1.0582&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=130&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDY3Jmg9NzM1JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y nos redirije a esta vista donde se muestran los clientes creados" />
                        </div>

                        <div>
                            <h3>Para registrar un cliente le daremos con el boton izquierdo del mouse al boton que dice "Registrar Cliente"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/ba87a5bf-9057-4486-853c-b804a1fd070c/abffd7ed-e679-414c-b6cc-63e11966008d.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para registrar un cliente le daremos con el boton izquierdo del mouse al boton que dice &quot;Registrar Cliente&quot;" />
                        </div>

                        <div>
                            <h3>Aparecerá este cuadro con todos los campos que se necesitan para registrar un cliente</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/b3b91202-926c-4b76-9986-ebe1d3cc753c/3402c8b9-16d5-4801-85a1-f88fe0f97aa5.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aparecerá este cuadro con todos los campos que se necesitan para registrar un cliente" />
                        </div>

                        <div>
                            <h3>Si hay errores en alguno de los campos aparecera esta alerta con este mensaje</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/1b88ddc8-e30e-4097-91a4-efec28814f27/540d4ccb-b3b9-4d2e-a7a9-eb6919426ab3.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5021&fp-y=0.4095&fp-z=2.0000&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=197&mark-y=238&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz03OTcmaD01MzEmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Si hay errores en alguno de los campos aparecera esta alerta con este mensaje" />
                        </div>

                        <div>
                            <h3>Al corregir todos los campos correctamente ya no apareceran errores</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/f8aa8dd8-c49f-4915-bef8-45896d8f1d7e/ca0f4117-ae71-47a1-b767-a739bdb83258.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al corregir todos los campos correctamente ya no apareceran errores" />
                        </div>

                        <div>
                            <h3>Y le daremos con el boton izquierdo del mouse en el boton que dice "Guardar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/dd9f5fc0-58aa-4777-ab72-3f5f292dd66c/ae5d07e3-09a2-4f73-bd03-f6283387651b.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6233&fp-y=0.7290&fp-z=2.8021&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=504&mark-y=320&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xOTEmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y le daremos con el boton izquierdo del mouse en el boton que dice &quot;Guardar&quot;" />
                        </div>

                        <div>
                            <h3>Como podemos ver, el cliente se registro correctamente y aparecerá en la tabla de clientes</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/301e3ba0-4389-4807-a859-7b447b6ffca9/bc8e9342-6967-4963-9e8e-14b613c4666e.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5416&fp-y=0.4606&fp-z=1.0885&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=196&mark-y=43&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz05MTEmaD0yMDMmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Como podemos ver, el cliente se registro correctamente y aparecerá en la tabla de clientes" />
                        </div>

                        <div>
                            <h3>Para editar el cliente le daremos con el boton izquierdo del mouse al boton gris con el icono del lapiz que esta en la parte derecha del cliente en la tabla</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/f2a1c6ad-924d-4af6-96d1-2fbd215d0267/c25cbb10-ae06-4255-8e2c-d861afead3f5.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8498&fp-y=0.2586&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=613&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para editar el cliente le daremos con el boton izquierdo del mouse al boton gris con el icono del lapiz que esta en la parte derecha del cliente en la tabla" />
                        </div>

                        <div>
                            <h3>Editaremos los campos que sean necesarios...</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/67e6e638-4c32-4d6c-8fed-d6339a4d1bc4/267b7638-c984-469c-aac5-98d87031a57a.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.4973&fp-y=0.2043&fp-z=1.6587&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=305&mark-y=165&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDMmaD01OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Editaremos los campos que sean necesarios..." />
                        </div>

                        <div>
                            <h3>Y con el boton izquierdo del mouse le daremos al boton "Guardar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/15e81df6-fbde-43c2-94fe-882e2de099b4/dcbcdbdb-f47e-444b-88d3-5cc040913e40.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6233&fp-y=0.6957&fp-z=2.8021&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=504&mark-y=320&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xOTEmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y con el boton izquierdo del mouse le daremos al boton &quot;Guardar&quot;" />
                        </div>

                        <div>
                            <h3>Ahora para eliminar un cliente le daremos al boton izquierdo del mouse al boton rojo con el icono de la papelera</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/7ce40db2-24ec-44e3-92a6-85153ab75059/3be8667c-c79e-48ee-973a-74caf0d24426.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8792&fp-y=0.2586&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=717&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Ahora para eliminar un cliente le daremos al boton izquierdo del mouse al boton rojo con el icono de la papelera" />
                        </div>

                        <div>
                            <h3>Aparecerá esta alerta...</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/7c06e083-91e1-4888-871c-edc5885c1254/6c05a1a5-3955-4322-b79d-981e3db115bd.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.5005&fp-z=1.5168&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=298&mark-y=168&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDUmaD00MDImZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aparecerá esta alerta..." />
                        </div>

                        <div>
                            <h3>Y le daremos con el boton izquierdo del mouse al boton que dice "Sí, eliminar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/7bcabef2-756c-46cb-af56-91d618fd20d4/1bf4d745-2c58-4d40-9521-9bacc312ecdd.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.4665&fp-y=0.6262&fp-z=2.6638&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=479&mark-y=316&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0yNDEmaD0xMDYmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y le daremos con el boton izquierdo del mouse al boton que dice &quot;Sí, eliminar&quot;" />
                        </div>

                        <div>
                            <h3>Y aparecerá la tabla vacia con un mensaje en la parte de arriba avisandonos que el cliente ha sido eliminado exitosamente </h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a54a7668-f4c1-4c6b-8c0c-c1927777224b/85578022-9a1b-4faf-8f99-0de0b80d17b5.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5802&fp-y=0.1350&fp-z=1.3096&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=60&mark-y=101&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDgxJmg9NTgmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y aparecerá la tabla vacia con un mensaje en la parte de arriba avisandonos que el cliente ha sido eliminado exitosamente " />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection