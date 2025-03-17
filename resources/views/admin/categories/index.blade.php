@extends("layouts.admin")
@section('content')
    <div class="container py-5">
        <a href="{{ url('categories/create') }}" class="btn btn-success mb-3">اضافة صنف</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اٍسم الصنف</th>
                <th scope="col">التحكم بالصنف</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ url('categories/delete'). '/' . $category->id }}" class="btn btn-danger">حذف</a>
                        <a href="{{ url('categories/edit') . '/' . $category->id }}" class="btn btn-info">تعديل</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
