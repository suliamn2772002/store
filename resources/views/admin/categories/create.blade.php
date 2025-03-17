@extends("layouts.admin")
@section('content')
<form action="{{ url('categories/store') }}" method="POST" style="padding: 12px;">
    @csrf
    <div class="mb-3">
        <label for="productName" class="form-label">اسم الصنف</label>
        <input type="text" class="form-control" id="productName" name="name" placeholder="اسم المنتج ">
    </div>
    <input type="submit" value="احفظ" class="btn btn-info">
</form>
@endsection
