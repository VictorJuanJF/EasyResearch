@extends('layouts.app', ['title' => __('User Profile')]) 
@section('content')
    @include('users.partials.header', [ 'title'
=> 'El problema de la investigación', 'description' => __('Una serie de pasos bien explicados'), 'class' => 'col-lg-12' ])

<div class="container-fluid mt--7">
    <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card">
                    <div class="card-header">Problema General </div>
                    <div class="card-body">
                        <input v-if="editMode" type="text" name id class="form-control" v-model="thought.description">
                        <p v-else class="card-text"></p>
                    </div>
                    <div class="card-footer text-muted">
                        <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
                        <button v-else class="btn btn-default" v-on:click="onClickEdit()">Editar</button>
                        <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
                    </div>
                </div>

                <hr>

                <div class="card">
                    <div class="card-header">Problemas Específicos </div>
                    <div class="card-body">
                        <input v-if="editMode" type="text" name id class="form-control" v-model="thought.description">
                        <p v-else class="card-text"></p>
                    </div>
                    <div class="card-footer text-muted">
                        <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
                        <button v-else class="btn btn-default" v-on:click="onClickEdit()">Editar</button>
                        <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
    @include('layouts.footers.auth')
</div>
@endsection