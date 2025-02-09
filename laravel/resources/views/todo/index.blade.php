@extends("layouts.admin.index")
@section("main_admin")

<div class="container-fluid mt-2">
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
  <!--  Row 3 -->
  <div class="row">
     
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Todo List</h5>
              <p class="card-subtitle mb-0">description</p>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-middle text-nowrap mb-0">
              <thead>
                <tr class="text-muted fw-semibold">
                  <th scope="col" class="ps-0">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">User</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="border-top">
                @foreach($todos as $item)
                <tr>
                  <td class="ps-0">
                    <p class="mb-0 fs-3">{{$item->title}}</p>

                  </td>
                  <td>
                    <p class="mb-0 fs-3">{{$item->description}}</p>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">{{$item->user->email}}</p>
                  </td>
                  <td>
                    <p class="fs-3 text-dark mb-0">
                      <a href="{{route('todo.edit',['todo'=>$item->id])}}" class="btn btn-sm mb-1 waves-effect waves-light btn-rounded btn-outline-secondary">
                        Edit</a>
                    </p>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $todos->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
@section("sub_script")

@endsection