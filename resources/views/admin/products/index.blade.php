@extends("layouts.admin")
@section('content')
    <div class="container py-5">
        <a href="{{ url('products/create') }}" class="btn btn-success mb-3">اضافة منتج</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اٍسم المنتج</th>
                <th scope="col">الصنف</th>
                <th scope="col">السعر</th>
                <th scope="col">الكمية</th>
                <th scope="col">التحكم بالمنتج</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ url('products/delete') . "/" . $product->id }}" class="btn btn-danger">حذف</a>
                            <a href="{{ url('products/edit')  . "/" . $product->id }}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
