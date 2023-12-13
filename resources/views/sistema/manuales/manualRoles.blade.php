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
                            <h2>Roles</h2>
                        </div>

                        <div>
                            <h3>En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice "Roles"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a50598b6-44f2-4eee-9cb1-1ce02f886b95/6e91654a-c69d-45b9-899b-b87570df4e8e.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.0861&fp-y=0.2216&fp-z=2.1423&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=7&mark-y=328&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz00MjkmaD04NSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice &quot;Roles&quot;" />
                        </div>

                        <div>
                            <h3>Y nos llevará a la vista de los roles que estan creados</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a3de1641-dc7b-44bf-81dc-d2e274dacfbe/bb633a24-03ec-4b46-b23c-9bd03d725561.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5834&fp-y=0.5260&fp-z=1.0596&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=144&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDUyJmg9Nzc2JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y nos llevará a la vista de los roles que estan creados" />
                        </div>

                        <div>
                            <h3>Para crear un rol, presionaremos el boton "Crear Rol" con el boton izquierdo del mouse</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/0902d589-a779-4b8c-bad9-66344b801697/8cc21b67-d72a-4cf2-b196-1fbd85fd5fb3.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.2808&fp-y=0.0806&fp-z=2.7362&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=493&mark-y=120&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0yMTUmaD0xMDQmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Para crear un rol, presionaremos el boton &quot;Crear Rol&quot; con el boton izquierdo del mouse" />
                        </div>

                        <div>
                            <h3>Aparecera este cuadro en el que estará el campo de "Nombre" y alli ingresaremos el nombre del Rol</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/496eeb53-43be-470b-81a2-46bb469a175b/45d21091-7f31-4c62-9c35-36ceb6d3d4eb.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.3660&fp-y=0.1622&fp-z=1.7710&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=319&mark-y=190&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz01NjImaD02NyZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aparecera este cuadro en el que estará el campo de &quot;Nombre&quot; y alli ingresaremos el nombre del Rol" />
                        </div>

                        <div>
                            <h3>Al ingresar el nombre le daremos al boton "Guardar" con el boton izquierdo del mouse</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/4e697234-47e0-43b8-91e7-a4469825bf11/31a4f6cb-4aea-435f-9275-46fedf4c1b25.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.2643&fp-y=0.2195&fp-z=2.7675&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=498&mark-y=337&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0yMDQmaD0xMDUmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Al ingresar el nombre le daremos al boton &quot;Guardar&quot; con el boton izquierdo del mouse" />
                        </div>

                        <div>
                            <h3>Y se agregará automaticamente a la tabla de roles</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/84f01205-ba1e-4661-a1e7-ebacf03793b3/26bff1a3-340a-44f2-ba4c-d4e77eff2d84.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5834&fp-y=0.5260&fp-z=1.0596&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=144&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDUyJmg9Nzc2JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y se agregará automaticamente a la tabla de roles" />
                        </div>

                        <div>
                            <h3>En la parte derecha de cada rol existente aparecerá un boton con un icono de un ojo, le daremos al boton izquierdo del mouse en ese boton</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/96dc9353-1af1-496b-8e12-1b0c74c494fb/5873b02c-0579-450c-b0b8-6c327b5e63a4.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.6651&fp-y=0.2789&fp-z=2.9386&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=539&mark-y=344&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMjImaD05MiZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En la parte derecha de cada rol existente aparecerá un boton con un icono de un ojo, le daremos al boton izquierdo del mouse en ese boton" />
                        </div>

                        <div>
                            <h3>Aqui nos llevará a la vista de permisos a roles</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/a1667cca-c84f-46c0-a24b-eb1c82d50e69/3b5d49e5-e19c-43e3-8051-c93303d8d0e7.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5834&fp-y=0.5260&fp-z=1.0596&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=144&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDUyJmg9Nzc2JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aqui nos llevará a la vista de permisos a roles" />
                        </div>

                        <div>
                            <h3>Como le dimos con el boton izquierdo del mouse al boton con el icono del ojo en el rol de "Admin" vamos a darle de nuevo con el boton izquierdo del mouse a cada cuadrito al lado del permiso para asignarselo a el rol</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/bcbe19e0-8e65-4130-bbc7-d58ff2dc12b7/7801d0a0-9304-4881-94cc-3dd347a1321f.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5865&fp-y=0.4814&fp-z=1.2412&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=16&mark-y=116&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMTY4Jmg9NTQ4JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Como le dimos con el boton izquierdo del mouse al boton con el icono del ojo en el rol de &quot;Admin&quot; vamos a darle de nuevo con el boton izquierdo del mouse a cada cuadrito al lado del permiso para asignarselo a el rol" />
                        </div>

                        <div>
                            <h3>Ya que tenemos todos los permisos listos le daremos con el boton izquierdo del mouse al boton "Actualizar Rol"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/0d40d9c5-be40-4538-9fee-0a43aefdaab6/22c2e072-1403-4f7f-b49e-596622ec14a0.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.2374&fp-y=0.7402&fp-z=2.5897&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=466&mark-y=341&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0yNjgmaD05OSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Ya que tenemos todos los permisos listos le daremos con el boton izquierdo del mouse al boton &quot;Actualizar Rol&quot;" />
                        </div>

                        <div>
                            <h3>Y ya se quedaran guardados en el rol y para asegurarse de que funcionó vamos a mirar el menu con todos los botones en los que se distribuye la aplicación.</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/dbaa96c6-28ba-483f-be09-01c64119ac73/06c30215-5552-4d34-b6b4-00e58429930c.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.1755&fp-y=0.2678&fp-z=1.8725&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=6&mark-y=5&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz00MDAmaD0xNDQ4JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y ya se quedaran guardados en el rol y para asegurarse de que funcionó vamos a mirar el menu con todos los botones en los que se distribuye la aplicación." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection