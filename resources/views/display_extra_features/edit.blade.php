@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('displayExtraFeatures.index') !!}">Display Extra Feature</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Display Extra Feature</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($displayExtraFeature, ['route' => ['displayExtraFeatures.update', $displayExtraFeature->id], 'method' => 'patch']) !!}

                              @include('display_extra_features.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection