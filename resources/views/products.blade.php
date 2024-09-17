<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    @foreach ($products as $product)
        <x-product-card :product="$product" />
    @endforeach
</body>
</html>