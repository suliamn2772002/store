@extends("layouts.admin")
@section('content')
<form action="{{ url('products/store') }}" method="POST" style="padding: 12px;">
    @csrf
    <div class="mb-3">
        <label for="productName" class="form-label">اسم المنتج </label>
        <input type="text" class="form-control" id="productName" name="name" placeholder="اسم المنتج ">
    </div>
    <div class="mb-3">
        <label for="productQuantity" class="form-label">الكمية</label>
        <input type="number" class="form-control" name="quantity" id="productQuantity" placeholder="الكمية">
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">السعر</label>
        <input type="number" class="form-control" name="price" id="productPrice" placeholder="السعر">
    </div>
    <div class="mb-3">
        <label for="productDescription" class="form-label">وصف المنتج</label>
        <textarea class="form-control" name="description" id="productDescription" placeholder="وصف المنتج" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="productDescription" class="form-label">التصنيف</label>
        <select name="category" class="form-control" id="category">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="احفظ" class="btn btn-info">
</form>
@endsection
