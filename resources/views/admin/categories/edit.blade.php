@extends("layouts.admin")
@section('content')
<form action="{{ url('categories/update'). "/" . $category->id }}" method="POST" style="padding: 12px;">
    @csrf
    <div class="mb-3">
        <label for="categoryName" class="form-label">اسم المنتج </label>
        <input type="text" class="form-control" id="categoryName" name="name" placeholder="اسم الصنف " value="{{ $category->name }}">
    </div>
    <input type="submit" value="احفظ" class="btn btn-info">
</form>
@endsection
