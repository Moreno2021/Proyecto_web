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
                            <h2>Permisos</h2>
                        </div>

                        <div>
                            <h3>En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice "Permisos"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/5fb1db2c-af17-46e9-aca2-04ba2931cf52/9ac5ffde-c006-4c3c-b3f3-aede9faebaa1.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.0861&fp-y=0.2672&fp-z=2.1423&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=7&mark-y=347&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz00MjkmaD04NSZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="En la parte superior izquierda tenemos el menu de administrador y le daremos al boton izquierdo del mouse al boton que dice &quot;Permisos&quot;" />
                        </div>

                        <div>
                            <h3>Aqui nos llevará a la vista de los permisos</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/002e103d-4cde-4552-be33-8150da27a4e9/8938052a-009f-42b4-a17b-c27baa7d1291.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5834&fp-y=0.5260&fp-z=1.0596&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=144&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0xMDUyJmg9Nzc2JmZpdD1jcm9wJmNvcm5lci1yYWRpdXM9MTA%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Aqui nos llevará a la vista de los permisos" />
                        </div>

                        <div>
                            <h3>Le daremos al boton izquierdo del mouse al boton que dice "Crear todos los permisos"</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/454741ef-e75d-4e81-a12c-d7fe7987ab33/913fc1a0-7942-42e2-8308-13ec8c3196fb.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.3167&fp-y=0.0806&fp-z=2.2876&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=412&mark-y=100&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz0zNzYmaD04NyZmaXQ9Y3JvcCZjb3JuZXItcmFkaXVzPTEw" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Le daremos al boton izquierdo del mouse al boton que dice &quot;Crear todos los permisos&quot;" />
                        </div>

                        <div>
                            <h3>Y automaticamente se creearán todos los permisos ingresados en la aplicación</h3>
                            <img src="https://images.tango.us/workflows/5e8622d1-4665-4cba-8bce-eb26cbdb044a/steps/1f9fe4ca-a7e0-414a-b79b-c1298c2f81e7/71549311-eaa7-4c80-ad71-899effbb9d12.png?fm=png&crop=focalpoint&fit=crop&fp-x=0.5810&fp-y=0.5938&fp-z=1.2375&w=1200&border=2%2CF4F2F7&border-radius=8%2C8%2C8%2C8&border-radius-inner=8%2C8%2C8%2C8&blend-align=bottom&blend-mode=normal&blend-x=0&blend-w=1200&blend64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL21hZGUtd2l0aC10YW5nby13YXRlcm1hcmstdjIucG5n&mark-x=105&mark-y=2&m64=aHR0cHM6Ly9pbWFnZXMudGFuZ28udXMvc3RhdGljL2JsYW5rLnBuZz9tYXNrPWNvcm5lcnMmYm9yZGVyPTQlMkNGRjc0NDImdz05OTEmaD03NzYmZml0PWNyb3AmY29ybmVyLXJhZGl1cz0xMA%3D%3D" style="border-radius: 8px; border: 1px solid #F4F2F7;" width="600" alt="Y automaticamente se creearán todos los permisos ingresados en la aplicación" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection