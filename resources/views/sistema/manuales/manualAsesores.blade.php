@extends('adminlte::page')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h2>Asesores</h2>
                        </div>

                        <div>
                            <h3>En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice "Asesores"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/17c836bc-77bc-459c-baa5-282c846c3f2c/46d927a1-5868-4b24-a520-68be9f0cad84.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.0799&fp-y=0.2233&fp-z=2.1996&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=7&mark-y=322&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz00MDgmaD04MSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice &quot;Asesores&quot;" />
                        </div>

                        <div>
                            <h3>Para registrar a un asesor le daremos al boton izquierdo del mouse al boton que dice "Registrar Asesor"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/45ab7047-a886-40c2-9b78-5ee060f82428/833b1eb8-c99b-4cc4-a327-c0396ac778d0.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para registrar a un asesor le daremos al boton izquierdo del mouse al boton que dice &quot;Registrar Asesor&quot;" />
                        </div>

                        <div>
                            <h3>Y aparecerá el cuadro con los campos que se necesitan para registrar a un asesor</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/2b20906d-f01d-420c-b26a-8268935e764e/be307fb1-211f-4ae2-a828-b0fac9294d9e.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y aparecerá el cuadro con los campos que se necesitan para registrar a un asesor" />
                        </div>

                        <div>
                            <h3>Si estan los campos incorrectos aparecerá esta alerta</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/66490303-c8c5-481c-bfed-1781d03cd78c/771749f1-228d-4c15-870b-1d30dba88b7b.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.5005&fp-z=1.5168&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=298&mark-y=168&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDUmaD00MDImZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Si estan los campos incorrectos aparecerá esta alerta" />
                        </div>

                        <div>
                            <h3>Cuando esten los campos incorrectos aparecerán estos errores en cada uno de los campos</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/6d3fafa9-3473-4df0-a5ef-2cc4fdeaa69d/b4682ccf-4e2b-4648-af08-79a622893ad5.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.5000&fp-z=1.0026&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=2&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTk3Jmg9NzM0JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Cuando esten los campos incorrectos aparecerán estos errores en cada uno de los campos" />
                        </div>

                        <div>
                            <h3>Al ingresar los campos correctamente y presionemos el boton izquierdo del mouse y le damos al boton que dice "Guardar" y asi aparecerá el registro en la tabla de asesores</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/89344075-f3ac-4b80-912e-f620e2219841/4cd92269-50ce-4c3c-bb11-f44eee084c28.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5799&fp-y=0.1937&fp-z=1.3009&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=56&mark-y=53&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDg4Jmg9MjY2JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al ingresar los campos correctamente y presionemos el boton izquierdo del mouse y le damos al boton que dice &quot;Guardar&quot; y asi aparecerá el registro en la tabla de asesores" />
                        </div>

                        <div>
                            <h3>Para editar un asesor vamos a presionar el boton izquierdo del mouse en el boton gris con el icono del lápiz que esta en la parte derecha de cada registro</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/f61c79c3-b274-4b6a-ae09-d0d1d8b435d9/f82185cf-9e37-4745-b020-9dc37ca2c486.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8051&fp-y=0.2835&fp-z=2.9459&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=544&mark-y=326&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para editar un asesor vamos a presionar el boton izquierdo del mouse en el boton gris con el icono del lápiz que esta en la parte derecha de cada registro" />
                        </div>

                        <div>
                            <h3>Aquí aparecerá el cuadro con los campos que habrían que registrar para registrar un asesor</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/b41f6a95-9afe-4617-bea5-fe4cd6d7c452/95e9c070-a444-4186-82d7-003dc815dcc1.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.1589&fp-z=1.6587&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=299&mark-y=165&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDMmaD01OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aquí aparecerá el cuadro con los campos que habrían que registrar para registrar un asesor" />
                        </div>

                        <div>
                            <h3>Cuando tengamos los campos escritos presionaremos el botón izquierdo del mouse en el botón que dice "Guardar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/79b294bd-0f43-4967-893f-0393536a305c/f2fcf3c2-d8cf-42db-a5b2-f9a861283452.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6233&fp-y=0.3988&fp-z=2.8021&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=504&mark-y=320&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xOTEmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Cuando tengamos los campos escritos presionaremos el botón izquierdo del mouse en el botón que dice &quot;Guardar&quot;" />
                        </div>

                        <div>
                            <h3>Si presionamos el botón "Guardar" y hay errores en alguno de los campos aparecerá esta alerta</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a269b0db-9b95-4893-9227-d7d798aaf8be/617a24c7-1b2a-4728-9b20-eaba560b4363.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5000&fp-y=0.6262&fp-z=2.8249&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=532&mark-y=313&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMzYmaD0xMTMmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Si presionamos el botón &quot;Guardar&quot; y hay errores en alguno de los campos aparecerá esta alerta" />
                        </div>

                        <div>
                            <h3>Cuando tengamos los campos correctamente entonces le daremos de nuevo a "Guardar" y aparecerá el registro editado correctamente en la tabla de asesores</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/ed949c25-986d-4ead-92fd-5580a2763203/f3ec91c7-f041-46bd-935f-b2f17203a0f5.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6233&fp-y=0.3988&fp-z=2.8021&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=504&mark-y=320&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xOTEmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Cuando tengamos los campos correctamente entonces le daremos de nuevo a &quot;Guardar&quot; y aparecerá el registro editado correctamente en la tabla de asesores" />
                        </div>

                        <div>
                            <h3>Para eliminar una asesor le daremos clic al boton rojo en la parte derecha del registro</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/b11744b8-3e0e-41d7-affb-9cf4bc2dfdf6/1a01c2b1-7782-4db7-918f-94ea3647ee52.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.8308&fp-y=0.2916&fp-z=2.9477&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=558&mark-y=309&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTMmaD04NiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para eliminar una asesor le daremos clic al boton rojo en la parte derecha del registro" />
                        </div>

                        <div>
                            <h3>Aparecerá una alerta como esta y le daremos clic a el boton rojo que dice "Si, eliminar"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/0451adaf-dda2-41c9-a97e-f516bbb8fa74/858863cc-1e0f-4a8d-8acf-345c8f69c56e.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5003&fp-y=0.5005&fp-z=1.5168&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=298&mark-y=168&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz02MDUmaD00MDImZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aparecerá una alerta como esta y le daremos clic a el boton rojo que dice &quot;Si, eliminar&quot;" />
                        </div>

                        <div>
                            <h3>Y en la tabla el registro se eliminará correctamente</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/b9b3ef3b-1fc9-4619-8b5a-b8d0f610facd/465300b4-38d1-4ee3-8b06-7fe1435e6eb8.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5773&fp-y=0.5254&fp-z=1.0582&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=130&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDY3Jmg9NzM1JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y en la tabla el registro se eliminará correctamente" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection