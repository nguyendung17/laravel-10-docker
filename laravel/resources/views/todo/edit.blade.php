@extends('layouts.admin.index')
@section('main_admin')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Basic Start -->
    <!-- --------------------------------------------------- -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Form Basic</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Form Basic</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{asset('assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Basic Form</h5>
                        <form method="POST" action="{{route('todo.update',['todo'=>$todo->id])}}">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <input type="hidden" name="id" value="{{$todo->id}}"/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3" >
                                        <input id="tb-title" name="title" value="{{$todo->title}}" type="text" class="form-control {{ showInputError($errors,'title') }} " placeholder="Enter Name here">
                                        <label for="tb-title">Title</label>
                                        {{showInputErrorText($errors,'title') }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 ">
                                        <textarea id="tb-desc" name="description"  type="description" class="form-control {{showInputError($errors,'description') }}" 
                                          placeholder="">{{$todo->description}}</textarea>
                                        <label for="tb-desc">Description</label>
                                        {!!showInputErrorText($errors,'description') !!}
                                    </div>
                                    
                                </div>
                                  
                                <div class="col-12">
                                    <div class="d-md-flex align-items-center mt-3">
                                         
                                        <div class="ms-auto mt-3 mt-md-0">
                                            <button type="submit" type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="ti ti-send me-2 fs-4"></i>
                                                    Submit
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
@endsection